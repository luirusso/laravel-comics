@extends('layouts.main')

@section('head-title', 'Home | DC COMICS')

@section('main-content')
    <main>
        <div class="container">
            <div class="cards-comics d-flex flex-wrap py-5">
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
    </main>
@endsection