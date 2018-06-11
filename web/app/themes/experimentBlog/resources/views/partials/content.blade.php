<article @php post_class() @endphp>
 {{--  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header> --}}
  <a href="{{ get_permalink() }}">
	  <div class="card">
	  		<img class="cardImage" src="{{ the_post_thumbnail( 'full' ) }}" >
	        <div class="cardTextContainer">
	          <h3><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></h3>
	          <h1>{{ get_the_title() }}</h1>
	          <h3>@php the_excerpt() @endphp</h3>
	        </div>
	   </div>
   </a>
</article>

      
