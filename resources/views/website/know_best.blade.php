<div _ngcontent-mro-c11="" class="dv_why_package pt-5">
    <div _ngcontent-mro-c11="" class="container">
        <div _ngcontent-mro-c11="" class="row">
            <div _ngcontent-mro-c11="" class="col-md-6">
                <div _ngcontent-mro-c11="" class="dv_mirrors_know_heading"> {!! $get_data_section_6->description !!} <span
                        _ngcontent-mro-c11="">{{ $get_data_section_6->handing }}</span></div>
                        <ul class="dv_mirrors_know_ul">
                            @foreach(json_decode($get_data_section_6->point_wise_details) as $index => $detail)
                                @php
                                    // Split the string into key and value
                                    [$key, $value] = explode(":", $detail, 2);
                                @endphp
                                <li>
                                    <span>{{ $index + 1 }}</span>
                                    <h3>{{ $key }}</h3>
                                    {{ $value }}
                                </li>
                            @endforeach
                        </ul>
                        <a _ngcontent-mro-c11=""
                    href="https://www.mirrorsbeautylounge.com/view-cart?location=1&amp;services=3131|399"
                    target="_blank" class="dv_why_book_now mt-0">{{ $get_data_section_6->button_text }} <span
                        _ngcontent-mro-c11="">299 AED</span></a>
                <div _ngcontent-mro-c11="" class="dv_dmof_txt">{{ $get_data_section_6->button_details }} </div>
            </div>
            <div _ngcontent-mro-c11="" class="col-md-2 display-none-sm"></div>
            <div _ngcontent-mro-c11="" class="col-md-4 display-none-sm"><img
                    _ngcontent-mro-c11=""
                    src="{{ $link_project->site_value . $get_data_section_6->image }}"
                    class="w-100"></div>
        </div>
    </div>
</div>
