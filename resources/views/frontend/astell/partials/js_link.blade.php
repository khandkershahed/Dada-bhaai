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
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js">
</script>


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

@stack('scripts')