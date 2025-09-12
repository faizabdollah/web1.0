<!doctype html>
<html class="no-js" lang="en">

<head>
    @yield('meta')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('demos/hotel-and-resort/hotel-and-resort.css') }}" />

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <nav class="navbar navbar-expand-lg header-light bg-white center-logo header-reverse">
            <div class="container-fluid">
                <div class="col-auto col-xl-2 col-lg-1 menu-logo">
                    <div class="d-none d-xl-block">
                        <div class="widget-text fw-600"><i
                                class="bi bi-telephone-outbound text-base-color me-10px"></i><a href="tel:1800222000">1
                                800 222 000</a></div>
                    </div>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset($site_logo) }}" data-at2x="{{ asset($site_logo) }}" alt="" class="default-logo">
                        <img src="{{ asset($site_logo) }}" data-at2x="{{ asset($site_logo) }}" alt="" class="alt-logo">
                        <img src="{{ asset($site_logo) }}" data-at2x="{{ asset($site_logo) }}" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto col-xl-8 col-lg-10 menu-order">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav navbar-left justify-content-end">


                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About us</a>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="/produit" class="nav-link">Categories</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="/produit/{{ $category->categorie }}" class="dropdown-item"><span>{{ $category->nom_categorie }}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-right justify-content-start">
                            <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>

                            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-xl-2 col-lg-1 text-end">
                    <div class="d-none d-xl-flex align-items-center widget-text fw-600"><i class="bi bi-calendar-check text-base-color me-10px"></i><a href="/contact">Book your stay</a></div>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')


    <footer
        class="bg-very-light-gray pb-50px sm-pt-20px xs-pb-30px background-repeat background-position-center sm-background-image-none"
        style="background-image: url('images/vertical-center-line-bg-dark.svg')">
        <div class="container">
            <div class="row overlap-section">
                <div class="col-12 text-center">
                    <img class="rounded-circle" src="{{ asset($site_logo) }}" alt="" />
                </div>
            </div>
            <!-- start subscribe item -->
            <div class="row justify-content-center mb-4">
                <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                    <h3 class="text-dark-gray alt-font ls-minus-2px fw-400 mb-40px xs-mb-30px w-80 xs-w-100 mx-auto">
                        Get the amazing offers into your inbox!</h3>
                    <div class="d-inline-block w-100 newsletter-style-03 position-relative mb-20px">
                        <form action="email-templates/subscribe-newsletter.php" method="post"
                            class="position-relative w-100">
                            <input
                                class="input-large bg-white border-color-transparent w-100 border-radius-100px box-shadow-extra-large form-control required"
                                type="email" name="email" placeholder="Enter your email address" />
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-large text-dark-gray ls-0px left-icon submit text-uppercase fw-700"
                                aria-label="submit"><i
                                    class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Subscribe</span></button>
                            <div
                                class="form-results border-radius-100px pt-10px pb-10px ps-15px pe-15px fs-16 mt-10px w-100 text-center position-absolute d-none">
                            </div>
                        </form>
                    </div>
                    <p class="fs-16">We are committed to protecting your <a href="#"
                            class="text-decoration-line-bottom text-dark-gray">privacy policy.</a></p>
                </div>
            </div>
            <!-- end subscribe item -->
            <!-- start instagram -->

            <!-- end instagram -->
            <div class="row align-items-center">
                <div
                    class="col-xl-3 col-sm-6 text-center text-sm-start last-paragraph-no-margin fs-15 order-3 order-md-1">
                    <p>&COPY; Copyright 2024 <a href="index.html" target="_blank"
                            class="text-decoration-line-bottom text-dark-gray fw-500">Crafto</a></p>
                </div>
                <div class="col-xl-6 text-center lg-mt-10px sm-mt-0 sm-mb-10px order-1 order-xl-2 order-md-3">
                    <ul class="footer-navbar fs-17 fw-600">
                        <li class="nav-item active"><a href="/" class="nav-link">Home</a> </li>
                        <li class="nav-item"><a href="/about" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="/produit" class="nav-link">category</a> </li>
                        <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
                        @foreach ($categories as $category)
                        <li class="nav-item"><a href="/produit/{{ $category->categorie }}" class="nav-link">{{ $category->nom_categorie }}</a></li>
                        @endforeach
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div
                    class="col-xl-3 col-sm-6 position-relative text-center text-sm-end elements-social social-text-style-01 order-2 order-xl-3 xs-mb-10px">
                    <ul class="fs-16 dark fw-600">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank">Fb.</a> </li>
                        <li><a class="dribbble" href="http://www.dribbble.com" target="_blank">Dr.</a></li>
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank">Tw.</a></li>
                        <li><a class="behance" href="http://www.behance.com/" target="_blank">Be.</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <!-- Swiper JS -->


    <!-- end javascript libraries -->
</body>

</html>
