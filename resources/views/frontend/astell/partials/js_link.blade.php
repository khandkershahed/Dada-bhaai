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

<script>
    const swiper = new Swiper('#main-slider', {
        // Main slider configuration
        slidesPerView: 1,
        spaceBetween: 0, // Adjust spacing between slides if needed
        loop: true, // Enable looping (optional)
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        // Enable mousewheel control (optional)
        mousewheel: true,
    });

    const thumbnailSwiper = new Swiper('.thumbnails.swiper-container', {
        // Thumbnail slider configuration
        slidesPerView: 6, // Adjust the number of thumbnails displayed
        spaceBetween: 10, // Adjust spacing between thumbnails
        centeredSlides: true, // Center thumbnails (optional)
        slideToClickedSlide: true, // Allow clicking thumbnails to navigate
        loop: true, // Enable looping for thumbnails (optional)
    });

    // Connect the sliders (mandatory for synchronization)
    swiper.controller.control = thumbnailSwiper;
    thumbnailSwiper.controller.control = swiper;
</script>
