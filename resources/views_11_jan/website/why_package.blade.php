<div _ngcontent-mro-c11="" class="container">
    <div _ngcontent-mro-c11="" class="row">
        <div _ngcontent-mro-c11="" class="col-md-5 p-0 pl-sm-4 display-none-sm"><img _ngcontent-mro-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/why-package.png" class="w-100">
        </div>
        <div _ngcontent-mro-c11="" class="col-md-1 p-0 display-none-sm"></div>
        <div _ngcontent-mro-c11="" class="col-md-6">
            <div _ngcontent-mro-c11="" class="dv_why_package_heading"> {{ $get_data_section_2->title }}<span
                    _ngcontent-mro-c11="">
                    {{ $get_data_section_2->handing }}</span></div>
            <p _ngcontent-mro-c11="" class="dv_why_package_heading_p">{{ $get_data_section_2->meta_text }}</p>
            @php
            $pointWiseDetails = json_decode($get_data_section_2->point_wise_details, true); // Decode JSON to an associative array
        @endphp

        <ul _ngcontent-mro-c11="" class="dv_why_pack_ul">
            @foreach ($pointWiseDetails as $key => $value)
                <li _ngcontent-mro-c11="">
                    <span _ngcontent-mro-c11="">{{ $loop->index + 1 }}</span> {{ $value }}
                </li>
            @endforeach
        </ul>

            <a _ngcontent-mro-c11=""
                href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399" target="_blank"
                class="dv_why_book_now"> BOOK PACKAGE <span _ngcontent-mro-c11="">299 AED</span></a>
            <div _ngcontent-mro-c11="" class="dv_dmof_txt">don't miss the offer </div>
        </div>
    </div>
    <div _ngcontent-mro-c11="" class="row display-block-sm">
        <div _ngcontent-mro-c11="" class="col-md-12 mt-3"><img _ngcontent-mro-c11=""
                src="https://ik.imagekit.io/mirrorskit/assets/keratin/img/aed-399-499/why-package.png" class="w-100">
        </div>
    </div>
</div>
