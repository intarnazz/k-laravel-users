<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
  $request = Request::instance();
  $request->headers->set('take', 9*2);
  $catalogController = app(CatalogController::class);
  $response = $catalogController->get($request);
  $res = json_decode($response->getContent(), true);
  return view('index', compact('res'));
})->name('home');


Route::get('/catalog', function () {
  $request = Request::instance();
  $request->headers->set('take', 9*2);
  $catalogController = app(CatalogController::class);
  $response = $catalogController->get($request);
  $res = json_decode($response->getContent(), true);
  return view('catalog', compact('res'));
})->name('catalog');
