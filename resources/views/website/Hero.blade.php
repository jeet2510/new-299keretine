{{-- {{ dd($data[0]) }} --}}

<div _ngcontent-mro-c11="" class="display-block-sm position-relative"><img _ngcontent-mro-c11=""
        src="{{ $link_project->site_value . $data[0]->image_details->{2}->file_path }}" class="w-100"><a
        _ngcontent-mro-c11="" href="{{ $data[0]->button_details->{1}->redirect_url }}" target="_blank"><img
            _ngcontent-mro-c11="" src="{{ $link_project->site_value . $data[0]->button_details->{1}->image_path }}"
            style="width: 70%; position: absolute; left: 0; margin: 0 auto; display: block; right: 0; top: 21%; -webkit-animation: mirroreffects 1.5s ease-in-out infinite both; animation: mirroreffects 1.5s ease-in-out infinite both;"></a>
</div>
<div _ngcontent-mro-c11="" class="display-none-sm">

    <div _ngcontent-mro-c11="" class="row m-0">
        <div _ngcontent-mro-c11="" class="position-relative"><img _ngcontent-mro-c11=""
                src="{{ $link_project->site_value . $data[0]->image_details->{1}->file_path }}" class="w-100">
            <div _ngcontent-mro-c11="" class="dv_slider_content_wrapper">
                <div _ngcontent-mro-c11="" class="dv_slider_content">
                    <h1 _ngcontent-mro-c11=""><b _ngcontent-mro-c11=""
                            style="font-weight: normal; text-shadow: 4px 1px 8px #EC4266; margin: 0 0 0 -85px;">{{ $data[0]->text_details[0]->title }}
                        </b><span _ngcontent-mro-c11="">{{ $data[0]->text_details[0]->extrafield }}</span>
                        <div _ngcontent-mro-c11=""> {!! $data[0]->text_details[0]->description !!}
                        </div>
                    </h1><a _ngcontent-mro-c11="" href="{!! $data[0]->button_details->{1}->redirect_url !!}" target="_blank" class="dv_now_499_aed">
                        {{ $data[0]->button_details->{1}->title }} </a>
                </div>
                <div _ngcontent-mro-c11="" class="dv_trans_bg_overlay"></div>
            </div>
        </div>
    </div>
</div>
