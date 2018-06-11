@extends('layouts.app')

@section('pizzaMenu')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @php query_posts('cat=2') @endphp 
 @if ( have_posts() ) @while (have_posts()) @php the_post() @endphp
  {{-- @include('partials.content-'.get_post_type()) --}} 
  {{-- @php ($familyPrice = $price) @endphp --}}

  <div class="menuListContainer" @php post_class() @endphp>
   <div class="menuDescriptionContainer" style="width:70%">
      <h1>{{ the_field('dish') }}</h1>
      <h2>{{ the_field('description_dish') }}</h2>
  </div>
  <div class="priceContainer">
    <h1 class="price">{{ the_field('price_dish') }}kr</h1>
    <h1 class="price">{{ the_field('price_dish') }}kr</h1>
    <h1 class="price">{{ the_field('price_dish') }}kr</h1>
  </div>
</div>
  @endwhile @endif @php wp_reset_query() @endphp   

  {!! get_the_posts_navigation() !!}
@endsection

@section('kebabMenu')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @php query_posts('cat=3') @endphp 
 @if ( have_posts() ) @while (have_posts()) @php the_post() @endphp
  {{-- @include('partials.content-'.get_post_type()) --}}
  <div class="menuListContainer" @php post_class() @endphp>
   <div class="menuDescriptionContainer">
      <h1>{{ the_field('dish') }}</h1>
      <h2>{{ the_field('description_dish') }}</h2>
  </div>
  <h1 class="price">{{ the_field('price_dish') }}kr</h1>
</div>
  @endwhile @endif @php wp_reset_query() @endphp   

  {!! get_the_posts_navigation() !!}
@endsection

@section('saladMenu')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  @php query_posts('cat=4') @endphp 
 @if ( have_posts() ) @while (have_posts()) @php the_post() @endphp
  {{-- @include('partials.content-'.get_post_type()) --}}
  <div class="menuListContainer" @php post_class() @endphp>
   <div class="menuDescriptionContainer">
      <h1>{{ the_field('dish') }}</h1>
      <h2>{{ the_field('description_dish') }}</h2>
  </div>
  <h1 class="price">{{ the_field('price_dish') }}kr</h1>
</div>
  @endwhile @endif @php wp_reset_query() @endphp   

  {!! get_the_posts_navigation() !!}
@endsection

@section('pizzaHeader')
  <h1>Pizzor</h1>
  {{-- <h2>Fam: 140kr Amerikansk Pan pizza: 70kr</h2> --}}
  <div class="prisHeader">
    <h3>Fam:</h1>
    <h3>Pan:</h1>
    <h3>Ord:</h1>
  </div>
@endsection

@section('kebabHeader')
  <h1>Välj mellan:</h1>
  <h2>Kebab, KycklingKebab, Falafel</h2>
@endsection

@section('saladHeader')
  <h1>Sallad</h1>
@endsection