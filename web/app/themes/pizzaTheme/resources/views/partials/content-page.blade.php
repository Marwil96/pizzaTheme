{{-- @php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
 --}}
  <div class="menuListContainer">
            <div>
              <h1>{{ the_field('dish', 42) }}</h1>
              <h2>{{ the_field('description_dish', 42) }}</h2>
            </div>
            <h1 class="price">{{ the_field('price_dish', 42) }}</h1>
          </div>