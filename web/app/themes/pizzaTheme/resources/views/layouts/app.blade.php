<!doctype html>
<html @php language_attributes() @endphp>
  {{-- @include('partials.head') --}}
  <body @php body_class() @endphp>
    <div class="App">
      <div class="navBar">
        <h2 onclick="document.getElementById('mainPage').scrollIntoView({behavior:'smooth' })" >{{ get_the_title(2)}}</h2>
        <div>
          <h3 onclick="document.getElementById('mainPage').scrollIntoView({behavior:'smooth' })">Hem</h3>
          <h3 onclick="document.getElementById('menuPage').scrollIntoView({behavior:'smooth' })">Meny</h3>
          <h3 onclick="document.getElementById('aboutPage').scrollIntoView({behavior:'smooth', alignToTop: true })">Kontakt</h3>
        </div>
      </div>
      <div class="mainPage" id="mainPage">
        <div class="rubrikMainPage">
        <h1> {{ the_field('hero_rubrik', 2) }} <span>0511-21840</span></h1>
        </div>
      </div>
      <div class="menuPage" id="menuPage">
        <div class="menu" id="menu">
          <div class="flikMenu">
            <div class="flik activeFlik" id="pizzaFlik" onclick="changeContentMenu('pizzaFlik', 'pizzaMenu')"> <h3> Pizza </h3> </div>
            <div class="flik" id="kebabFlik" onclick="changeContentMenu('kebabFlik', 'kebabMenu')"> <h3> Kebab </h3> </div>
            <div class="flik" id="saladFlik" onclick="changeContentMenu('saladFlik', 'saladMenu')"> <h3> Salad </h3> </div>
          </div>
          {{-- pizzaMenu --}}
          <div class="menuContent" id="pizzaMenu">
            <div class="menuListSubHeader">
            @yield('pizzaHeader')
          </div>
            @yield('pizzaMenu')
          </div>
          {{-- kebabMenu --}}
          <div class="menuContent" id="kebabMenu">
            <div class="menuListSubHeader" style="display: block!important;">
            @yield('kebabHeader')
          </div>
            @yield('kebabMenu')
          </div>
          {{-- SalladMenu --}}
          <div class="menuContent" id="saladMenu" style="display: none!important;">
            <div class="menuListSubHeader" style="display: block!important;">
            @yield('saladHeader')
          </div>
            @yield('saladMenu')
          </div>
        </div>
      </div>
      <div class="aboutPage" id="aboutPage">
        <h1>{{ get_the_title(2)}}</h1>
        <span>
          <h2>Telefonnummer:</h2>
          <h3>{{ the_field('phone_number', 2) }}</h3>
        </span>
        <span>
          <h2>Adress:</h2>
          <h3>{{ the_field('company_adress', 2) }}</h3>
        </span>
        <span>
          <h2>Öppetider</h2>
          <h3>{{ the_field('business_hours', 2) }}</h3>
        </span>
      </div>
    </div>
    {{-- @php do_action('get_header') @endphp --}}
   {{--  @include('partials.header') --}}
    {{-- <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div> --}}
    {{-- @php do_action('get_footer') @endphp
    @include('partials.footer') --}}
    @php wp_footer() @endphp
    <script type="text/javascript">

      setTimeout(function(){  menuSlideUp() }, 150);
      function menuSlideUp(){
      var menu = document.getElementById("menu");
      menu.classList.add('menuSlideUp')
      }

      function changeContentMenu(activeFlik, menuName) {
        var i, menuContent, flik;
        menuContent = document.getElementsByClassName("menuContent");
        for (i = 0; i < menuContent.length; i++) {
            menuContent[i].style.display = "none";
        }
      document.getElementById(menuName).style.display = "block";

      flik = document.getElementsByClassName("flik");
        for (i = 0; i < flik.length; i++) {
            flik[i].style.background = "#D12929";
        }
      document.getElementById(activeFlik).style.background = "#FF2C2C";

       // var flik = document.getElementById(flik);
       // var kebabFlik = document.getElementById("kebabFlik");
       // var pizzaFlik = document.getElementById("pizzaFlik");
       // if(flik.classList.contains('activeFlik')) {
       //  console.log("Pizza ÄR AKTIV")
       // } else if(flik === pizzaFlik) {
       //  console.log(flik)
       //  flik.classList.add('activeFlik')
       //  kebabFlik.classList.remove('activeFlik')
       // } else if(flik === kebabFlik) {
       //  console.log(flik)
       //  flik.classList.add('activeFlik')
       //  pizzaFlik.classList.remove('activeFlik')
       // }
      }
      document.getElementById("pizzaFlik").style.background = "#FF2C2C";
    </script>
  </body>
</html>
