<div _ngcontent-mro-c11="" class="container">
    <h3 _ngcontent-mro-c11="" class="dv_hair_packages_heading">{{ $get_data_section_3->handing }} </h3>
    <div _ngcontent-mro-c11="" class="pb-5 swiper pricetable">
        <swiper _ngcontent-mro-c11=""
            class="swiper-wrapper swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <!----><!----><!---->
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                <!----><!---->
                @php
                        $imagePaths = json_decode($get_data_section_3->image, true) ?? [];
                    @endphp

                    @foreach ($imagePaths as $imagePath)

                <div data-swiper-slide-index="0" class="dv_per_staff_col swiper-slide swiper-slide-active"
                    style="width: 345.333px; margin-right: 52px;"><!---->
                    <div _ngcontent-mro-c11="" class="swiper-slide"><a _ngcontent-mro-c11=""
                            href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                            target="_blank" class="position-relative d-block">
                            <div _ngcontent-mro-c11="" class="display-none-sm"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $imagePath }}"
                                    class="w-100"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-red.png"
                                    class="dv_price_table_animated_img"></div>
                            <div _ngcontent-mro-c11="" class="display-block-sm"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-1.png"
                                    class="w-100"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-white.png"
                                    class="dv_price_table_animated_img"></div>
                        </a></div><!----><!----><!---->
                </div>

                <div data-swiper-slide-index="1" class="dv_per_staff_col swiper-slide swiper-slide-next"
                    style="width: 345.333px; margin-right: 52px;"><!---->
                    <div _ngcontent-mro-c11="" class="swiper-slide"><a _ngcontent-mro-c11=""
                            href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                            target="_blank" class="position-relative d-block">
                            <div _ngcontent-mro-c11="" class="display-none-sm"><img _ngcontent-mro-c11=""
                                    src="{{ $link_project->site_value . $imagePath }}"
                                    class="w-100"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-white.png"
                                    class="dv_price_table_animated_img"></div>
                            <div _ngcontent-mro-c11="" class="display-block-sm"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-2.png"
                                    class="w-100"><img _ngcontent-mro-c11=""
                                    src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-red.png"
                                    class="dv_price_table_animated_img"></div>
                        </a></div>
                </div>
                <div data-swiper-slide-index="2" class="dv_per_staff_col swiper-slide"
                    style="width: 345.333px; margin-right: 52px;"><!---->
                    <div _ngcontent-mro-c11="" class="swiper-slide"><a _ngcontent-mro-c11=""
                            href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                            target="_blank" class="position-relative d-block"><img _ngcontent-mro-c11=""
                               src="{{ $link_project->site_value . $imagePath }}"
                                class="w-100"><img _ngcontent-mro-c11=""
                                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/399-red.png"
                                class="dv_price_table_animated_img"></a></div>
                    <!----><!----><!---->
                </div><!----><!----><!----><!---->
                @endforeach

            </div><!---->
        </swiper>
        <div _ngcontent-mro-c11=""
            class="swiper-button-prev pricetable-p ml-0 swiper-button-disabled swiper-button-lock">
            <img _ngcontent-mro-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/left-icon.png">
        </div>
        <div _ngcontent-mro-c11=""
            class="swiper-button-next pricetable-n mr-0 swiper-button-disabled swiper-button-lock">
            <img _ngcontent-mro-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/right-icon.png">
        </div>
    </div>
</div>
