@extends('layouts.master')
@section('content')
    <section
        class="page-title-separate-breadcrumbs cover-background border-top border-4 border-color-base-color top-space-margin  round-cursor"
        style="background-image: url({{ asset($image_category2->img1) }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row align-items-start align-items-lg-end justify-content-end flex-column flex-lg-row extra-small-screen"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="col-xxl-7 col-lg-6 col-md-10 position-relative page-title-large md-mb-15px xs-mb-5px">
                    <h1 class="text-white alt-font fw-500 ls-minus-2px mb-0">

                        {{ $text_contact->text1 }}

                    </h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                    <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">

                         {{ $text_contact->text2 }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

        <!-- end page title -->
        <!-- start section -->
        <section class="background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col last-paragraph-no-margin sm-mb-30px">
                        <span class="d-block text-dark-gray fs-19 fw-600 border-bottom border-2 border-color-dark-gray pb-10px mb-15px w-80 sm-w-100"> {{ $text_contact->text3 }}</span>
                        <p class="w-100">{{ $fournisseurs -> adresse }}</p>
                    </div>
                    <div class="col sm-mb-30px">
                        <span class="d-block text-dark-gray fs-19 fw-600 border-bottom border-2 border-color-dark-gray pb-10px mb-15px w-80 sm-w-100"> {{ $text_contact->text4 }}</span>
                        @if ($fournisseurs -> mail)
                            <div><a href="mailto:{{ $fournisseurs -> mail }}">{{ $fournisseurs -> mail }}</a></div>
                        @endif
                        @if ($fournisseurs -> mail2)
                            <div><a href="mailto:{{ $fournisseurs -> mail2 }}">{{ $fournisseurs -> mail2 }}</a></div>
                        @endif
                    </div>
                    <div class="col">
                        <span class="d-block text-dark-gray fs-19 fw-600 border-bottom border-2 border-color-dark-gray pb-10px mb-15px w-80 sm-w-100">{{ $text_contact->text5 }}</span>
                        @if ($fournisseurs -> tel1)
                            <span class="d-block"><a href="tel:{{ $fournisseurs -> tel1 }}">{{ $fournisseurs -> tel1 }}</a></span>
                        @endif
                        @if ($fournisseurs -> tel2)
                            <span class="d-block"><a href="tel:{{ $fournisseurs -> tel2 }}">{{ $fournisseurs -> tel2 }}</a></span>
                        @endif
                        @if ($fournisseurs -> gsm)
                            <span class="d-block"><a href="tel:{{ $fournisseurs -> gsm }}">{{ $fournisseurs -> gsm }}</a></span>
                        @endif


                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



        <!-- start section -->
        <section class="background-position-center background-repeat position-relative p-0" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="position-absolute top-0px right-0px w-50 h-100 bg-very-light-gray d-none d-lg-inline-block"></div>
            <div class="container position-relative">
                <div class="row g-0">
                    <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="d-block text-base-color fw-500 mb-5px">{{ $text_contact->text6 }}</span>
                        <h4 class="alt-font text-dark-gray ls-minus-2px mb-25px">{{ $text_contact->text7 }}</h4>


                        <form action="{{ route('contact.submit') }}" method="post" class="contact-form-style-03">
                            @csrf
                            @if (session('session'))
                                <div class="alert alert-success">
                                    {{ session('session') }}
                                </div>
                            @endif

                            <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">full name</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Email</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Phone</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                <input class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="tel" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" />
                                @error('phone')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="exampleInputEmail1" class="form-label fs-14 text-uppercase text-dark-gray fw-600 mb-0">Message</label>
                            <div class="position-relative form-group form-textarea mb-0">
                                <textarea class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="message" placeholder="Describe about your booking" rows="3">{{ old('message') }}</textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                @error('message')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mt-25px align-items-center">
                                <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">
                                    <p class="mb-0 fs-14 lh-22 text-center text-sm-start">all fields are required</p>
                                </div>
                                <div class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">
                                    <button class="btn btn-dark-gray btn-small btn-round-edge btn-box-shadow text-uppercase" name="submit" value="submit" type="submit">send message</button>
                                </div>
                                <div class="col-12 form-results d-none mt-20px mb-0"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 offset-lg-1 position-relative overflow-hidden bg-very-light-gray" style="min-height: 400px;" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <img src="{{ asset('img_sv/galerie/page-1740591486-67bf517e50710-contact_us.jpeg') }}" alt="Travelers trusting us" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-center background-repeat" style="background-image: url('images/vertical-center-line-bg.svg')">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-auto text-center text-md-end sm-mb-20px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h5 class="alt-font text-dark-gray fw-500 mb-0">{{ $text_contact->text12 }} </h5>
                    </div>
                    <div class="col-2 d-none d-lg-inline-block" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                    </div>
                    <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <ul class="large-icon dark">
                            <li class="m-0"><a class="facebook" href="{{ $fournisseurs->face }}" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li class="m-0"><a class="youtube" href="{{ $fournisseurs->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i><span></span></a></li>
                            <li class="m-0"><a class="twitter" href="{{ $fournisseurs->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                            <li class="m-0"><a class="instagram" href="{{ $fournisseurs->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


         @if($map)
            {!! $map !!}
        @endif

@endsection
