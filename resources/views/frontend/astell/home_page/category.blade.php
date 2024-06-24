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
                                id="home-tab" data-bs-toggle="tab" data-bs-target="#tab-{{ $category->id }}"
                                type="button" role="tab" aria-controls="home"
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
                        <!-- Foods & Supplements -->
                        @foreach ($categories as $key => $category)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tab-{{ $category->id }}"
                                role="tabpanel" aria-labelledby="home-tab">
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

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach ($categories as $key => $category)
                var galleryThumbs{{ $key }} = new Swiper('.gallery-thumbs-{{ $key }}', {
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    slideToClickedSlide: true,
                    loop: true,
                    loopedSlides: 4, // Must be same as slidesPerView
                });

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
                    loopedSlides: 1, // Must be same as slidesPerView
                    slideToClickedSlide: true,
                });

                var thumbnailTextSlider{{ $key }} = new Swiper(
                    '.thumbnail-text-slider-{{ $key }}', {
                        spaceBetween: 10,
                        slidesPerView: 1,
                        loop: true,
                        loopedSlides: 4, // Must be same as slidesPerView
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
