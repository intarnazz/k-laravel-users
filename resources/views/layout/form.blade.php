<style>
  main,
  .img__wrapper,
  .form__wrapper {
    height: 100%;
  }

  img {
    height: 100%;
    width: 100%;
  }

  .main__wrapper {
    padding: 0 1rem;
  }

  input {
    background-color: #333333;
    color: #fff;
    padding: .1rem;
  }

  form {
    width: 500px;
  }
</style>
<div class="form__wrapper flex box-x">
  <div class="img__wrapper box-y flex">
    <img src="{{ asset('assets/img/reg.jpg') }}" alt="reg">
  </div>
  <div class="flex main__wrapper">
    @component('layout.main')
      <div class="center">
        <div class="box-y gap">
          <div class="box-x gap">
            @include('components.logo')
            <a class="a"
               href="{{ url()->previous() !== url()->current() ? url()->previous() : route('home') }}">Назад</a>
            <div class="flex"></div>
          </div>
          <div class="box-y">
            {{ $slot }}
          </div>
        </div>
      </div>
    @endcomponent
  </div>
</div>

