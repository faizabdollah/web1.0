@extends('layouts.master')
@section('content')
        <!-- end header -->
        <!-- start banner slider -->
<style>
        .swiper {
            width: 100%;
            height: 100vh;
            /* Full screen */
        }

        .swiper-slide {
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .swiper-slide .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .swiper-slide .content {
            position: relative;
            z-index: 2;
        }

        .swiper-slide h5 {
            font-weight: 400;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .swiper-slide h2 {
            font-size: 64px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .swiper-slide .btn {
            background: #fff;
            color: #000;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
        }

        /* Custom Arrows */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background 0.3s;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(255, 255, 255, 0.8);
            color: #000;
        }

        /* Remove default Swiper arrow icons */
        .swiper-button-next::after,
        .swiper-button-prev::after {
            content: '';
        }

        /* Add custom text */
        .swiper-button-next::before {
            content: '>';
        }

        .swiper-button-prev::before {
            content: '<';
        }
    </style>

<!-- Swiper Slider -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <!-- Slide -->
        @foreach ($sliders as $slider)
            <div class="swiper-slide" style="background-image: url('{{ $slider->img }}');">
                <div class="overlay"></div>
                <div class="content" data-swiper-parallax="-200">
                    <h5>{{ $slider->nom2 }}</h5>
                    <h2>{{ $slider->nom }}</h2>
                    <a href="{{ $slider->lien_desti }}" class="btn">{{ $slider->Button }}</a>
                </div>
            </div>
        @endforeach
        <!-- end slide -->
    </div>
    <!-- Navigation Buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div>



        <!-- end banner slider -->
        <!-- start section -->
        <section class="bg-very-light-gray half-section ps-6 pe-6">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 border-end border-1 sm-border-end-0 border-color-transparent-base-color md-mb-50px">
                        <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                            <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                                <i class="line-icon-Medal-2 icon-extra-large text-base-color"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-dark-gray fs-22 ls-0px">Five stars luxury resort</span>
                                <p>Experience a unique stay.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 border-end border-1 md-border-end-0 border-color-transparent-base-color md-mb-50px">
                        <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                            <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                                <i class="line-icon-Moustache-Smiley icon-extra-large text-base-color"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-dark-gray fs-22 ls-0px">Well trained manpower</span>
                                <p>Dedicated meal courses.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10 border-end border-1 sm-border-end-0 border-color-transparent-base-color sm-mb-50px">
                        <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                            <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                                <i class="line-icon-French-Fries icon-extra-large text-base-color"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-dark-gray fs-22 ls-0px">Fine dining restaurants</span>
                                <p>Discover a medley of flavours.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-10">
                        <div class="feature-box ps-8 pe-8 xl-ps-5 xl-pe-5">
                            <div class="feature-box-icon feature-box-icon-rounded w-120px h-120px rounded-circle mb-20px">
                                <i class="line-icon-Life-Safer icon-extra-large text-base-color"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-dark-gray fs-22 ls-0px">Large swimming pool</span>
                                <p>Unwind and discover joy.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start about section -->
        <section class="background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row align-items-center mb-12 md-mb-17 xs-mb-25">
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                        <span class="mb-10px text-base-color fw-500 d-block">about </span>
                        <h2 class="alt-font text-dark-gray ls-minus-2px">{{ $fournisseurs->raison_sociale }}</h2>
                        <p class="w-80 xl-w-100 mb-35px xs-mb-10px">{!! $fournisseurs->description_p !!}</p>
                        <div class="d-inline-block w-100">
                            <a href="/about" class="btn btn-extra-large btn-switch-text btn-dark-gray btn-box-shadow btn-round-edge d-inline-block align-middle me-30px xs-me-10px xs-mt-20px">
                                <span>
                                    <span class="btn-double-text" data-text="About {{ $fournisseurs->raison_sociale }}">About {{ $fournisseurs->raison_sociale }}</span>
                                </span>
                            </a>
                            <div class="fs-20 fw-600 d-inline-block align-middle text-dark-gray xs-mt-20px"><a href="tel:{{ str_replace(' ', '', $fournisseurs->gsm) }}"><i class="bi bi-telephone-outbound text-medium-gray icon-small me-10px"></i>{{ $fournisseurs->gsm }}</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative offset-lg-1">
                        <span class="fs-90 position-absolute left-60px md-left-100px sm-left-70px xs-left-10px top-90px xs-top-50px text-dark-gray fw-700 z-index-1" data-bottom-top="transform: translateY(50px) scale(1,1)" data-top-bottom="transform: translateY(-50px) scale(1,1)" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 1500, "staggervalue": 300, "easing": "easeOutQuad" }'><span class="fs-15 fw-600 d-table lh-16 text-uppercase text-medium-gray">Started in</span>1995</span>
                        <div class="w-75 overflow-hidden position-relative xs-w-80 border-radius-4px float-end" data-anime='{ "effect": "slide", "color": "#A0875B", "direction":"rl", "easing": "easeOutQuad", "duration": 600, "delay":400}'>
                            <img class="w-100" src="{{ $images->about1 }}" alt="" >
                        </div>
                        <div class="position-absolute left-minus-70px md-left-15px bottom-minus-50px w-55 overflow-hidden" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                            <img class="w-100 border-radius-4px" src="{{ $images->about2 }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-very-light-gray overlap-height position-relative background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg-dark.svg')">
            <div class="container overlap-gap-section">
                <div class="row justify-content-center mb-5 xs-mb-7">
                    <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Categories</h2>
                        <span class="d-inline-block">categories description</span>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    @foreach ($categorie_fournisseur_sv as $categorie)
                        <div class="col text-center rotate-box-style-01 lg-mb-45px" data-bottom-top="transform: translateY(80px)" data-top-bottom="transform: translateY(-80px)">
                        <div class="rm-rotate-box text-center">
                            <div class="flipper to-left">
                                <div class="thumb-wrap">
                                    <div class="front overflow-hidden h-250px md-h-250px border-radius-4px overflow-hidden" style="background-image:url('{{ $categorie->img }}')">
                                    </div>
                                    <div class="back border-radius-4px overflow-hidden">
                                        <div class="box-overlay bg-base-color"></div>
                                        <div class="content-wrap p-40px xs-p-30px last-paragraph-no-margin">
                                            <p class="text-white opacity-7 lh-30 sm-w-70 xs-w-100 mx-auto">{{ $categorie->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="fs-20 d-inline-block mt-30px fw-600 text-dark-gray">{{ $categorie->nom_categorie }}</span>
                            </div>
                        </div>
                    </div>
                        <!-- end rotate box item -->
                    @endforeach

                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row justify-content-center mb-5 xs-mb-7">
                    <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Exclusive offers</h2>
                        <span class="d-inline-block">Enjoy in resorts and awesome facilities.</span>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-9" data-anime='{ "el": "childs", "translateY": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    @foreach ($categorie_fournisseur_sv as $categorie)
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-07 md-mb-30px xs-mb-15px">
                        <figure class="mb-0 border-radius-6px overflow-hidden box-shadow-quadruple-large-hover box-shadow-quadruple-large">
                            <img src="{{ $categorie->img }}" alt="" />
                            <div class="overlay-bg bg-dark-gray opacity-extra-medium"></div>
                            <figcaption>
                                <div class="hover-content align-items-center d-flex flex-column justify-content-center h-100 p-50px text-center">
                                    <div class="w-65 lg-w-90 mt-auto mb-auto">
                                        <span class="fs-14 fw-500 ls-2px text-white text-uppercase">{{ $categorie->nom_categorie }}</span>
                                        <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-very-light pt-15px mt-10px"></div>
                                        <h6 class="alt-font text-white mb-0">{{ $categorie->description }}</h6>
                                    </div>
                                    <div class="hover-show-content text-center">
                                        <a href="/categorie?c={{ $categorie->categorie }}" class="bg-base-color w-55px h-55px rounded-circle position-relative mx-auto d-block">
                                            <i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center text-white"></i>
                                        </a>
                                    </div>
                                    <div class="hover-hide-content">
                                        <span class="fs-13 lh-34 text-dark-gray text-uppercase bg-white ps-20px pe-20px d-inline-block border-radius-4px fw-700">Get 40% off</span>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                    <!-- end interactive banner item -->
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-07 md-mb-30px xs-mb-15px">
                        <figure class="mb-0 border-radius-6px overflow-hidden box-shadow-quadruple-large-hover box-shadow-quadruple-large">
                            <img src="https://placehold.co/600x700" alt="" />
                            <div class="overlay-bg bg-dark-gray opacity-extra-medium"></div>
                            <figcaption>
                                <div class="hover-content align-items-center d-flex flex-column justify-content-center h-100 p-60px text-center">
                                    <div class="w-65 lg-w-90 mt-auto mb-auto">
                                        <span class="fs-14 fw-500 ls-2px text-white text-uppercase">Unbundled</span>
                                        <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-very-light pt-15px mt-10px"></div>
                                        <h6 class="alt-font text-white mb-0">Cocktail<br>package</h6>
                                    </div>
                                    <div class="hover-show-content text-center">
                                        <a href="demo-hotel-and-resort-amenities.html" class="bg-base-color w-55px h-55px rounded-circle position-relative mx-auto d-block">
                                            <i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center text-white"></i>
                                        </a>
                                    </div>
                                    <div class="hover-hide-content">
                                        <span class="fs-13 lh-34 text-dark-gray text-uppercase bg-white ps-20px pe-20px d-inline-block border-radius-4px fw-700">Get 30% off</span>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banner item -->

                    <!-- end interactive banner item -->
                </div>
                <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 text-center justify-content-center clients-style-05 mb-4 sm-mb-7" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    @foreach ($reference as $reference)
                    <!-- start client item -->
                    <div class="col sm-mb-30px">
                        <div class="client-box">
                            <a href="#"><img src="{{ $reference->img }}" class="h-55px" alt="" /></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="d-inline-block align-middle bg-dark-gray fw-600 text-white text-uppercase border-radius-4px ps-15px pe-15px fs-12 me-10px md-m-5px">Awesome</div>
                        <div class="d-inline-block align-middle text-dark-gray fs-20 fw-500"><span class="text-decoration-line-bottom fw-600">Get 20% discount</span> on hotels booking with above websites.</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 overflow-hidden">
            <div class="container-fluid p-0">
                <div class="row g-0 bg-very-light-gray">
                    <div class="col-xl-3 col-lg-4 col-md-5 tab-style-07 d-flex align-items-start align-items-xl-center">
                        <ul class="nav nav-tabs justify-content-center border-0 text-left fs-24 alt-font">
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab_seven1" class="nav-link active">
                                    <span><span class="primary-font me-10px fs-18 fw-600">01</span>Premium cottage</span>
                                    <span class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-base-color text-white"><i class="bi bi-arrow-right icon-extra-medium"></i></span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven2">
                                    <span><span class="primary-font me-10px fs-18 fw-600">02</span>Studios with terrace</span>
                                    <span class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-base-color text-white"><i class="bi bi-arrow-right icon-extra-medium"></i></span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven3">
                                    <span><span class="primary-font me-10px fs-18 fw-600">03</span>Premium pavilions</span>
                                    <span class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-base-color text-white"><i class="bi bi-arrow-right icon-extra-medium"></i></span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven4">
                                    <span><span class="primary-font me-10px fs-18 fw-600">04</span>The luxury villa</span>
                                    <span class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-base-color text-white"><i class="bi bi-arrow-right icon-extra-medium"></i></span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven5">
                                    <span><span class="primary-font me-10px fs-18 fw-600">05</span>Grand deluxe room</span>
                                    <span class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-base-color text-white"><i class="bi bi-arrow-right icon-extra-medium"></i></span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="tab-content h-100">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show h-100" id="tab_seven1">
                                <div class="row g-0 h-100 lg-h-auto">
                                    <div class="col-xl-6">
                                        <div class="h-100 lg-h-400px cover-background position-relative" style="background-image: url(https://placehold.co/752x577)">
                                            <div class="position-absolute right-0px bottom-0 d-flex">
                                                <div class="ps-40px pe-40px h-110px bg-white d-flex align-items-center">
                                                    <div class="fs-30 fw-700 text-dark-gray"><span class="fs-16 fw-500 d-table lh-22 text-medium-gray">Starting from</span>$50.00</div>
                                                </div>
                                                <div class="ps-40px pe-40px xs-ps-30px xs-pe-30px h-110px bg-dark-gray d-flex align-items-center">
                                                    <a href="demo-hotel-and-resort-contact.html" class="d-flex align-items-center text-white">
                                                        <span class="fs-18 fw-600 lh-22 text-uppercase me-15px">Book<br>now</span><span class="w-55px h-55px bg-white-transparent-extra-light border-radius-100 text-white position-relative"><i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center lh-0px"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                        <div class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                            <span class="text-base-color fw-500">Phenomenal view</span>
                                            <h3 class="text-dark-gray mb-15px alt-font">Premium cottage</h3>
                                            <p>Discover a private home in the orchard three bedrooms and baths with a private plunge pool and service and a three sided view from the king size bed.</p>
                                            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-3 justify-content-center mt-25px md-mt-15px g-0 w-100">
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-French-Fries icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Breakfast included</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Bathrobe icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Laundry facilities</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-25px lg-pe-25px overflow-hidden">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Car icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Pickup and drop</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in h-100" id="tab_seven2">
                                <div class="row g-0 h-100 lg-h-auto">
                                    <div class="col-xl-6">
                                        <div class="h-100 lg-h-400px cover-background position-relative" style="background-image: url(https://placehold.co/752x577)">
                                            <div class="position-absolute right-0px bottom-0 d-flex">
                                                <div class="ps-40px pe-40px h-110px bg-white d-flex align-items-center">
                                                    <div class="fs-30 fw-700 text-dark-gray"><span class="fs-16 fw-500 d-table lh-22 text-medium-gray">Starting from</span>$50.00</div>
                                                </div>
                                                <div class="ps-40px pe-40px xs-ps-30px xs-pe-30px h-110px bg-dark-gray d-flex align-items-center">
                                                    <a href="demo-hotel-and-resort-contact.html" class="d-flex align-items-center text-white">
                                                        <span class="fs-18 fw-600 lh-22 text-uppercase me-15px">Book<br>now</span><span class="w-55px h-55px bg-white-transparent-extra-light border-radius-100 text-white position-relative"><i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center lh-0px"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                        <div class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                            <span class="text-base-color fw-500">Garden view</span>
                                            <h3 class="text-dark-gray mb-15px alt-font">Studios with terrace</h3>
                                            <p>Discover a private home in the orchard three bedrooms and baths with a private plunge pool and service and a three sided view from the king size bed.</p>
                                            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-3 justify-content-center mt-25px md-mt-15px g-0 w-100">
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Bathrobe icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Laundry facilities</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-French-Fries icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Breakfast included</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-25px lg-pe-25px overflow-hidden">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Car icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Pickup and drop</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in h-100" id="tab_seven3">
                                <div class="row g-0 h-100 lg-h-auto">
                                    <div class="col-xl-6">
                                        <div class="h-100 lg-h-400px cover-background position-relative" style="background-image: url(https://placehold.co/752x577)">
                                            <div class="position-absolute right-0px bottom-0 d-flex">
                                                <div class="ps-40px pe-40px h-110px bg-white d-flex align-items-center">
                                                    <div class="fs-30 fw-700 text-dark-gray"><span class="fs-16 fw-500 d-table lh-22 text-medium-gray">Starting from</span>$50.00</div>
                                                </div>
                                                <div class="ps-40px pe-40px xs-ps-30px xs-pe-30px h-110px bg-dark-gray d-flex align-items-center">
                                                    <a href="demo-hotel-and-resort-contact.html" class="d-flex align-items-center text-white">
                                                        <span class="fs-18 fw-600 lh-22 text-uppercase me-15px">Book<br>now</span><span class="w-55px h-55px bg-white-transparent-extra-light border-radius-100 text-white position-relative"><i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center lh-0px"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                        <div class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                            <span class="text-base-color fw-500">Phenomenal view</span>
                                            <h3 class="text-dark-gray mb-15px alt-font">Premium pavilions</h3>
                                            <p>Discover a private home in the orchard three bedrooms and baths with a private plunge pool and service and a three sided view from the king size bed.</p>
                                            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-3 justify-content-center mt-25px md-mt-15px g-0 w-100">
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-French-Fries icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Breakfast included</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Bathrobe icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Laundry facilities</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-25px lg-pe-25px overflow-hidden">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Car icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Pickup and drop</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in h-100" id="tab_seven4">
                                <div class="row g-0 h-100 lg-h-auto">
                                    <div class="col-xl-6">
                                        <div class="h-100 lg-h-400px cover-background position-relative" style="background-image: url(https://placehold.co/752x577)">
                                            <div class="position-absolute right-0px bottom-0 d-flex">
                                                <div class="ps-40px pe-40px h-110px bg-white d-flex align-items-center">
                                                    <div class="fs-30 fw-700 text-dark-gray"><span class="fs-16 fw-500 d-table lh-22 text-medium-gray">Starting from</span>$50.00</div>
                                                </div>
                                                <div class="ps-40px pe-40px xs-ps-30px xs-pe-30px h-110px bg-dark-gray d-flex align-items-center">
                                                    <a href="demo-hotel-and-resort-contact.html" class="d-flex align-items-center text-white">
                                                        <span class="fs-18 fw-600 lh-22 text-uppercase me-15px">Book<br>now</span><span class="w-55px h-55px bg-white-transparent-extra-light border-radius-100 text-white position-relative"><i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center lh-0px"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                        <div class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                            <span class="text-base-color fw-500">Garden view</span>
                                            <h3 class="text-dark-gray mb-15px alt-font">The luxury villa</h3>
                                            <p>Discover a private home in the orchard three bedrooms and baths with a private plunge pool and service and a three sided view from the king size bed.</p>
                                            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-3 justify-content-center mt-25px md-mt-15px g-0 w-100">
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Bathrobe icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Laundry facilities</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-French-Fries icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Breakfast included</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-25px lg-pe-25px overflow-hidden">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Car icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Pickup and drop</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in h-100" id="tab_seven5">
                                <div class="row g-0 h-100 lg-h-auto">
                                    <div class="col-xl-6">
                                        <div class="h-100 lg-h-400px cover-background position-relative" style="background-image: url(https://placehold.co/752x577)">
                                            <div class="position-absolute right-0px bottom-0 d-flex">
                                                <div class="ps-40px pe-40px h-110px bg-white d-flex align-items-center">
                                                    <div class="fs-30 fw-700 text-dark-gray"><span class="fs-16 fw-500 d-table lh-22 text-medium-gray">Starting from</span>$50.00</div>
                                                </div>
                                                <div class="ps-40px pe-40px xs-ps-30px xs-pe-30px h-110px bg-dark-gray d-flex align-items-center">
                                                    <a href="demo-hotel-and-resort-contact.html" class="d-flex align-items-center text-white">
                                                        <span class="fs-18 fw-600 lh-22 text-uppercase me-15px">Book<br>now</span><span class="w-55px h-55px bg-white-transparent-extra-light border-radius-100 text-white position-relative"><i class="bi bi-arrow-right-short icon-extra-medium absolute-middle-center lh-0px"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                        <div class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                            <span class="text-base-color fw-500">Mountain view</span>
                                            <h3 class="text-dark-gray mb-15px alt-font">Grand deluxe room</h3>
                                            <p>Discover a private home in the orchard three bedrooms and baths with a private plunge pool and service and a three sided view from the king size bed.</p>
                                            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-3 justify-content-center mt-25px md-mt-15px g-0 w-100">
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-French-Fries icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Breakfast included</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px xs-mb-30px overflow-hidden border-end xs-border-end-0 border-color-transparent-base-color">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Bathrobe icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Laundry facilities</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                                <!-- start features box item -->
                                                <div class="col icon-with-text-style-03">
                                                    <div class="feature-box ps-25px pe-25px xl-ps-15px xl-pe-15px lg-ps-25px lg-pe-25px overflow-hidden">
                                                        <div class="feature-box-icon">
                                                            <i class="line-icon-Car icon-large text-base-color mb-15px"></i>
                                                        </div>
                                                        <div class="feature-box-content last-paragraph-no-margin">
                                                            <span class="d-inline-block text-dark-gray fw-600 fs-14 text-uppercase lh-20">Pickup and drop</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end features box item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-center background-repeat overlap-height position-relative" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row justify-content-center mb-5 xs-mb-7">
                    <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Exclusive ratings</h2>
                        <span class="d-inline-block">Enjoy in resorts and awesome ratings.</span>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 position-relative justify-content-center mb-4 sm-mb-30px" data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start review item -->
                    <div class="col review-style-05 md-mb-30px">
                        <div class="border-radius-6px bg-white box-shadow-quadruple-large border border-color-extra-medium-gray last-paragraph-no-margin">
                            <div class="d-flex align-items-center ps-45px pe-45px pt-30px pb-30px lg-p-25px">
                                <img class="rounded-circle w-120px xs-w-80px me-25px" src="https://placehold.co/200x200" alt="" />
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
                                <img class="rounded-circle w-120px xs-w-80px me-25px" src="https://placehold.co/200x200" alt="" />
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
                <div class="row mb-3 sm-mb-0">
                    <div class="col-12 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="text-dark-gray fw-500 mb-0 d-inline-block align-middle fs-24">Check all <strong>3,583</strong> exclusive visitor reviews on<a href="#" class="d-inline-block align-middle ms-10px"><img src="images/demo-hotel-and-resort-client-01.svg" class="h-60px" alt=""></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->

        <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            effect: 'slide',
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

@endsection
