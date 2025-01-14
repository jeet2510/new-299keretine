<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.head')
</head>

<body>
    <app-root _nghost-mro-c12="" ng-version="14.3.0">
        <router-outlet _ngcontent-mro-c12="">
        </router-outlet><app-home _nghost-mro-c11="">
            <div _ngcontent-mro-c11="" class="dv_wrapper">
                <header _ngcontent-mro-c11="">
                    <nav _ngcontent-mro-c11="" class="navbar navbar-expand-sm bg-dark navbar-dark pt-2 pb-2 fixed-top"
                        style="background: #000000 !important;">
                        <div _ngcontent-mro-c11="" class="container">
                            <a _ngcontent-mro-c11="" href="#" class="navbar-brand">
                                <img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/logo.svg"
                                    class="dv_logo"></a><svg _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                id="dv_mobile_button" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-menu-deep">
                                <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path _ngcontent-mro-c11="" d="M4 6h16"></path>
                                <path _ngcontent-mro-c11="" d="M7 12h13"></path>
                                <path _ngcontent-mro-c11="" d="M10 18h10"></path>
                            </svg>
                            <div _ngcontent-mro-c11="" class="justify-content-end dv_navbar_mobile">
                                <ul _ngcontent-mro-c11="" class="navbar-nav">
                                    <li _ngcontent-mro-c11="" class="nav-item mr-3"><a _ngcontent-mro-c11=""
                                            href="#hairpackage" class="nav-link text-white dv_mobile_menu_a">Keratin
                                            Packages</a></li>
                                    <li _ngcontent-mro-c11="" class="nav-item mr-3"><a _ngcontent-mro-c11=""
                                            href="#location" class="nav-link text-white dv_mobile_menu_a">Location</a>
                                    </li>
                                    <li _ngcontent-mro-c11="" class="nav-item mr-3"><a _ngcontent-mro-c11=""
                                            href="#faq" class="nav-link text-white dv_mobile_menu_a">FAQ's</a></li>
                                    <li _ngcontent-mro-c11="" class="nav-item mr-3"><a _ngcontent-mro-c11=""
                                            href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                            target="_blank" class="nav-link text-white dv_mobile_menu_a">Book
                                            Appointment</a></li>
                                </ul><svg _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-x">
                                    <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z" fill="none">
                                    </path>
                                    <path _ngcontent-mro-c11="" d="M18 6l-12 12"></path>
                                    <path _ngcontent-mro-c11="" d="M6 6l12 12"></path>
                                </svg>
                            </div>
                        </div>
                    </nav>
                </header>
                <div _ngcontent-mro-c11="" class="dv_content">
                    <div _ngcontent-mro-c11="" class="dv_slider">
                        @include('website.Hero', ['get_data_section_1' => $get_data_section_1])
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_why_package">
                        @include('website.why_package', ['get_data_section_2' => $get_data_section_2])
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_price_table pt-0">
                        @include('website.price_table')
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_we_accept">
                        @include('website.we_accept')
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_video_black">
                        <div _ngcontent-mro-c11="" class="container"><video _ngcontent-mro-c11="" preload=""
                                autoplay="" muted="" loop="" playsinline="" poster=""
                                controlslist="nofullscreen" class="display-none-sm"
                                style="width: 100%; height: auto;">
                                <source _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/desktop-video.mp4"
                                    type="video/mp4"> Your browser does not support the video tag.
                            </video><video _ngcontent-mro-c11="" preload="" autoplay="" muted=""
                                loop="" playsinline="" poster="" controlslist="nofullscreen"
                                class="display-block-sm" style="width: 100%; height: auto;">
                                <source _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/mobile-video.mp4"
                                    type="video/mp4"> Your browser does not support the video tag.
                            </video></div>
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_why_package pt-5">
                        <div _ngcontent-mro-c11="" class="container">
                            <div _ngcontent-mro-c11="" class="row">
                                <div _ngcontent-mro-c11="" class="col-md-6">
                                    <div _ngcontent-mro-c11="" class="dv_mirrors_know_heading"> mirrors <span
                                            _ngcontent-mro-c11="">knows best! </span></div>
                                    <ul _ngcontent-mro-c11="" class="dv_mirrors_know_ul">
                                        <li _ngcontent-mro-c11=""><span _ngcontent-mro-c11="">1</span>
                                            <h3 _ngcontent-mro-c11="">Innovation </h3> Staying ahead of the curve, we
                                            continuously seek out new techniques and technologies to enhance our
                                            offerings and stay at the forefront of our industry.
                                        </li>
                                        <li _ngcontent-mro-c11=""><span _ngcontent-mro-c11="">2</span>
                                            <h3 _ngcontent-mro-c11="">Trustworthiness </h3> Clients rely on us as their
                                            go-to experts, knowing they can depend on our expertise, reliability, and
                                            integrity for all their needs.
                                        </li>
                                        <li _ngcontent-mro-c11=""><span _ngcontent-mro-c11="">3</span>
                                            <h3 _ngcontent-mro-c11="">Customer Satisfaction </h3> Our track record of
                                            happy clients speaks volumes about our commitment to excellence and
                                            exceeding expectations.
                                        </li>
                                    </ul><a _ngcontent-mro-c11=""
                                        href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                        target="_blank" class="dv_why_book_now mt-0"> BOOK PACKAGE <span
                                            _ngcontent-mro-c11="">299 AED</span></a>
                                    <div _ngcontent-mro-c11="" class="dv_dmof_txt">don't miss the offer </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-2 display-none-sm"></div>
                                <div _ngcontent-mro-c11="" class="col-md-4 display-none-sm"><img
                                        _ngcontent-mro-c11=""
                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/mirror-knwbest-img.jpg"
                                        class="w-100"></div>
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_thousand_review">
                        <div _ngcontent-mro-c11="" class="container">
                            <h4 _ngcontent-mro-c11="" class="dv_thousand_review_head">Thousands of Smiles can't be
                                wrong </h4>
                            <div _ngcontent-mro-c11="" class="row pt-5 pb-5 display-none-sm">
                                <div _ngcontent-mro-c11="" class="col-md-4"><img _ngcontent-mro-c11=""
                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/insta-desktop.jpg"
                                        class="w-80 d-block ml-auto mr-auto"></div>
                                <div _ngcontent-mro-c11="" class="col-md-4"><img _ngcontent-mro-c11=""
                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/google-desktop.jpg"
                                        class="w-80 d-block ml-auto mr-auto"></div>
                                <div _ngcontent-mro-c11="" class="col-md-4"><img _ngcontent-mro-c11=""
                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/facebook-desktop.jpg"
                                        class="w-80 d-block ml-auto mr-auto"></div>
                            </div>
                            <div _ngcontent-mro-c11="" class="row display-block-sm">
                                <div _ngcontent-mro-c11="" class="pb-5 swiper reviewmobileslider">
                                    <swiper _ngcontent-mro-c11=""
                                        class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                        <!----><!----><!---->
                                        <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                                            <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/insta-desktop.jpg"
                                                        class="w-80 d-block ml-auto mr-auto"></div>
                                                <!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/google-desktop.jpg"
                                                        class="w-80 d-block ml-auto mr-auto"></div>
                                                <!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/facebook-desktop.jpg"
                                                        class="w-80 d-block ml-auto mr-auto"></div>
                                                <!----><!----><!---->
                                            </div><!----><!----><!----><!---->
                                        </div><!---->
                                    </swiper>
                                    <div _ngcontent-mro-c11="" class="swiper-button-prev reviewmobileslider-p"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
                                    </div>
                                    <div _ngcontent-mro-c11="" class="swiper-button-next reviewmobileslider-n"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_staff_mirrors bg-light">
                        <div _ngcontent-mro-c11="" class="container">
                            <div _ngcontent-mro-c11="" class="row display-none-sm">
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-01.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Zalikha </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-02.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Passang </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-03.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Elian </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-04.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Cristina </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-05.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Manisha </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-6 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-06.png"
                                            class="w-100">
                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">May </h4>
                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair Specilist </p>
                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg></a></li>
                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                        _ngcontent-mro-c11="" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                        <path _ngcontent-mro-c11="" stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                        </path>
                                                        <path _ngcontent-mro-c11=""
                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                        <path _ngcontent-mro-c11="" d="M16.5 7.5l0 .01"></path>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-mro-c11="" class="display-block-sm">
                                <div _ngcontent-mro-c11="" class="swiper staffmobileslider">
                                    <swiper _ngcontent-mro-c11=""
                                        class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                        <!----><!----><!---->
                                        <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                                            <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-01.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Zalikha
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-02.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Passang
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-03.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Elian
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="3" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-04.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Cristina
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="4" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-05.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">Manisha
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="5" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11="" class="w-80 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/team-06.png"
                                                            class="w-100">
                                                        <h4 _ngcontent-mro-c11="" class="d-block text-center">May
                                                        </h4>
                                                        <p _ngcontent-mro-c11="" class="d-block text-center">Hair
                                                            Specilist </p>
                                                        <ul _ngcontent-mro-c11="" class="dv_staff_social">
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.facebook.com/mirrorbeautylounge"
                                                                    target="_blank"><svg _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-facebook">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                                        </path>
                                                                    </svg></a></li>
                                                            <li _ngcontent-mro-c11=""><a _ngcontent-mro-c11=""
                                                                    href="https://www.instagram.com/mirrorsbeautylounge"><svg
                                                                        _ngcontent-mro-c11=""
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="icon icon-tabler icon-tabler-brand-instagram">
                                                                        <path _ngcontent-mro-c11="" stroke="none"
                                                                            d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                                        </path>
                                                                        <path _ngcontent-mro-c11=""
                                                                            d="M16.5 7.5l0 .01"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div><!----><!----><!----><!---->
                                        </div><!---->
                                    </swiper>
                                    <div _ngcontent-mro-c11="" class="swiper-button-prev staffmobileslider-p"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
                                    </div>
                                    <div _ngcontent-mro-c11="" class="swiper-button-next staffmobileslider-n"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-mro-c11="" id="location" class="dv_branch_499">
                        <div _ngcontent-mro-c11="" class="container">
                            <div _ngcontent-mro-c11="" class="row display-none-sm">
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                                        <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20"><img
                                                _ngcontent-mro-c11=""
                                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/1.jpg"
                                                class="w-100 mb-4"
                                                style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                            <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                                                <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al Muraqabat </h4>
                                                <p _ngcontent-mro-c11="" class="dv_branch_address">M03 - Buhaleeba
                                                    Plaza &nbsp;Muraqabat Road - Dubai. </p><a _ngcontent-mro-c11=""
                                                    href="tel:97142691449" target="_blank"
                                                    class="dv_branch_number">+971 4 269 1449</a><a
                                                    _ngcontent-mro-c11="" href="tel:971565373911" target="_blank"
                                                    class="dv_branch_number">+971 56 537 3911</a><a
                                                    _ngcontent-mro-c11="" href="https://wa.me/971565373911"
                                                    target="_blank" class="dv_branch_whatsapp"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a><a
                                                    _ngcontent-mro-c11=""
                                                    href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                    target="_blank" class="dv_branch_book">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                                        <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20"><img
                                                _ngcontent-mro-c11=""
                                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/4.jpg"
                                                class="w-100 mb-4"
                                                style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                            <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                                                <h4 _ngcontent-mro-c11="" class="dv_branch_name">IBN Battuta </h4>
                                                <p _ngcontent-mro-c11="" class="dv_branch_address">Ibn battuta Mall,
                                                    Metro link area - Sheikh Zayed Rd - Dubai </p><a
                                                    _ngcontent-mro-c11="" href="tel:97145766288" target="_blank"
                                                    class="dv_branch_number">+971 4 576 6288</a><a
                                                    _ngcontent-mro-c11="" href="tel:971543210758" target="_blank"
                                                    class="dv_branch_number">+971 54 321 0758</a><a
                                                    _ngcontent-mro-c11="" href="https://wa.me/971543210758"
                                                    target="_blank" class="dv_branch_whatsapp"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a><a
                                                    _ngcontent-mro-c11=""
                                                    href="https://www.mirrorsbeautylounge.com/view-cart?location=4&amp;services=3131|399"
                                                    target="_blank" class="dv_branch_book">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                                        <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20"><img
                                                _ngcontent-mro-c11=""
                                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/6.jpg"
                                                class="w-100 mb-4"
                                                style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                            <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                                                <h4 _ngcontent-mro-c11="" class="dv_branch_name">Tecom </h4>
                                                <p _ngcontent-mro-c11="" class="dv_branch_address">API Building,Al
                                                    Barsha Heights,Tecom-dubai </p><a _ngcontent-mro-c11=""
                                                    href="tel:97145686219" target="_blank"
                                                    class="dv_branch_number">+971 4 568 6219</a><a
                                                    _ngcontent-mro-c11="" href="tel:971502247058" target="_blank"
                                                    class="dv_branch_number">+971 50 224 7058</a><a
                                                    _ngcontent-mro-c11="" href="https://wa.me/971502247058"
                                                    target="_blank" class="dv_branch_whatsapp"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a><a
                                                    _ngcontent-mro-c11=""
                                                    href="https://www.mirrorsbeautylounge.com/view-cart?location=6&amp;services=3131|399"
                                                    target="_blank" class="dv_branch_book">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                                        <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20"><img
                                                _ngcontent-mro-c11=""
                                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/8.JPG"
                                                class="w-100 mb-4"
                                                style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                            <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                                                <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al Bustan </h4>
                                                <p _ngcontent-mro-c11="" class="dv_branch_address">Al Bustan
                                                    center,Al Qusais First-dubai. </p><a _ngcontent-mro-c11=""
                                                    href="tel:97143797872" target="_blank"
                                                    class="dv_branch_number">+971 4 379 7872</a><a
                                                    _ngcontent-mro-c11="" href="tel:971505458263" target="_blank"
                                                    class="dv_branch_number">+971 50 545 8263</a><a
                                                    _ngcontent-mro-c11="" href="https://wa.me/971505458263"
                                                    target="_blank" class="dv_branch_whatsapp"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a><a
                                                    _ngcontent-mro-c11=""
                                                    href="https://www.mirrorsbeautylounge.com/view-cart?location=8&amp;services=3131|399"
                                                    target="_blank" class="dv_branch_book">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div _ngcontent-mro-c11="" class="col-md-4 col-sm-12 col-xs-12 col-12 mb-4">
                                    <div _ngcontent-mro-c11="" class="d-block w-80 ml-auto mr-auto pb-5">
                                        <div _ngcontent-mro-c11="" class="p-1 pb-3 border-radius-20"><img
                                                _ngcontent-mro-c11=""
                                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/9.jpg"
                                                class="w-100 mb-4"
                                                style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                            <div _ngcontent-mro-c11="" class="pl-3 pr-3">
                                                <h4 _ngcontent-mro-c11="" class="dv_branch_name">Marina </h4>
                                                <p _ngcontent-mro-c11="" class="dv_branch_address">Jannah Hotel
                                                    Apratment,Marina,Dubai. </p><a _ngcontent-mro-c11=""
                                                    href="tel:97144107691" target="_blank"
                                                    class="dv_branch_number">+971 4 410 7691</a><a
                                                    _ngcontent-mro-c11="" href="tel:971563005629" target="_blank"
                                                    class="dv_branch_number">+971 56 300 5629</a><a
                                                    _ngcontent-mro-c11="" href="https://wa.me/971563005629"
                                                    target="_blank" class="dv_branch_whatsapp"><img
                                                        _ngcontent-mro-c11=""
                                                        src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"></a><a
                                                    _ngcontent-mro-c11=""
                                                    href="https://www.mirrorsbeautylounge.com/view-cart?location=9&amp;services=3131|399"
                                                    target="_blank" class="dv_branch_book">book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-mro-c11="" class="display-block-sm">
                                <div _ngcontent-mro-c11="" class="swiper branchmobileslider">
                                    <swiper _ngcontent-mro-c11=""
                                        class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                        <!----><!----><!---->
                                        <div class="swiper-wrapper" style="transition-duration: 0ms;"><!----><!---->
                                            <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11=""
                                                        class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/1.jpg"
                                                            class="w-100 mb-4"
                                                            style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                                        <div _ngcontent-mro-c11="" class="p-0">
                                                            <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al
                                                                Muraqabat </h4>
                                                            <p _ngcontent-mro-c11="" class="dv_branch_address">M03 -
                                                                Buhaleeba Plaza &nbsp;Muraqabat Road - Dubai. </p><a
                                                                _ngcontent-mro-c11="" href="tel:97142691449"
                                                                target="_blank" class="dv_branch_number">+971 4 269
                                                                1449</a><a _ngcontent-mro-c11=""
                                                                href="tel:971565373911" target="_blank"
                                                                class="dv_branch_number">+971 56 537 3911</a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://wa.me/971565373911" target="_blank"
                                                                class="dv_branch_whatsapp"><img
                                                                    _ngcontent-mro-c11=""
                                                                    src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                                                    class="d-block ml-auto mr-auto"></a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                                target="_blank" class="dv_branch_book">book now</a>
                                                        </div>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11=""
                                                        class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/4.jpg"
                                                            class="w-100 mb-4"
                                                            style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                                        <div _ngcontent-mro-c11="" class="p-0">
                                                            <h4 _ngcontent-mro-c11="" class="dv_branch_name">IBN
                                                                Battuta </h4>
                                                            <p _ngcontent-mro-c11="" class="dv_branch_address">Ibn
                                                                battuta Mall, Metro link area - Sheikh Zayed Rd - Dubai
                                                            </p><a _ngcontent-mro-c11="" href="tel:97145766288"
                                                                target="_blank" class="dv_branch_number">+971 4 576
                                                                6288</a><a _ngcontent-mro-c11=""
                                                                href="tel:971543210758" target="_blank"
                                                                class="dv_branch_number">+971 54 321 0758</a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://wa.me/971543210758" target="_blank"
                                                                class="dv_branch_whatsapp"><img
                                                                    _ngcontent-mro-c11=""
                                                                    src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                                                    class="d-block ml-auto mr-auto"></a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                                target="_blank" class="dv_branch_book">book now</a>
                                                        </div>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11=""
                                                        class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/6.jpg"
                                                            class="w-100 mb-4"
                                                            style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                                        <div _ngcontent-mro-c11="" class="p-0">
                                                            <h4 _ngcontent-mro-c11="" class="dv_branch_name">Tecom
                                                            </h4>
                                                            <p _ngcontent-mro-c11="" class="dv_branch_address">API
                                                                Building,Al Barsha Heights,Tecom-dubai </p><a
                                                                _ngcontent-mro-c11="" href="tel:97145686219"
                                                                target="_blank" class="dv_branch_number">+971 4 568
                                                                6219</a><a _ngcontent-mro-c11=""
                                                                href="tel:971502247058" target="_blank"
                                                                class="dv_branch_number">+971 50 224 7058</a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://wa.me/971502247058" target="_blank"
                                                                class="dv_branch_whatsapp"><img
                                                                    _ngcontent-mro-c11=""
                                                                    src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                                                    class="d-block ml-auto mr-auto"></a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                                target="_blank" class="dv_branch_book">book now</a>
                                                        </div>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="3" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11=""
                                                        class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/8.JPG"
                                                            class="w-100 mb-4"
                                                            style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                                        <div _ngcontent-mro-c11="" class="p-0">
                                                            <h4 _ngcontent-mro-c11="" class="dv_branch_name">Al
                                                                Bustan </h4>
                                                            <p _ngcontent-mro-c11="" class="dv_branch_address">Al
                                                                Bustan center,Al Qusais First-dubai. </p><a
                                                                _ngcontent-mro-c11="" href="tel:97143797872"
                                                                target="_blank" class="dv_branch_number">+971 4 379
                                                                7872</a><a _ngcontent-mro-c11=""
                                                                href="tel:971505458263" target="_blank"
                                                                class="dv_branch_number">+971 50 545 8263</a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://wa.me/971505458263" target="_blank"
                                                                class="dv_branch_whatsapp"><img
                                                                    _ngcontent-mro-c11=""
                                                                    src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                                                    class="d-block ml-auto mr-auto"></a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                                target="_blank" class="dv_branch_book">book now</a>
                                                        </div>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div>
                                            <div data-swiper-slide-index="4" class="dv_per_staff_col swiper-slide">
                                                <!---->
                                                <div _ngcontent-mro-c11="" class="swiper-slide">
                                                    <div _ngcontent-mro-c11=""
                                                        class="w-80 pb-3 border-radius-20 ml-auto mr-auto"><img
                                                            _ngcontent-mro-c11=""
                                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/9.jpg"
                                                            class="w-100 mb-4"
                                                            style="border-radius: 33px; box-shadow: 1px 1px 16px 2px #00000020 !important;">
                                                        <div _ngcontent-mro-c11="" class="p-0">
                                                            <h4 _ngcontent-mro-c11="" class="dv_branch_name">Marina
                                                            </h4>
                                                            <p _ngcontent-mro-c11="" class="dv_branch_address">
                                                                Jannah Hotel Apratment,Marina,Dubai. </p><a
                                                                _ngcontent-mro-c11="" href="tel:97144107691"
                                                                target="_blank" class="dv_branch_number">+971 4 410
                                                                7691</a><a _ngcontent-mro-c11=""
                                                                href="tel:971563005629" target="_blank"
                                                                class="dv_branch_number">+971 56 300 5629</a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://wa.me/971563005629" target="_blank"
                                                                class="dv_branch_whatsapp"><img
                                                                    _ngcontent-mro-c11=""
                                                                    src="https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/whatsapp.png"
                                                                    class="d-block ml-auto mr-auto"></a><a
                                                                _ngcontent-mro-c11=""
                                                                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                                                                target="_blank" class="dv_branch_book">book now</a>
                                                        </div>
                                                    </div>
                                                </div><!----><!----><!---->
                                            </div><!----><!----><!----><!---->
                                        </div><!---->
                                    </swiper>
                                    <div _ngcontent-mro-c11="" class="swiper-button-prev branchmobileslider-p"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
                                    </div>
                                    <div _ngcontent-mro-c11="" class="swiper-button-next branchmobileslider-n"><img
                                            _ngcontent-mro-c11=""
                                            src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-mro-c11="" id="faq" class="dv_frequrently_asked">
                    <div _ngcontent-mro-c11="" class="container">
                        <h4 _ngcontent-mro-c11="" class="dv_fre_ask_heading">frequently asked questions </h4>
                        <div _ngcontent-mro-c11="" class="row">
                            <div _ngcontent-mro-c11="" class="col-md-12">
                                <div _ngcontent-mro-c11="" id="accordion" role="tablist"
                                    aria-multiselectable="true" class="panel-group">
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingOne"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne" class="collapsed dv_accodion"> 1.
                                                    What makes this price stand out as a great deal? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseOne" role="tabpanel"
                                            aria-labelledby="headingOne" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">This
                                                price appeals to customers because it aligns with their budget using the
                                                premium products/services without compromising on quality. It reflects
                                                the brand's commitment to providing accessible luxury.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingTwo"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo" class="collapsed dv_accodion"> 2.
                                                    How long will the results last? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseTwo" role="tabpanel"
                                            aria-labelledby="headingTwo" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">The
                                                duration of the effects varies from individual lifestyle. With regular
                                                maintenance and adherence to aftercare instructions, the effects can
                                                last more.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingThree"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree" class="collapsed dv_accodion"> 3.
                                                    How do I maintain my hair after a keratin treatment? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseThree" role="tabpanel"
                                            aria-labelledby="headingThree" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">The main
                                                important thing that can be used is to appropriate the aftercare product
                                                line that your salon or stylist suggests you need to wash your hair
                                                around 3 times per week if possible and follow the advice of your
                                                beautician for other hair treatments that you can do or not or how long
                                                will the waiting period is.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingFour"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour" class="collapsed dv_accodion"> 4.
                                                    Will swimming be compromise my keratin hair treatment? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseFour" role="tabpanel"
                                            aria-labelledby="headingFour" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">Swimming
                                                is fine but to protect the hair from chlorine and salt in the water, you
                                                should discuss with your stylist &amp; use some product to apply before
                                                swimming to protect the hair. Otherwise, the life of your treatment may
                                                be compromised if you swim regularly without any hair protection.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingFive"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive" class="collapsed dv_accodion"> 5.
                                                    Is the keratin hair treatment permanent? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseFive" role="tabpanel"
                                            aria-labelledby="headingFive" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">No, it is
                                                not permanent. But creates a protein layer overlay on the cuticle which
                                                protects the hair for an extended time, so the condition is improved.
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingSix"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseSix" aria-expanded="false"
                                                    aria-controls="collapseSix" class="collapsed dv_accodion"> 6.
                                                    Can I purchase the Keratin hair package as a gift for someone else?
                                                </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseSix" role="tabpanel"
                                            aria-labelledby="headingSix" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">Yes, you
                                                can! Our Keratin Hair Treatment Packages are popular choices for special
                                                occasions like birthdays, anniversaries, or holidays. Simply let us know
                                                that you're purchasing it as a gift, and we'll take care of the rest,
                                                ensuring the recipient feels pampered and appreciated.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingFive"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive" class="collapsed dv_accodion"> 7.
                                                    Can I schedule a consultation to discuss before booking the Keratin
                                                    Treatment package? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseFive" role="tabpanel"
                                            aria-labelledby="headingFive" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">Yes,
                                                absolutely! Your satisfaction is our priority. Our knowledgeable team
                                                will take the time to understand your needs, provide expert advice, and
                                                customize the package to suit your unique requirements.</div>
                                        </div>
                                    </div>
                                    <div _ngcontent-mro-c11="" class="panel panel-default">
                                        <div _ngcontent-mro-c11="" role="tab" id="headingFive"
                                            class="panel-heading">
                                            <h4 _ngcontent-mro-c11="" class="panel-title"><a _ngcontent-mro-c11=""
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive" class="collapsed dv_accodion"> 8.
                                                    Is payment required prior to my appointment? </a></h4>
                                        </div>
                                        <div _ngcontent-mro-c11="" id="collapseFive" role="tabpanel"
                                            aria-labelledby="headingFive" class="panel-collapse collapse">
                                            <div _ngcontent-mro-c11="" class="panel-body dv_accodion_body">No, You
                                                can make payment after the service.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('website.footer_section')
</body>

</html>
