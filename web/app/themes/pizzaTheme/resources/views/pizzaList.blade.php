@extends('layouts.app')
  @php query_posts('cat=2') @endphp 
 @if ( have_posts() ) @while (have_posts()) @php the_post() @endphp
  <div class="menuListContainer" @php post_class() @endphp>
   <div>
      <h1>{{ the_field('dish') }}</h1>
      <h2>{{ the_field('description_dish') }}</h2>
  </div>
  <h1 class="price">{{ the_field('price_dish') }}</h1>
</div>
  @endwhile @endif @php wp_reset_query() @endphp   

