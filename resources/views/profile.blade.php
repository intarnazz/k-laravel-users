<script type="module">
  import {token} from '{{ asset('assets/js/user/user.js') }}'
  console.log('!token()')
  if(!token()) {
    window.location.href = "{{ route('login') }}"
  }
</script>

@component('layout.app')
  @component('layout.wrapper')
    @include('layout.header.main')
  @endcomponent
  @component('layout.main')
    @component('layout.wrapper')
      @include('sections.profile')
    @endcomponent
  @endcomponent
  @component('layout.wrapper')
    @include('layout.footer.main')
  @endcomponent
@endcomponent
