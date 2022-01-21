@extends('layouts.main')

@section('head-title', 'Product detail | DC COMICS')

@section('main-content')
    <div class="jumbo">

    </div>
    <div class="detail-bar">

    </div>
    <section class="comic-detail">
        <div class="container details">
            <div class="comic-detail-image position-absolute">
                <div class="position-relative">
                    <div class="comic-detail-tags text-uppercase position-absolute px-2">
                        {{$comic['type']}}
                    </div>
                    <a href="">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <div class="view-gallery comic-detail-tags position-absolute w-100 text-center">
                        <a href="">
                            VIEW GALLERY
                        </a>
                    </div>
                </div>
            </div>

            <div class="comic-detail-container d-flex">
                <div class="comic-detail-info pe-5">
                    <div class="comic-detail-title">
                        <h2 class="fs-1 fw-bold">
                            {{ $comic['title'] }}
                        </h2>
                    </div>
                    <div class="comic-detail-price-availability d-flex align-items-center w-100 px-2 my-3 fw-bold">
                        <div class="d-flex justify-content-between w-100 h-100">
                            <div class="d-flex justify-content-between w-100 align-items-center">
                                <div class="flex-grow-1 px-3">
                                    U.S. Price: <span>{{ $comic['price'] }}</span>
                                </div>
                                <div class="px-3">
                                    AVAILABLE
                                </div>
                            </div>
                            <div class="check-availability d-flex align-items-center align-self-end  text-center h-100">
                                <span class="flex-grow-1 mx-3">
                                    Check Availability <span><i class="fas fa-caret-down"></i></span>
                                </span>
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