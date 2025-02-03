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
    <a href="{{ route('home') }}">
      <svg class="E18si" width="32" height="32" viewBox="0 0 32 32" version="1.1" aria-labelledby="unsplash-home"
           aria-hidden="false" style="flex-shrink:0">
        <desc lang="en-US">logo</desc>
        <title id="unsplash-home">Home</title>
        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
      </svg>
    </a>
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
            Регистрация
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>

<script>

</script>



