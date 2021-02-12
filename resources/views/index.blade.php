@extends('layouts.app')

@section('content')
  @include('partials.two-column')
  @include('partials.hero')
  <div class="container">
    <div class="-mx-4">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>
  </div>
@endsection
