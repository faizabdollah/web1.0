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

                        {{-- $text_category->text1 --}}
                        Gallery
                    </h1>
                </div>
                <div class="col-xxl-5 col-lg-6 col-md-10 last-paragraph-no-margin">
                    <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100">

                        {{-- $text_category->text2 --}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
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
    <!-- start section -->


    <section id="down-section">
    <div class="container">
        <!-- Titre -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Titre de la Galerie</h2>
                <p class="text-muted">Vous pouvez ajouter une petite description ici.</p>
            </div>
        </div>

        <div class="row mb-6">
            <div class="col px-0 sm-ps-15px sm-pe-15px">
                <ul class="image-gallery-style-01 gallery-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    @foreach ($galerie as $item)
                        <li class="grid-item transition-inner-all">
                            <div class="gallery-box overflow-hidden">
                                <a href="<?php echo $item->img; ?>" data-group="lightbox-gallery">
                                    <div class="position-relative gallery-image bg-white overflow-hidden">
                                        <img src="<?php echo $item->img; ?>" />
                                        <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-bottom-top">
                                            <div class="d-flex align-items-center justify-content-center w-50px h-50px rounded-circle bg-dark-gray">
                                                <i class="feather icon-feather-search text-white icon-small"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
