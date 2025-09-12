@extends('layouts.master')
@section('meta')
    <meta name="description" content="{{ $details->description_p }}">
    <meta name="keywords" content="{{ $details->categorie }}, {{ $details->nom }}, {{ $details->metatitre }}, {{ $details->metadescription }} , {{ $details->keyword }} ">
@endsection

@section('content')
<style>
input[type="date"] {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    background: #f9fafb;
    color: #333;
    font-size: 16px;
    transition: border-color 0.2s, box-shadow 0.2s;
    outline: none;
    box-shadow: none;
}

input[type="date"]:focus {
    border-color: #8ecae6;
    background: #fff;
    box-shadow: 0 0 0 2px #8ecae633;
}


/* Style the calendar icon (works in WebKit browsers) */
input[type="date"]::-webkit-calendar-picker-indicator {
    filter: invert(0.5) sepia(1) saturate(5) hue-rotate(175deg);
    cursor: pointer;
    opacity: 0.8;
    transition: opacity 0.2s;
}
input[type="date"]:hover::-webkit-calendar-picker-indicator {
    opacity: 1;
}
</style>
    <section class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin magic-cursor round-cursor" style="background-image: url({{ asset($details->img) }})">
            <div class="opacity-full bg-gradient-dark-transparent"></div>
            <div class="container position-relative">
                <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-10px xs-mb-5px">
                        <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">{{ $details->nom }}</h1>
                    </div>
                    <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                        <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">{{ $details->description_p }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="bg-very-light-gray pt-40px pb-40px">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-5 row-cols-sm-3 justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col border-end sm-border-end-0 border-color-transparent-base-color icon-with-text-style-03 sm-mb-40px">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="line-icon-King-2 icon-large text-base-color mb-10px"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-dark-gray fw-500 md-lh-24 d-block">Executive chef</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col border-end sm-border-end-0 border-color-transparent-base-color icon-with-text-style-03 sm-mb-40px">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="line-icon-Car-Wheel icon-large text-base-color mb-10px"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-dark-gray fw-500 md-lh-24 d-block">Leading security</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col border-end sm-border-end-0 border-color-transparent-base-color icon-with-text-style-03 sm-mb-40px">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="line-icon-Juice icon-large text-base-color mb-10px"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-dark-gray fw-500 md-lh-24 d-block">Welcome drink​</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col border-end sm-border-end-0 border-color-transparent-base-color icon-with-text-style-03 xs-mb-40px">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="line-icon-Swimming icon-large text-base-color mb-10px"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-dark-gray fw-500 md-lh-24 d-block">Swimming pool</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-03">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="line-icon-Car-3 icon-large text-base-color mb-10px"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-dark-gray fw-500 md-lh-24 d-block">Transport facility</span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-center background-repeat position-relative pb-0 overflow-hidden" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row align-items-center mb-50px" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                        <h3 class="text-dark-gray alt-font ls-minus-1px mb-0">{{ $details->nom }}</h3>
                        <p class="ls-05px">{{ $details->categorie }}</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 xs-mb-30px">
                        <div class="d-flex align-items-center">
                            <div class="col-auto text-center"><h2 class="text-dark-gray mb-0 fw-700">4.8</h2></div>
                            <div class="col ps-20px">
                                <div class="review-star-icon lh-20 fs-18">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <span class="d-block text-dark-gray fw-500">Review by Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="col text-start text-sm-end">
                        <h3 class="text-dark-gray fw-700 d-inline-block align-middle mb-5px mt-5px"><span class="fs-20 fw-500 align-middle"></span> {{ $details->prix ? $details->prix.' MAD' : '' }}</h3>
                        <a href="/contact" class="btn btn-large btn-switch-text btn-base-color btn-box-shadow btn-round-edge ms-25px xs-ms-15px">
                            <span>
                                <span class="btn-double-text" data-text="reserver">reserver</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="h-2px bg-dark-gray mb-50px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'></div>
                <div class=" row-cols-12 row-cols-lg-12 align-items-center mb-8 xs-mb-14">
                    <div class="col last-paragraph-no-margin" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="text-dark-gray fs-26 alt-font d-block mb-10px">Room overview</span>
                        <p class="w-90 md-w-100 md-mb-30px">{!! $details->description !!}</p>
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-12" data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="outside-box-right-40 sm-outside-box-right-0">
                            <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-three-slide-next", "prevEl": ".slider-three-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start content carousal item -->
                                    @foreach ($produit_image as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($image->img) }}"
                                                 alt=""
                                                 style="width:680px; height:465px; object-fit:contain; border-radius:6px;" />
                                        </div>
                                    @endforeach
                                    <div class="swiper-slide">
                                            <img src="{{ asset($details->img) }}"
                                             alt=""
                                             style="width:680px; height:465px; object-fit:contain; border-radius:6px;" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item -->
                                    <div class="swiper-slide">
                                        <img src="https://placehold.co/680x465" class="w-100 border-radius-6px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item -->
                                    <div class="swiper-slide">
                                        <img src="https://placehold.co/680x465" class="w-100 border-radius-6px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item -->
                                    <div class="swiper-slide">
                                        <img src="https://placehold.co/680x465" class="w-100 border-radius-6px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                     <!-- start content carousal item -->
                                    <div class="swiper-slide">
                                        <img src="https://placehold.co/680x465" class="w-100 border-radius-6px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                    <!-- start content carousal item -->
                                    <div class="swiper-slide">
                                        <img src="https://placehold.co/680x465" class="w-100 border-radius-6px" alt="" />
                                    </div>
                                    <!-- end content carousal item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-center background-repeat z-index-1 position-relative" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row overlap-section mb-50px">
                    <div class="col-12 text-center">
                        <img src="images/demo-hotel-and-resort-room-details-01.png" alt="" />
                    </div>
                </div>
                <div class="row justify-content-center mb-5 xs-mb-7">
                    <div class="col-md-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font mb-5px text-dark-gray ls-minus-2px">Exclusive ratings</h2>
                        <span class="d-inline-block">Enjoy in resorts and awesome facilities</span>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 position-relative justify-content-center mb-5" data-anime='{ "el": "childs", "perspective": [800, 1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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
                <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 text-center justify-content-center clients-style-05 mb-5 sm-mb-7" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <!-- start client item -->
                    <div class="col sm-mb-30px">
                        <div class="client-box">
                            <a href="#"><img src="images/demo-hotel-and-resort-client-01.svg" class="h-55px" alt="" /></a>
                        </div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col sm-mb-30px">
                        <div class="client-box">
                            <a href="#"><img src="images/demo-hotel-and-resort-client-02.svg" class="h-55px" alt="" /></a>
                        </div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col xs-mb-30px">
                        <div class="client-box">
                            <a href="#"><img src="images/demo-hotel-and-resort-client-03.svg" class="h-55px" alt="" /></a>
                        </div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col">
                        <div class="client-box">
                            <a href="#"><img src="images/demo-hotel-and-resort-client-04.svg" class="h-55px" alt="" /></a>
                        </div>
                    </div>
                    <!-- end client item -->
                </div>
            </div>
        </section>
        <!-- Reservation Form Start -->
        <section class="pt-40px pb-40px bg-white">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-6">
                        <h3 class="mb-4 text-center">Reservation Form</h3>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            @if (session('session'))
                                <div class="alert alert-success">
                                    {{ session('session') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Reservation Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="produit_id" value="{{ $details->id }}">
                            <button type="submit" class="btn btn-base-color w-100">Reserve Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservation Form End -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=date]", {
        dateFormat: "Y-m-d"
    });
</script>
@endsection



