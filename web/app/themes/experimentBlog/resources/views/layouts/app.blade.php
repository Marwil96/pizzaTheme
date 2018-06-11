<!doctype html>
<html @php language_attributes() @endphp>
  {{-- @include('partials.head') --}}
  <body @php body_class() @endphp>
   {{--  @php do_action('get_header') @endphp --}}
    {{-- @include('partials.header') --}}
    <div class="app" role="document">
        <h1 class="bigHeader">Experiments</h1>
        <h2 class="smallHeader">This is the place i put every single thing i do.</h2> 
          <div class="cardContainer">
            @yield('content')
          </div>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
