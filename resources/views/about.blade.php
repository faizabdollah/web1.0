@extends('layouts.master')
@section('content')
<!-- end header -->
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin  round-cursor" style="background-image: url({{ asset($image_about->img1) }})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-15px xs-mb-5px">
                <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">{{ $text_about->text1 }}</h1>
            </div>
            <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">{{ $text_about->text2 }}</p>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="background-position-center background-repeat overlap-height pb-5" style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container overlap-gap-section">
        <div class="row">
            <div class="col-md-6 sm-mb-25px" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="mb-15px text-base-color fw-500 d-block">{{ $text_about->text3 }}</span>
                <h3 class="alt-font text-dark-gray ls-minus-2px w-90 sm-w-100 mb-0"> {{ $text_about->text4 }}</h3>
            </div>
            <div class="col-xl-5 col-md-6 offset-xl-1 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h6 class="alt-font text-dark-gray mb-10px"> {{ $text_about->text5 }}</h6>
                <p class="w-90 lg-w-100">{{ $text_about->text6 }}</p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="cover-background position-relative overflow-visible" style="background-image: url('{{ asset($image_about->img2) }}')">
    <div class="container">
        <div class="row align-items-center overlap-section mb-1">
            <div class="col-12 position-relative" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-20">
                    <div class="swiper swiper-width-auto pb-4 magic-cursor" data-slider-options='{ "slidesPerView": "auto", "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- end content carousal item -->
                            @foreach ($galerie as $item)
                                <div class="swiper-slide">
                                    <img src="{{ asset($item->img) }}" class="border-radius-6px md-h-350px sm-h-250px" alt="" style="max-width: auto; height: 350px !important;" />
                                </div>
                            @endforeach
                            <!-- end content carousal item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div> -->
                <!-- end slider pagination -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h5 class="alt-font text-dark-gray mb-4 xs-mb-30px w-90 xl-w-100 mx-auto">{{ $text_about->text7 }}</h5>
                <div class="row row-cols-1 row-cols-sm-3">
                    <div class="col xs-mb-30px">
                        <h2 class="fs-65 text-dark-gray mb-0 fw-700">{{ $text_about->text8 }}</h2>
                        <span class="fs-19 fw-500 text-dark-gray">{{ $text_about->text9 }}</span>
                    </div>
                    <div class="col xs-mb-30px">
                        <h2 class="fs-65 text-dark-gray mb-0 fw-700">{{ $text_about->text10 }}</h2>
                        <span class="fs-19 fw-500 text-dark-gray">{{ $text_about->text11 }}</span>
                    </div>
                    <div class="col">
                        <h2 class="fs-65 text-dark-gray mb-0 fw-700">{{ $text_about->text12 }}</h2>
                        <span class="fs-19 fw-500 text-dark-gray">{{ $text_about->text13 }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center background-repeat" style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container">
        <div class="row justify-content-center mb-6 xs-mb-9">
            <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">{{ $text_about->text14 }}</h2>
                <span class="d-inline-block">{{ $text_about->text15 }}</span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 xs-mb-8">
            <!-- start fancy text box item -->
            <div class="col" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                <div class="services-box-style-01 hover-box md-mb-30px">
                    <div class="position-relative box-image border-radius-6px">
                        <img class="w-100" src="{{ asset($image_about->img3) }}" alt="">
                    </div>
                    <div class="p-30px last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-22 alt-font ls-minus-05px text-dark-gray">{{ $text_about->text16 }}</span>
                        <p>{{ $text_about->text17 }}</p>
                    </div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                <div class="services-box-style-01 hover-box md-mb-30px">
                    <div class="position-relative box-image border-radius-6px">
                        <img class="w-100" src="{{ asset($image_about->img4) }}" alt="">
                    </div>
                    <div class="p-30px last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-22 alt-font ls-minus-05px text-dark-gray">{{ $text_about->text18 }}</span>
                        <p>{{ $text_about->text19 }}</p>
                    </div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                <div class="services-box-style-01 hover-box">
                    <div class="position-relative box-image border-radius-6px">
                        <img class="w-100" src="{{ asset($image_about->img5) }}" alt="">
                    </div>
                    <div class="p-30px last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-22 alt-font ls-minus-05px text-dark-gray">{{ $text_about->text20 }}</span>
                        <p>{{ $text_about->text21 }}</p>
                    </div>
                </div>
            </div>
            <!-- end fancy text box item -->
        </div>
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 text-center justify-content-center clients-style-05 mb-4 sm-mb-7" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach ($reference as $ref)
            <!-- start client item -->
            <div class="col sm-mb-30px">
                <div class="client-box">
                    <a href="#"><img src="{{ asset($ref->img) }}" class="h-55px" alt="" /></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="half-section background-position-center background-repeat pt-0" style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container">
        <div class="row position-relative z-index-1 m-0">
            <div class="col-12 position-relative overflow-hidden border-radius-6px h-700px lg-h-550px md-h-400px d-flex align-items-center justify-content-center">
                <video muted class="video-bg html-video border-radius-6px video-play-icon" poster="{{ asset('images/video-poster.jpg') }}">
                    <source type="video/mp4" src="{{ asset('video/video2.mp4') }}" />
                    <source type="video/webm" src="{{ asset('video/video2.webm') }}" />
                </video>
                <a href="javascript:void(0);" class="html-video-play video-icon-box video-icon-extra-large position-relative">
                    <span>
                        <span class="video-icon bg-white">
                            <i class="play-icon feather icon-feather-play text-dark-gray ms-0" aria-hidden="true"></i>
                            <i class="pause-icon feather icon-feather-pause text-dark-gray ms-0" aria-hidden="true"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-12 text-center position-absolute left-0px bottom-minus-100px md-bottom-minus-80px z-index-9">
                <img src="{{ asset('images/demo-hotel-and-resort-about-us-09.png') }}" alt="" data-bottom-top="transform: translate3d(100px, 0px, 0px);" data-top-bottom="transform: translate3d(-100px, 0px, 0px);" />
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center background-repeat overlap-height position-relative" style="background-image: url('{{ asset('images/vertical-center-line-bg.svg') }}')">
    <div class="container">
        <div class="row justify-content-center mb-5 xs-mb-7">
            <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Exclusive ratings</h2>
                <span class="d-inline-block">Enjoy in resorts and awesome ratings.</span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 position-relative justify-content-center mb-4" data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start review item -->
            <div class="col review-style-05 md-mb-30px">
                <div class="border-radius-6px bg-white box-shadow-quadruple-large border border-color-extra-medium-gray last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-30px pb-30px lg-p-25px">
                        <img class="rounded-circle w-120px xs-w-80px me-25px" src="{{ asset('images/review1.png') }}" alt="" />
                        <p>We are happy to offer our guests truly fabulous experience of relaxing, balanced, and memorable vacation.</p>
                    </div>
                    <div class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px lg-ps-25px lg-pe-25px text-center text-sm-start">
                        <span class="alt-font fw-500 text-dark-gray d-inline-block xs-fs-17">Herman Miller, ThemeZaa</span>
                        <div class="review-star-icon float-sm-end float-none fs-19">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end review item -->
            <!-- start review item -->
            <div class="col review-style-05">
                <div class="border-radius-6px bg-white box-shadow-quadruple-large border border-color-extra-medium-gray last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-30px pb-30px lg-p-25px">
                        <img class="rounded-circle w-120px xs-w-80px me-25px" src="{{ asset('images/review2.png') }}" alt="" />
                        <p>What a great experience! I have visited one of the resorts with my friends and we had a great time! Highly recommended.</p>
                    </div>
                    <div class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px lg-ps-25px lg-pe-25px text-center text-sm-start">
                        <span class="alt-font fw-500 text-dark-gray d-inline-block xs-fs-17">Matthew Taylor, ThemeZaa</span>
                        <div class="review-star-icon float-sm-end float-none fs-19">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end review item -->
        </div>
        <div class="row mb-3">
            <div class="col-12 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="text-dark-gray fw-500 mb-0 d-inline-block align-middle fs-24">Check all <strong>3,583</strong> exclusive visitor reviews on<a href="#" class="d-inline-block align-middle ms-10px"><img src="{{ asset('images/demo-hotel-and-resort-client-01.svg') }}" class="h-60px" alt=""></a></div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection
