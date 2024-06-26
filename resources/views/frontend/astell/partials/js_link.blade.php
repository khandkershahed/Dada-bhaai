<!--popUp//-->
<div id="indexPopLayer" class="popup sm-ty" style="display: none">
    <div class="pop-overlay"></div>
</div>

<iframe name="iframe4dummy" src="#" width="0" height="0" frameborder="0" style="display: none"></iframe>

<script src="{{ asset('frontend/astell/assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery.mCustomScrollbar.min.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/video.min.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/common.js') }}"></script><!--작업 js-->

<script src="{{ asset('frontend/astell/assets/js/jquery/jquery.alphanumeric.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery/jquery.placeholder.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery/jquery.tmpl.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/jquery/jquery.blockUI.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/kimsoft/kimsoft.js') }}"></script>
<script src="{{ asset('frontend/astell/assets/js/common.dev.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/jquery/jquery.alphanumeric.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/jquery/jquery.form.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/jquery/jquery.placeholder.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/jquery/jquery.tmpl.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/jquery/jquery.blockUI.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/kimsoft/kimsoft.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/astell/assets/js/common.dev.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>


<script>
    $(document).ready(function() {
        // Swiper: Slider
        new Swiper('.swiper-container-bottom', {
            loop: true,
            nextButton: '.swiper-button-next', // Selector for next button
            prevButton: '.swiper-button-prev', // Selector for previous button
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 20,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false
            },
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

<script>
    if ($('.product__slider-main').length) {
        var $slider = $('.product__slider-main')
            .on('init', function(slick) {
                $('.product__slider-main').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                lazyLoad: 'ondemand',
                autoplaySpeed: 3000,
                asNavFor: '.product__slider-thmb'
            });

        var $slider2 = $('.product__slider-thmb')
            .on('init', function(slick) {
                $('.product__slider-thmb').fadeIn(1000);
            })
            .slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                asNavFor: '.product__slider-main',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });

        //remove active class from all thumbnail slides
        $('.product__slider-thmb .slick-slide').removeClass('slick-active');

        //set active class to first thumbnail slides
        $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

        // On before slide change match active thumbnail to current slide
        $('.product__slider-main').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var mySlideNumber = nextSlide;
            $('.product__slider-thmb .slick-slide').removeClass('slick-active');
            $('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
        });


        // init slider
        require(['js-sliderWithProgressbar'], function(slider) {

            $('.product__slider-main').each(function() {

                me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);

                // stop slider
                //me.slider.stop();

                // start slider
                //me.slider.start(index);

                // get reference to slick slider
                //me.slider.getSlick();

            });
        });
        var options = {
            progressbarSelector: '.bJS_progressbar',
            slideSelector: '.bJS_slider',
            previewSlideSelector: '.bJS_previewSlider',
            progressInterval: ''
                // add your own progressbar animation function to sync it i.e. with a video
                // function will be called if the current preview slider item (".b_previewItem") has the data-customprogressbar="true" property set
                ,
            onCustomProgressbar: function($slide, $progressbar) {}
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var sliderOptions = {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var previewSliderOptions = {
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            centerMode: true
        }
    }
</script>

@stack('scripts')
