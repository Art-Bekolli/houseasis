@extends('layouts.app')

@section('content')
  @include('partials.page-header')
    <form method="post">
    <div class="search_input">
      <input type="text" name="search_term" placeholder="search">
      <div class="submit_con"><input type="submit" value="submit" name="submit" class="search_button"><img src="@option('search')"></div>
    </div>
  </form>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
@php
if($_POST['submit']) {
    $link = get_site_url() . "?s=" . $_POST["search_term"];
    header('Location:' . $link);
     }
@endphp