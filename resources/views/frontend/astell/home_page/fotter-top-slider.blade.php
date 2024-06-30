<section class="experience">
    <div class="swiper-container footer-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="img-fluid" src="https://cdn.astellnkern.com/main_page_product/202305/20230510152756_711b599f-cb77-4ee6-b08c-3cd9fb8fe715.jpg"
                    alt="">
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="https://cdn.astellnkern.com/main_page_product/202305/20230510152930_c48737cd-1f43-47e8-bc42-58735b2388e7.jpg"
                    alt="">
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="https://cdn.astellnkern.com/main_page_exp/202301/20230112110038_696b3f1e-c929-42a8-942f-76168164274e.jpg"
                    alt="">
            </div>
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
