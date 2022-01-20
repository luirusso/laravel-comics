@extends('layouts.main')

@section('head-title', 'Home | DC COMICS')

@section('main-content')
    <main>
        <div class="container">
            <div class="cards-comics d-flex flex-wrap pt-5 pb-4">
                @foreach ($comics as $comic)
                    <div class="card-site">
                        <div class="card-image">
                            <a href="">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </a>
                        </div>

                        <div class="card-text pt-3 pb-5">
                            <a href="">
                                {{ $comic['title'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="pb-3">
            <button class="load-btn d-flex justify-content-center fw-bold fs-4">
                LOAD MORE
            </button>
        </div>
    </main>
@endsection