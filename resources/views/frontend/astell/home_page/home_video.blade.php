
    <section class="key-visual">
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide" data-slide-type="vdo">
                    <video class="video-js" muted controls autoplay playsinline>
                        <source
                            src="{{ asset($homepage->video_slider_one_video) }}"
                            type="video/mp4" />
                    </video>
                    <div class="txt">
                        <strong style="color: #ffffff">{{ $homepage->video_slider_one_title }}</strong>
                        <p style="color: #ffffff">{{ $homepage->video_slider_one_sub_title }}</p>
                    </div>
                </li>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </section>

