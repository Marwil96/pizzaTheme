@extends('layouts.app')
{{-- HuvudComponent Vid Loop/Yield --}}
@section('content')
  @while(have_posts()) @php the_post() @endphp
  	
    @include('partials.content-page')
    <h1>{{ get_the_ID() }}</h1>
  @endwhile
@endsection
