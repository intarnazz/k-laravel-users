@component('layout.app')
  @component('layout.wrapper')
    @include('layout.header.main')
  @endcomponent
  @component('layout.main')
    @component('layout.wrapper')
      @include('sections.catalog')
      @include('sections.pagin')
    @endcomponent
  @endcomponent
  @component('layout.wrapper')
    @include('layout.footer.main')
  @endcomponent
@endcomponent
