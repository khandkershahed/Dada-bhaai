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
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset($product->product_image) }}" alt="Image 1">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Navigation Buttons -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Slider -->
                                    <div class="col-md-6">
                                        <!-- Thumbnail Text Slider -->
                                        <div class="swiper-container thumbnail-text-slider">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">{{ $product->product_name }}</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">
                                                                    {!! $product->short_desc !!}</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find
                                                                    store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                @foreach ($category->products as $product)
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="{{ asset($product->product_image) }}"
                                                            alt="Thumbnail 1">
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
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    slideToClickedSlide: true, // Enable slide to clicked slide
                    loop: true,
                    loopedSlides: 4, // Must be same as slidesPerView
                });

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
    </script>
@endpush
