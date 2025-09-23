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
@endsection
