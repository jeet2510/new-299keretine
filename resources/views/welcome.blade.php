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
                        @include('website.Hero')
                    </div>

                    <div _ngcontent-mro-c11="" class="dv_why_package">
                        @include('website.why_package')
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
                                <source _ngcontent-mro-c11="" src="{{ $data[4]->video_details->{1}->url }}"
                                    type="video/mp4"> Your browser does not support the video tag.
                            </video><video _ngcontent-mro-c11="" preload="" autoplay="" muted=""
                                loop="" playsinline="" poster="" controlslist="nofullscreen"
                                class="display-block-sm" style="width: 100%; height: auto;">
                                <source _ngcontent-mro-c11="" src="{{ $data[4]->video_details->{2}->url }}"
                                    type="video/mp4"> Your browser does not support the video tag.
                            </video></div>
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_why_package pt-5">
                        @include('website.know_best')
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_thousand_review">
                        @include('website.review')
                    </div>
                    <div _ngcontent-mro-c11="" class="dv_staff_mirrors bg-light">
                        @include('website.employee')
                    </div>
                    <div _ngcontent-mro-c11="" id="location" class="dv_branch_499">
                        @include('website.branch')
                    </div>
                </div>
                <div _ngcontent-mro-c11="" id="faq" class="dv_frequrently_asked">
                    @include('website.ask_que')
                </div>
            </div>
            @include('website.footer_section')
</body>

</html>
