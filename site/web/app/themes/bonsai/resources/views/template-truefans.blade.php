{{--
  Template Name: True Fans Template
--}}

@extends('layouts.truefans')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
