@extends('layouts.master')
@section('content')

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: "{{ session('error') }}",
            confirmButtonText: 'OK'
        });
    </script>
@endif


<section class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin  round-cursor" style="background-image: url({{ asset($image_category->img1) }})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-15px xs-mb-5px">
                <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">
                    @if ($categorie)
                        {{ ucfirst($categorie) }}
                    @else
                        {{ 'All Products' }}
                    @endif
                </h1>
            </div>
            <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">

                    {{ $text_category->text2 }}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="bg-very-light-gray pt-35px pb-35px">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 text-center justify-content-center"
            data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div
                class="col border-end xs-border-end-0 xs-border-bottom border-color-transparent-base-color sm-mb-25px xs-mb-20px xs-pb-20px">
                <a href="#superior" class="alt-font fs-22 text-dark-gray section-link">Superior room</a>
            </div>
            <div
                class="col border-end sm-border-end-0 xs-border-bottom border-color-transparent-base-color sm-mb-25px xs-mb-20px xs-pb-20px">
                <a href="#deluxe" class="alt-font fs-22 text-dark-gray section-link">Deluxe room</a>
            </div>
            <div
                class="col border-end xs-border-end-0 xs-border-bottom border-color-transparent-base-color xs-mb-20px xs-pb-20px">
                <a href="#signature" class="alt-font fs-22 text-dark-gray section-link">Signature room</a>
            </div>
            <div class="col">
                <a href="#luxury" class="alt-font fs-22 text-dark-gray section-link">Luxury suite room</a>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<!-- start section -->
<section class="background-position-center background-repeat"
    style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-9 xs-mb-50px">
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 md-mb-45px" data-bottom-top="transform: translateY(40px)"
                data-top-bottom="transform: translateY(-40px)">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="line-icon-Medal-2 icon-double-large text-base-color mb-20px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block alt-font text-dark-gray fs-20">Luxury resort</span>
                        <p>Experience a unique stay.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 md-mb-45px" data-bottom-top="transform: translateY(-40px)"
                data-top-bottom="transform: translateY(40px)">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="line-icon-Moustache-Smiley icon-double-large text-base-color mb-20px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block alt-font text-dark-gray fs-20">Trained manpower</span>
                        <p>Dedicated meal courses.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 xs-mb-45px" data-bottom-top="transform: translateY(40px)"
                data-top-bottom="transform: translateY(-40px)">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="line-icon-French-Fries icon-double-large text-base-color mb-20px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block alt-font text-dark-gray fs-20">Dining restaurants</span>
                        <p>Discover a medley of flavours.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03" data-bottom-top="transform: translateY(-40px)"
                data-top-bottom="transform: translateY(40px)">
                <div class="feature-box">
                    <div class="feature-box-icon">
                        <i class="line-icon-Life-Safer icon-double-large text-base-color mb-20px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block alt-font text-dark-gray fs-20">Swimming pool</span>
                        <p>Unwind and discover joy.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>



        @foreach ($produit as $item)
            <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}" id="superior"
                data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-7 md-h-400px sm-h-300px text-center">
                    <div class="swiper h-100 swiper-pagination-style-3"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 10, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 1 }, "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            @foreach ($produit_image->where('produit_id', $item->id) as $img)
                                <!-- start carousal item -->
                                <div class="swiper-slide cover-background"
                                    style="background-image: url('{{ asset($img->img) }}')">
                                </div>
                                <!-- end carousal item -->
                            @endforeach
                            <div class="swiper-slide cover-background"
                                style="background-image: url('{{ asset($item->img) }}')">
                            </div>
                        </div>
                        <!-- start slider pagination -->
                        <!--<div class="swiper-pagination slider-four-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                        <!-- end slider pagination -->
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 bg-dark-gray-transparent-medium h-50px w-50px swiper-button-prev slider-navigation-style-01">
                            <i class="fa-solid fa-angle-left text-white"></i></div>
                        <div
                            class="slider-one-slide-next-1 bg-dark-gray-transparent-medium h-50px w-50px swiper-button-next slider-navigation-style-01">
                            <i class="fa-solid fa-angle-right text-white"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-lg-5 bg-very-light-gray">
                    <div class="pt-13 pb-12 ps-15 pe-15 lg-p-8 last-paragraph-no-margin">
                        <span class="text-base-color fw-500 d-block">Phenomenal view</span>
                        <a href="demo-hotel-and-resort-room-details.html">
                            <h4 class="alt-font text-dark-gray mb-20px ls-minus-1px d-inline-block">{{ $item->nom }}</h4>
                        </a>
                        <p class="fs-17">{{ $item->description_p }}</p>
                    </div>
                    <div class="ps-15 pe-15 pt-5 pb-5 lg-ps-8 lg-pe-8 border-top border-color-transparent-dark-very-light align-items-center d-flex">
                        <h5 class="mb-0 fw-700 text-dark-gray">{{ $item->prix ? $item->prix : '00.00' }} DH<span class="fs-16 fw-500 align-middle ms-15px"></span></h5>
                        <a href="/details/{{ $item->id }}"  class="btn btn-medium btn-switch-text btn-base-color btn-box-shadow btn-round-edge d-inline-block align-middle ms-15px xl-ms-15px xs-ms-auto">
                            <span>
                                <span class="btn-double-text" data-text="Book your stay">plus details</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center background-repeat overlap-height pt-0"
    style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-xxl-8 col-xl-9 col-lg-10 text-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fs-20 mb-15px text-base-color fw-500 d-block d-inline-block">Luxurious living
                    lifestyle</span>
                <h5 class="alt-font text-dark-gray ls-minus-1px mb-0">Crafto hotels tells potential customers what they
                    can expect when they visit a <span class="text-decoration-line-bottom-medium">beautiful and
                        luxurious 5-star sleeping experience</span> at a very affordable 1-star price.</h5>
            </div>
        </div>
        <div class="row justify-content-center mb-5 xs-m-0"
            data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-9">
                <div
                    class="row align-items-center justify-content-center bg-white box-shadow-quadruple-large border border-color-extra-medium-gray border-radius-100px xs-border-radius-30px p-15px">
                    <div
                        class="col-xl-5 col-md-6 ps-0 sm-ps-15px border-end sm-border-end-0 border-color-transparent-dark-very-light text-center align-items-center d-sm-flex justify-content-center">
                        <img src="images/demo-hotel-and-resort-client-01.svg" class="h-50px" alt="">
                        <div class="review-star-icon ms-15px fs-20 xs-ms-0">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                    </div>
                    </div>
                    <div
                        class="col-xl-5 col-md-6 pe-0 sm-pe-15px text-center align-items-center d-flex justify-content-center">
                        <span class="text-dark-gray fw-500 fs-22"><span class="fw-700 text-decoration-line-bottom">15
                                million customers</span> trusted resort.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
