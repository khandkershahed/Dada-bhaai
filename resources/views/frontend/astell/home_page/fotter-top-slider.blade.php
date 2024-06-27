<section class="experience">
    <div class="swiper-container footer-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @if (!empty($homepage->background_image_one_image))
                <div class="swiper-slide">
                    <img class="img-fluid" src="{{ asset('upload/home/' . $homepage->background_image_one_image) }}"
                        alt="">
                </div>
            @endif

            @if (!empty($homepage->background_image_two_image))
                <div class="swiper-slide">
                    <img class="img-fluid" src="{{ asset('upload/home/' . $homepage->background_image_two_image) }}"
                        alt="">
                </div>
            @endif

            @if (!empty($homepage->background_image_three_image))
                <div class="swiper-slide">
                    <img class="img-fluid" src="{{ asset('upload/home/' . $homepage->background_image_three_image) }}"
                        alt="">
                </div>
            @endif
        </div>
    </div>
    <h2>IMAGINE<br> YOUR OWN LIFE</h2>
</section>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Swiper: Slider
            new Swiper('.footer-swiper', {
                loop: true,
                autoplay: {
                    delay: 3000, // Adjust the delay as needed (3000ms = 3 seconds)
                    disableOnInteraction: false, // Autoplay will not be disabled after user interactions
                },
                navigation: {
                    nextEl: '.swiper-button-next-main',
                    prevEl: '.swiper-button-prev-main',
                },
                slidesPerView: 1,
                paginationClickable: true,
                spaceBetween: 20,
                breakpoints: {
                    1920: {
                        slidesPerView: 1,
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
