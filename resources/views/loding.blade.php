@component('layout.app')
  @component('layout.wrapper')
    @include('layout.header.main')
  @endcomponent
  @component('layout.main')
    <div class="center">
      @include('components.logo')
    </div>
  @endcomponent
  @component('layout.wrapper')
    @include('layout.footer.main')
  @endcomponent
@endcomponent
