@extends('layouts.main')

@section('head-title', 'Product detail | DC COMICS')

@section('main-content')
    <section class="comic-detail">
        <div class="container details">
            <div class="comic-detail-image">
                <a href="">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </a>
            </div>

            <div class="d-flex align-items-center">
                <div class="comic-detail-info">
                    <div class="comic-detail-title">
                        <h2>
                            {{ $comic['title'] }}
                        </h2>
                    </div>
                    <div class="comic-detail-price-availability">

                    </div>
                    <div class="comic-detail-description">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="comic-detail-ad">
                    <div class="comic-detail-ad">
                        ADVERTISEMENT
                    </div>
                    <img src="{{ asset('img/applynow.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection