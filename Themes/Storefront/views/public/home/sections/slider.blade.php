{{--<section class="home-section-wrap">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="home-section-inner">--}}
{{--                <div class="home-slider-wrap">--}}
{{--                    <div--}}
{{--                        class="home-slider"--}}
{{--                        data-speed="{{ $slider->speed ?? '1000' }}"--}}
{{--                        data-autoplay="{{ $slider->autoplay ?? 'false' }}"--}}
{{--                        data-autoplay-speed="{{ $slider->autoplay_speed ?? '5000' }}"--}}
{{--                        data-fade="{{ $slider->fade ?? 'false' }}"--}}
{{--                        data-dots="{{ $slider->dots ?? 'true' }}"--}}
{{--                        data-arrows="{{ $slider->arrows ?? 'true' }}"--}}
{{--                    >--}}
{{--                        @foreach ($slider->slides as $slide)--}}
{{--                            <div class="slide">--}}
{{--                                <img src="{{ $slide->file->path }}" data-animation-in="zoomInImage" class="slider-image animated">--}}

{{--                                <div class="slide-content {{ $slide->isAlignedLeft() ? 'align-left' : 'align-right' }}">--}}
{{--                                    <div class="captions">--}}
{{--                                        <span--}}
{{--                                            class="caption caption-1"--}}
{{--                                            data-animation-in="{{ data_get($slide->options, 'caption_1.effect', 'fadeInRight') }}"--}}
{{--                                            data-delay-in="{{ data_get($slide->options, 'caption_1.delay', '0') }}"--}}
{{--                                        >--}}
{{--                                            {!! $slide->caption_1 !!}--}}
{{--                                        </span>--}}

{{--                                        <span--}}
{{--                                            class="caption caption-2"--}}
{{--                                            data-animation-in="{{ data_get($slide->options, 'caption_2.effect', 'fadeInRight') }}"--}}
{{--                                            data-delay-in="{{ data_get($slide->options, 'caption_2.delay', '0.3') }}"--}}
{{--                                        >--}}
{{--                                            {!! $slide->caption_2 !!}--}}
{{--                                        </span>--}}

{{--                                        @if ($slide->call_to_action_text)--}}
{{--                                            <a--}}
{{--                                                href="{{ $slide->call_to_action_url }}"--}}
{{--                                                class="btn btn-primary btn-slider"--}}
{{--                                                data-animation-in="{{ data_get($slide->options, 'call_to_action.effect', 'fadeInRight') }}"--}}
{{--                                                data-delay-in="{{ data_get($slide->options, 'call_to_action.delay', '0.7') }}"--}}
{{--                                                target="{{ $slide->open_in_new_window ? '_blank' : '_self' }}"--}}
{{--                                            >--}}
{{--                                                {!! $slide->call_to_action_text !!}--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @include('public.home.sections.slider_banners')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<div class="swiper-container banner-swiper ">

    <div class="swiper-wrapper ">


        @foreach ($slider->slides as $slide)
            <div class="swiper-slide">
                <div class="row">

                    <div class="slider-text col-12 col-lg-5">
                        <h2 class="p-2" id="header-text "> {!! $slide->caption_1 !!}</h2>
                        <p class="m-4 ">
                            {!! $slide->caption_2 !!}
                        </p>

                        @if ($slide->call_to_action_text)
                            <a
                                href="{{ $slide->call_to_action_url }}"
                                class="btn btn-dark w-48"
                                data-animation-in="{{ data_get($slide->options, 'call_to_action.effect', 'fadeInRight') }}"
                                data-delay-in="{{ data_get($slide->options, 'call_to_action.delay', '0.7') }}"
                                target="{{ $slide->open_in_new_window ? '_blank' : '_self' }}"
                            >
                                {!! $slide->call_to_action_text !!}
                            </a>
                        @endif


                    </div>
                    <div class="col-12 col-lg-7 text-center ">
                        <img src="{{ $slide->file->path }}" data-animation-in="zoomInImage"
                             class="slider-image animated">

                    </div>


                </div>
            </div>
        @endforeach


    </div>

    <div class="swiper-pagination "></div>
    <div class="swiper-button-prev "></div>
    <div class="swiper-button-next "></div>
</div>




<section class="promote row my-5 m-0 h-75 ">
    <div class="promote-item col-6 ">

        <a href="{{ $sliderBanners['banner_1']->call_to_action_url }}"
           class="banner"
           target="{{ $sliderBanners['banner_1']->open_in_new_window ? '_blank' : '_self' }}"
        >
            <img src="{{ $sliderBanners['banner_1']->image->path }}" alt="banner">
        </a>
    </div>
    <div class="promote-item col-6 ">
        <a href="{{ $sliderBanners['banner_2']->call_to_action_url }}"
           class="banner m-t-30"
           target="{{ $sliderBanners['banner_2']->open_in_new_window ? '_blank' : '_self' }}"
        >
            <img src="{{ $sliderBanners['banner_2']->image->path }}" alt="banner">
        </a>
    </div>
</section>
