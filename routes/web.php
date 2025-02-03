<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
  $request = Request::instance();
  $request->headers->set('take', 12);
  $catalogController = app(CatalogController::class);
  $response = $catalogController->get($request);
  $res = json_decode($response->getContent(), true);
  return view('index', compact('res'));
})->name('home');


Route::get('/catalog', function () {
  $count = 9 * 2;
  $request = Request::instance();
  $page = $request->query('page', 1);
  $order = $request->query('order', 'views');
  $request->headers->set('skip', ($page - 1) * $count);
  $request->headers->set('take', $count);
  $request->headers->set('order', $order);
  $catalogController = app(CatalogController::class);
  $response = $catalogController->get($request);
  $res = json_decode($response->getContent(), true);
  return view('catalog', compact('res', 'count', 'page', 'order'));
})->name('catalog');
