@component('layout.app')
  @component('layout.wrapper')
    @include('layout.header.main')
  @endcomponent
  @component('layout.main')
    @component('layout.wrapper')
      <h1>{{ $user['login'] }}</h1>
    @endcomponent
  @endcomponent
  @component('layout.wrapper')
    @include('layout.footer.main')
  @endcomponent
@endcomponent
