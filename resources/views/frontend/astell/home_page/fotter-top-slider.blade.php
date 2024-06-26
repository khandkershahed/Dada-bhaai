<section class="experience">
    <div class="swiper-container footer-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @if (!empty($homepage->background_image_one_image))
                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_one_image) }}" alt="">
                </div>
            @endif

            @if (!empty($homepage->background_image_two_image))
                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_two_image) }}" alt="">
                </div>
            @endif

            @if (!empty($homepage->background_image_three_image))
                <div class="swiper-slide">
                    <img src="{{ asset('upload/home/' . $homepage->background_image_three_image) }}" alt="">
                </div>
            @endif
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Swiper: Slider
            new Swiper('.footer-swiper', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next-main',
                    prevEl: '.swiper-button-prev-main',
                },
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 20,
                breakpoints: {
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    }
                }
            });
        });
    </script>
@endpush
