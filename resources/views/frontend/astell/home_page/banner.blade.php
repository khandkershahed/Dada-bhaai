<section class="experience">
    <h2>{{ $homepage->background_image_title }}</h2>
    <div class="swiper-container">
        <ul class="swiper-wrapper">

            @if (!empty($homepage->background_image_one_image))
                <li class="swiper-slide" data-slide-type="img">
                    <div class="bg"
                        style=" background-image: url('{{ asset('upload/home/' . $homepage->background_image_one_image) }}')');">
                    </div>
                </li>
            @endif

            @if (!empty($homepage->background_image_two_image))
                <li class="swiper-slide" data-slide-type="img">
                    <div class="bg"
                        style="background-image: url('{{ asset('upload/home/' . $homepage->background_image_two_image) }}');">
                    </div>
                </li>
            @endif

            @if (!empty($homepage->background_image_three_image))
                <li class="swiper-slide" data-slide-type="img">
                    <div class="bg"
                        style=" background-image: url('{{ asset('upload/home/' . $homepage->background_image_three_image) }}');">
                    </div>
                </li>
            @endif


        </ul>

        <div class="swiper-button-prev">
            <div class="bg"></div>
            <span>Prev</span>
        </div>
        <div class="swiper-button-next">
            <div class="bg"></div>
            <span>Next</span>
        </div>
        
    </div>
</section>
