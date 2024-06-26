<section class="experience">
    <div class="swiper-container" style="margin-top:5rem;">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            @if (
                !empty($homepage->background_image_one_image) ||
                    !empty($homepage->background_image_two_image) ||
                    !empty($homepage->background_image_three_image))
                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_one_image) }}" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_two_image) }}" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_three_image) }}" alt="">
                </div>
            @endif


        </div>


        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev-main"></div>
        <div class="swiper-button-next-main"></div>
    </div>
</section>

@section('scripts')
@endsection
