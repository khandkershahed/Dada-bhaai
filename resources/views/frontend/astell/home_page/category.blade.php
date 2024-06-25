<style>
    .product__slider-main {
        margin-bottom: 15px;
    }

    .product__slider-main img {
        margin: 0 auto;
    }

    .product__slider-thmb .slick-slide {
        opacity: 0.5;
        transition: all .3s ease;
    }

    .product__slider-thmb .slick-slide.slick-active,
    .product__slider-thmb .slick-slide:hover {
        opacity: 1;
    }

    .product__slider-main,
    .product__slider-thmb {
        display: none;
    }
</style>
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs border-0 tab-links" id="myTab" role="tablist">
                    @foreach ($categories as $key => $category)
                        <li class="nav-item astel-product-tabs" role="presentation">
                            <button class="nav-link astel-product-tabs-link {{ $key == 0 ? 'active' : '' }}"
                                id="tab-{{ $category->id }}-tab" data-bs-toggle="tab"
                                data-bs-target="#tab-{{ $category->id }}" type="button" role="tab"
                                aria-controls="tab-{{ $category->id }}"
                                aria-selected="true">{{ $category->category_name }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #f4ece8;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($categories as $key => $category)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tab-{{ $category->id }}"
                                role="tabpanel" aria-labelledby="tab-{{ $category->id }}-tab">
                                <div class="row align-items-center">
                                    <!-- Main Slider -->
                                    <div class="col-md-6">
                                        <div class="swiper-container gallery-top-{{ $key }}">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset($product->product_image) }}"
                                                            alt="{{ $product->product_name }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Navigation Buttons -->
                                            <div class="swiper-button-next swiper-button-next-{{ $key }}">
                                            </div>
                                            <div class="swiper-button-prev swiper-button-prev-{{ $key }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Slider -->
                                    <div class="col-md-6">
                                        <!-- Thumbnail Text Slider -->
                                        <div class="swiper-container thumbnail-text-slider-{{ $key }}">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong
                                                                    class="tmpProductInfo tmpProductInfo_5">{{ $product->product_name }}</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5">
                                                                    {!! $product->short_desc !!}</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find
                                                                    store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs-{{ $key }}">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="{{ asset($product->product_image) }}"
                                                            alt="{{ $product->product_name }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>
<<<<<<< HEAD
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function initializeSwipers() {
                if (window.galleryThumbs) {
                    window.galleryThumbs.destroy(true, true);
                }
                if (window.galleryTop) {
                    window.galleryTop.destroy(true, true);
                }
                if (window.thumbnailTextSlider) {
                    window.thumbnailTextSlider.destroy(true, true);
                }

                window.galleryThumbs = new Swiper('.gallery-thumbs', {
=======

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            @foreach ($categories as $key => $category)
                var galleryThumbs{{ $key }} = new Swiper('.gallery-thumbs-{{ $key }}', {
>>>>>>> d415e67190cae898f7bcbb5c43ec61b6776ef329
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
<<<<<<< HEAD
                    slideToClickedSlide: true, // Enable slide to clicked slide
=======
                    slideToClickedSlide: true,
>>>>>>> d415e67190cae898f7bcbb5c43ec61b6776ef329
                    loop: true,
                    loopedSlides: {{ count($category->products) }},
                });

<<<<<<< HEAD
                window.galleryTop = new Swiper('.gallery-top', {
                    spaceBetween: 10,
                    slidesPerView: 1,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    thumbs: {
                        swiper: window.galleryThumbs,
                    },
                    loop: true,
                    loopedSlides: 4, // Must be same as slidesPerView
                    slideToClickedSlide: true, // Enable slide to clicked slide
                });

                window.thumbnailTextSlider = new Swiper('.thumbnail-text-slider', {
                    spaceBetween: 10,
                    slidesPerView: 1,
                    loop: true,
                    loopedSlides: 4, // Must be same as slidesPerView
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    thumbs: {
                        swiper: window.galleryThumbs,
                    },
                    slideToClickedSlide: true, // Enable slide to clicked slide
                });
            }

            // Initial Swiper initialization
            initializeSwipers();

            // Reinitialize Swipers after content is dynamically loaded
            document.addEventListener('contentUpdated', function() {
                initializeSwipers();
            });
        });
=======
                var galleryTop{{ $key }} = new Swiper('.gallery-top-{{ $key }}', {
                    spaceBetween: 10,
                    slidesPerView: 1,
                    navigation: {
                        nextEl: '.swiper-button-next-{{ $key }}',
                        prevEl: '.swiper-button-prev-{{ $key }}',
                    },
                    thumbs: {
                        swiper: galleryThumbs{{ $key }},
                    },
                    loop: true,
                    loopedSlides: {{ count($category->products) }},
                    slideToClickedSlide: true,
                });

                var thumbnailTextSlider{{ $key }} = new Swiper(
                    '.thumbnail-text-slider-{{ $key }}', {
                        spaceBetween: 10,
                        slidesPerView: 1,
                        loop: true,
                        loopedSlides: {{ count($category->products) }},
                        navigation: {
                            nextEl: '.swiper-button-next-{{ $key }}',
                            prevEl: '.swiper-button-prev-{{ $key }}',
                        },
                        thumbs: {
                            swiper: galleryThumbs{{ $key }},
                        },
                        slideToClickedSlide: true,
                    });
            @endforeach
        });

        
    </script>
@endpush
