@extends('layouts.main')

@section('head-title', 'Product detail | DC COMICS')

@section('main-content')
    <div class="jumbo">

    </div>
    <div class="detail-bar">

    </div>
    <section class="comic-detail">
        <div class="container details">
            <div class="comic-detail-image">
                <a href="">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </a>
            </div>

            <div class="comic-detail-container d-flex">
                <div class="comic-detail-info pe-5">
                    <div class="comic-detail-title">
                        <h2 class="fs-1 fw-bold">
                            {{ $comic['title'] }}
                        </h2>
                    </div>
                    <div class="comic-detail-price-availability d-flex align-items-center">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-between">
                                <div>
                                    us price
                                </div>
                                <div>
                                    available
                                </div>
                            </div>
                            <div class="align-self-end">
                                check
                            </div>
                        </div>
                    </div>
                    <div class="comic-detail-description">
                        <p class="fw-bold">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="comic-detail-ad d-flex flex-column">
                    <div class="comic-detail-ad align-self-end fw-bold fs-4">
                        ADVERTISEMENT
                    </div>
                    <img src="{{ asset('img/applynow.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection