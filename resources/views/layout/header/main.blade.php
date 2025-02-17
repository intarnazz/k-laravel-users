<style>
  .header {
    padding: 1rem 0;
    border-bottom: 1px rgba(0, 0, 0, 0.1) solid;
  }

  h2 {
    font-size: 2rem;
  }
</style>

<header id="header" class="header box-x">
  <div class="box-x gap">
    @include('components.logo')
    @if(Request::is('catalog'))
      <h2>Catalog</h2>
    @endif
  </div>

  <nav>
    <ul class="box-x gap2">
      <li>
        <a href="{{ route('catalog') }}">
          Каталог
        </a>
      </li>
      |
      <li>
        <ul class="box-x gap">
          <li>
            Войти
          </li>
          <li>
            <a href="{{ route('register') }}">

              Регистрация
            </a>

          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>

<script>

</script>



