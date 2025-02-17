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
        <ul id="header-user" class="box-x gap">
          <li>
            <a href="{{ route('login') }}">
              Войти
            </a>
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

<script type="module">
  import {user} from '{{ asset('assets/js/user/user.js') }}'

  window.user = user()

  function headerUserInit() {
    if (window.user) {
      console.log(window.user)
      const headerUser = document.getElementById('header-user')
      headerUser.innerHTML = `
  <li>
    <a href="{{ route('profile') }}">
      <div class="box-x gap">
        <p>${window.user.login}</p>
        <img class="ava" src="http://localhost:8000/api/image/${window.user.image_id}" alt="${window.user.login}">
      </div>
    </a>
  </li>
  <li>
    <button id='logout' class='button'>
      Выйти
    </button>
  </li>
`;
    }
  }

  console.log('window.user', window.user)
  headerUserInit()
</script>




