@extends('layouts.app')

@section('content')
    <section class="hero text-center my-5">
        @include('partials.hero')
    </section>

    <section class="carousel-container my-5">
        @include('partials.carousel')
    </section>

    <section class="events-container my-5">
        @include('partials.events')
    </section>
@endsection
