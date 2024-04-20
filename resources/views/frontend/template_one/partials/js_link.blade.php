<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="{{ asset('frontend/template_one/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/popper.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/one-page-nav-min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/slick.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/ajax-form.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/wow.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery.scrollUp.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery-ui-slider-range.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/meanmenu.min.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/Elemental.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/plugins.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/main.js') }}"></script>

<script>
    // JavaScript to toggle dropdown visibility
    $(document).ready(function() {
        $("#categoryLink").click(function(e) {
            e.preventDefault(); // Prevent default link behavior
            $("#categoryDropdown").slideToggle(); // Toggle dropdown visibility
            e.stopPropagation(); // Prevent event from propagating further
        });

        // Prevent dropdown from closing when clicking inside
        $("#categoryDropdown").click(function(e) {
            e.stopPropagation(); // Prevent event from propagating further
        });

        // Close dropdown when clicking outside
        $(document).click(function() {
            $("#categoryDropdown").slideUp(); // Close dropdown
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#myTab a").click(function(e) {
            e.preventDefault();
            $(this).tab("show");
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

{{-- AddToCartOne --}}
<script>
    function addToCartOne() {

        var product_name = $('#dpname').text();
        var id = $('#oneproduct_id').val();
        var quantity = $('#dqty').val();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/store/' + id,

            data: {
                quantity: quantity,
                product_name: product_name,
            },

            success: function(data) {

                // Start Message 
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        title: data.error,
                    })
                }
                // End Message 
            }

        })

    }
</script>
{{-- AddToCartOne --}}
