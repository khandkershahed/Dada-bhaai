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
<script src="{{ asset('frontend/template_one/assets/js/search_advance.js') }}"></script>

<script src="{{ asset('frontend/template_one/assets/js/validate.min.js') }}"></script>
<script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

{{-- Releted Accesories --}}
<script>
    $(document).ready(function() {
        $(".releted_accessories").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false, // Hide next and previous buttons
            spacing: 50, // Add a gap of 20px between slides
            // Add more settings/options as needed
        });
    });
</script>
{{-- Releted Accesories End --}}

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


@yield('catscripts')
@yield('childcatscripts')
@yield('brandscripts')
@yield('pricescripts')

{{-- Add Cart To Compare --}}
<script>
    $('.add_to_compare').click(function() {

        var product_id = $(this).data('product_id');

        $.ajax({
            type: 'POST',
            dataType: 'json',

            data: {
                product_id: product_id,
            },

            url: '/add-to-compare',

            success: function(data) {


                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                    window.location.href = '/compare-product';

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }
        })

    })
</script>

{{-- Load Compare --}}
<script>
    function compare() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/get-compare',
            success: function(response) {
                var tableHtml = "";

                $.each(response.carts, function(key, value) {
                    tableHtml += `
                    

                <li class="product">
                    <div class="top-info">
                        <div class="check">
                            </div>
                        <img src="/${value.options.image}" style="width:400px; height:200px;" alt="product image">
                    </div>

                    <ul class="cd-features-list">
                        <li>${value.name.length > 20 ? `${value.name.substring(0, 20)}...` : value.name}</li>
                        <li>Tk ${value.price}</li>

                        <li style="cursor:pointer;text-decoration: underline;" id="${value.id}" onclick="addToCartCompare(this.id)" >Add To Cart</li>

                        <li style="cursor:pointer;text-decoration: underline;" id="${value.rowId}" onclick="compareRemove(this.id)">Delete</li>
                    </ul>
                </li>

                

                `;
                });

                $('#compare').html(tableHtml);
            }
        });
    }

    compare();
</script>

{{-- Add Cart Compare --}}
<script>
    function addToCartCompare(id) {

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-cart-compare/" + id,

            success: function(data) {

                miniCart();
                miniCartRelated();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message


            }
        })
    }
</script>

{{-- Compare Remove --}}
<script>
    function compareRemove(rowId) {
        $.ajax({
            type: 'GET',
            url: '/compare/product/remove/' + rowId,
            dataType: 'json',
            success: function(data) {
                miniCart();
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

{{-- OfferToCartOne --}}
<script>
    $('.add_to_offer_btn').click(function() {

        var price = $(this).data('discount_price');
        var product_id = $(this).data('product_id');

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/offer/store',

            data: {
                price: price,
                product_id: product_id,
                // color: color,
            },

            success: function(data) {

                // $('.cart_icon').removeClass('d-none');

                miniCart();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }

        })



    })


    // function offerToCartOne() {

    //     var product_name = $('#opname').text();
    //     var id = $('#offerproduct_id').val();
    //     var quantity = $('#oqty').val();

    //     var price = $('#opprice').val();

    //     $.ajax({

    //         type: "POST",
    //         dataType: 'json',
    //         url: '/product/offer/store/' + id,

    //         data: {
    //             quantity: quantity,
    //             product_name: product_name,

    //             price: price,
    //         },

    //         success: function(data) {

    //             miniCart();

    //             // Start Message

    //             const Toast = Swal.mixin({
    //                 toast: true,
    //                 position: 'top-end',

    //                 showConfirmButton: false,
    //                 timer: 3000
    //             })
    //             if ($.isEmptyObject(data.error)) {

    //                 Toast.fire({
    //                     type: 'success',
    //                     icon: 'success',
    //                     title: data.success,
    //                 })

    //             } else {

    //                 Toast.fire({
    //                     type: 'error',
    //                     icon: 'error',
    //                     title: data.error,
    //                 })
    //             }

    //             // End Message
    //         }

    //     })

    // }
</script>
{{-- OfferToCartOne --}}

{{-- BuyToCartOne --}}
<script>
    function buyToCartOne() {

        var product_name = $('#dpname').text();
        var id = $('#oneproduct_id').val();
        var quantity = $('#dqty').val();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/buy/store/' + id,

            data: {
                quantity: quantity,
                product_name: product_name,
            },

            success: function(data) {

                miniCart();

                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                    window.location.href = '/cart-checkout';

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }
                // End Message
            }

        })

    }
</script>
{{-- BuyToCartOne --}}


{{-- AddToCartOne --}}
<script>
    function addToCartOne() {

        var product_name = $('#dpname').text();
        var id = $('#oneproduct_id').val();
        var quantity = $('#dqty').val();

        var color = $('#dcolor option:selected').text();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/store/' + id,

            data: {
                quantity: quantity,
                product_name: product_name,
                color: color,
            },

            success: function(data) {

                $('.cart_icon').removeClass('d-none');

                miniCart();
                miniCartRelated();

                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }
                // End Message
            }

        })

    }
</script>
{{-- AddToCartOne --}}

{{-- addToCartOneOffer --}}
<script>
    $('.add_to_cart_btn').click(function() {


        var price = $(this).data('offer_price');
        var product_id = $(this).data('product_id');


        // var color = $('#dcolor option:selected').text();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/offer-product-store',

            data: {
                price: price,
                product_id: product_id,
                // color: color,
            },

            success: function(data) {

                $('.cart_icon').removeClass('d-none');

                miniCart();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }

        })

    })
</script>
{{-- addToCartOneOffer --}}

{{-- add_to_cart_btn_product --}}
<script>
    $('.add_to_cart_btn_product').click(function() {

        var product_id = $(this).data('product_id');

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product-store-cart',

            data: {
                product_id: product_id,
            },

            success: function(data) {

                $('.cart_icon').removeClass('d-none');

                miniCart();
                miniCartRelated();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }

        })

    })
</script>
{{-- add_to_cart_btn_product --}}

{{-- ========================================== --}}
{{-- addToCartDetails --}}
<script>
    function addToCartDetailsF() {

        var product_name = $('#fname').text();
        var id = $('#fproduct_id').val();

        $.ajax({

            type: 'POST',
            dataType: 'json',

            url: "/fcart/data/store/" + id,

            data: {
                product_name: product_name,
            },

            success: function(data) {

                miniCart();

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


{{-- AddToCartOneRelated --}}
<script>
    function addToCartOneRelated() {

        var product_name = $('#drpname').text();
        var id = $('#onerproduct_id').val();
        var quantity = $('#drqty').val();

        // var color = $('#dcolor option:selected').text();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/store/related/' + id,

            data: {
                quantity: quantity,
                product_name: product_name,
                // color: color,
            },

            success: function(data) {

                miniCart();
                miniCartRelated();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }

        })

    }
</script>
{{-- AddToCartOneRelated --}}

{{-- Mini Cart Related --}}
<script type="text/javascript">
    function miniCartRelated() {
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart/related',
            dataType: 'json',

            success: function(response) {

                // console.log(response)

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);

                var miniCartRelated = ""

                $.each(response.carts, function(key, value) {
                    miniCartRelated +=


                        `

                    <ul style="list-style-type: circle !important;">
                                                <li class="d-flex mb-2 align-items-center pt-2">

                                                    <div class="row">

                                                        <div class="col-lg-4">
                                                            <span class="text-muted" href="javascript:;" style="margin-right: 10px;">${value.name}</span>${value.qty}*
                                                                Tk ${value.price}
                                                        </div>

                                                        <div class="col-lg-4">

                                                            <div class="number d-flex align-items-center">

                                                                <a type="submit" id="${value.rowId}" onclick="miniCartRelatedDecrease(this.id)" class="buttons-count" id="decrease">-</a>

                                                                <input type="text" disabled class="mb-0 border-1 text-center"
                                                                    name="" value="${value.qty}" min="1"
                                                                    style="width: 20px" />

                                                                <a type="submit" id="${value.rowId}" onclick="miniCartRelatedIncrease(this.id)" class="buttons-count" id="increase">+</a>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4">
                                                            <span class="">Tk ${value.subtotal}</span>

                                                            <span id="${value.rowId}" onclick="miniCartRelatedRemove(this.id)" class="ml-4" style="color: #cd3301; cursor: pointer;"> x </span>

                                                        </div>


                                                    </div>


                                                </li>
                                            </ul>

                    <ul>  `
                });

                $('#miniCartRelated').html(miniCartRelated);

            }

        })
    }
    miniCartRelated();
</script>
{{-- Mini Cart Related --}}

{{-- MiNi Cart Related Increase --}}
<script>
    function miniCartRelatedIncrease(rowId) {
        $.ajax({

            type: 'GET',
            dataType: 'json',

            url: '/mini-cart/increase/' + rowId,

            success: function(data) {

                miniCartRelated();

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
{{-- MiNi Cart Related Increase  --}}

{{-- MiNi Cart Related Decrease --}}
<script>
    function miniCartRelatedDecrease(rowId) {
        $.ajax({

            type: 'GET',
            dataType: 'json',

            url: '/mini-cart/decrease/' + rowId,

            success: function(data) {

                miniCartRelated();

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
{{-- MiNi Cart Related Decrease  --}}

{{-- Mini Cart Related Remove --}}
<script>
    function miniCartRelatedRemove(rowId) {
        $.ajax({

            type: 'GET',
            dataType: 'json',

            url: '/minicart-related-remove/' + rowId,

            success: function(data) {

                miniCartRelated();

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
{{-- MinI Cart Related remove --}}


{{-- MiniCart --}}
{{-- <script>
    function miniCart() {
        $.ajax({
            type: 'GET',
            url: '/product/mini-cart',
            dataType: 'json',
            success: function(response) {
                // console.log(response)

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);


                var miniCart = ""

                $.each(response.carts, function(key, value) {
                    miniCart +=

                        `
                    <ul>
                                    <li class="mb-20">

                                        <div class="cart-image">
                                            <a href="javascript:;"><img src="/${value.options.image}"
                                                    alt="" style="width:100%;height:100%;" /></a>
                                        </div>

                                        <div class="cart-text">
                                            <a href="javascript:;" class="title f-400 cod__black-color">${value.name}</a>
                                            <span class="cart-price f-400 dusty__gray-color">${value.qty} x
                                                <span class="price f-800 cod__black-color">Tk ${value.price}</span></span>
                                        </div>

                                        <div class="del-button">
                                            <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"  style="cursor: pointer"><i class="fi-rs-cross-small"></i>x</a>
                                        </div>

                                    </li>
                                </ul>

                    `

                });

                $('#miniCart').html(miniCart);

            }

        })
    }
    miniCart();
</script> --}}
<script>
    function miniCart() {
        $.ajax({
            type: 'GET',
            url: '/product/mini-cart',
            dataType: 'json',
            success: function(response) {
                // console.log(response)

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);

                var miniCart = "";

                if (response.carts.length === 0) {

                    $('#cartQty').closest('li').hide();
                    // Mini cart is empty
                    miniCart += `<ul><li class="mb-20 text-center">Mini cart is empty</li></ul>`;
                } else {

                    $('#cartQty').closest('li').show();
                    $.each(response.carts, function(key, value) {
                        miniCart +=
                            `<ul>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <img src="/${value.options.image}" alt="" style="width:100%;height:100%;" />
                                    </div>
                                    <div class="cart-text">
                                        <p class="title f-400 cod__black-color">${value.name}</p>
                                        <span class="cart-price f-400 dusty__gray-color">${value.qty} x <span class="price f-800 cod__black-color">Tk ${value.price}</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"  style="cursor: pointer"><i class="fi-rs-cross-small"></i>x</a>
                                    </div>
                                </li>
                            </ul>`;
                    });
                }

                $('#miniCart').html(miniCart);
            }
        });
    }
    miniCart();
</script>


{{-- MiniCart --}}

{{-- MiNi Cart Remove --}}
<script>
    function miniCartRemove(rowId) {
        $.ajax({
            type: 'GET',
            url: '/minicart/product/remove/' + rowId,
            dataType: 'json',
            success: function(data) {
                miniCart();
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

<!--  Start Load MY Cart // -->

{{-- <script type="text/javascript">
    function cart() {
        $.ajax({
            type: 'GET',
            url: '/get-cart-product',
            dataType: 'json',
            success: function(response) {
                // console.log(response)

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartTotal').text(response.cartTotal);

                var rows = ""

                $.each(response.carts, function(key, value) {
                    rows +=

                        `<tr class="border-bottom">
                                                    <td>1</td>

                                                    <td>
                                                        <div>
                                                            <img class="img-fluid"
                                                                src="/${value.options.image}"
                                                                alt="" style="width:100%;height:60px;" />
                                                        </div>
                                                    </td>

                                                    <td>${value.name}</td>

                                                    <td>${value.price} TK</td>

                                                    <td>
                                                        <div>
                                                            <div class="input-group mb-3">

                                                                <a type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)"
                                                                    class="input-group-append decrementBtn p-0 border-0 shadow-none"
                                                                    style="cursor: pointer">
                                                                    <span class="input-group-text">-</span>
                                                                </a>

                                                                <input  type="text"
                                                                    class="form-control text-center amountInput"
                                                                    aria-label="Amount (to the nearest dollar)"
                                                                    value="${value.qty}" min="1" />

                                                                <a type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)"
                                                                    class="input-group-prepend p-0 border-0 shadow-none incrementBtn"
                                                                    style="cursor: pointer">
                                                                    <span class="input-group-text">+</span>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>${value.subtotal} Tk</td>

                                                    <td class="text-center">
                                                        <div>
                                                            <a type="submit" style="cursor: pointer" id="${value.rowId}" onclick="cartRemove(this.id)">
                                                                <i class="fa fa-trash text-danger delet-icons"></i>
                                                            </a>
                                                        </div>
                                                    </td>

                                                </tr>`


                });

                $('#cartPage').html(rows);

            }

        })
    }
    cart();
</script> --}}

<script type="text/javascript">
    function cart() {
        $.ajax({
            type: 'GET',
            url: '/get-cart-product',
            dataType: 'json',
            success: function(response) {
                // console.log(response)

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartTotal').text(response.cartTotal);

                var rows = "";

                if (response.carts.length === 0) {

                    $('#cartQty').closest('li').hide();

                    // Cart is empty
                    rows += `<tr><td colspan="7" class="text-center">Cart is empty</td></tr>`;
                } else {

                    $('#cartQty').closest('li').show();

                    $.each(response.carts, function(key, value) {
                        rows +=
                            `<tr class="border-bottom">
                                <td>1</td>
                                <td>
                                    <div>
                                        <img class="img-fluid"
                                            src="/${value.options.image}"
                                            alt="" style="width:100%;height:60px;" />
                                    </div>
                                </td>
                                <td>${value.name}</td>
                                <td>${value.price} TK</td>
                                <td>
                                    <div>
                                        <div class="input-group mb-3">
                                            <a type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)"
                                                class="input-group-append decrementBtn p-0 border-0 shadow-none"
                                                style="cursor: pointer">
                                                <span class="input-group-text">-</span>
                                            </a>
                                            <input  type="text"
                                                class="form-control text-center amountInput"
                                                aria-label="Amount (to the nearest dollar)"
                                                value="${value.qty}" min="1" />
                                            <a type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)"
                                                class="input-group-prepend p-0 border-0 shadow-none incrementBtn"
                                                style="cursor: pointer">
                                                <span class="input-group-text">+</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>${value.subtotal} Tk</td>
                                <td class="text-center">
                                    <div>
                                        <a type="submit" style="cursor: pointer" id="${value.rowId}" onclick="cartRemove(this.id)">
                                            <i class="fa fa-trash text-danger delet-icons"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>`;
                    });
                }

                $('#cartPage').html(rows);
            }
        });
    }
    cart();
</script>

{{-- Remove Load Cart --}}
<script>
    function cartRemove(id) {
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/cart-remove/" + id,

            success: function(data) {

                cart();
                miniCart();
                // couponCalculation();
                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message


            }
        })
    }
</script>


{{-- // Cart INCREMENT --}}
<script>
    // Cart INCREMENT

    function cartIncrement(rowId) {
        $.ajax({
            type: 'GET',
            url: "/cart-increment/" + rowId,
            dataType: 'json',
            success: function(data) {
                // couponCalculation();
                cart();
                miniCart();

            }
        });
    }


    // Cart INCREMENT End

    // Cart Decrement Start

    function cartDecrement(rowId) {
        $.ajax({
            type: 'GET',
            url: "/cart-decrement/" + rowId,
            dataType: 'json',
            success: function(data) {
                // couponCalculation();
                cart();
                miniCart();

            }
        });
    }


    // Cart Decrement End
</script>

{{-- ============================================== --}}

{{-- ============================================== --}}

<!--  /// Start Wishlist Add -->
<script type="text/javascript">
    function addToWishList(product_id) {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-wishlist/" + product_id,

            success: function(data) {
                wishlist();



                // Start Message

                // const Toast = Swal.mixin({
                //     toast: true,
                //     position: 'top-end',

                //     showConfirmButton: false,
                //     timer: 3000
                // })
                // if ($.isEmptyObject(data.error)) {

                //     Toast.fire({
                //         type: 'success',
                //         icon: 'success',
                //         title: data.success,
                //     })

                // } else {

                //     Toast.fire({
                //         type: 'error',
                //         icon: 'error',
                //         title: data.error,
                //     })
                // }

                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end', // Position set to bottom-end
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: { // Custom class to make the toast smaller
                        popup: 'swal2-toast',
                        title: 'swal2-toast-title',
                        content: 'swal2-toast-content'
                    }
                });

                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        icon: 'success',
                        title: data.success
                    });
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: data.error
                    });
                }
                // End Message update code


                // End Message


            }
        })
    }
</script>
<!--  /// End Wishlist Add -->

{{-- Get Wishlist --}}

{{-- <script type="text/javascript">
    function wishlist() {
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/get-wishlist-product/",

            success: function(response) {

                $('#wishQty').text(response.wishQty);

                var rows = ""
                $.each(response.wishlist, function(key, value) {

                    rows +=

                        `<tr class="border-bottom">



                                    <td>
                                        <img class="img-fluid"
                                            src="/${value.product.product_image}" style="width:60px;height:60px;" alt="" />

                                    </td>

                                    <td>
                                        <p>
                                            ${value.product.product_name.length > 16 ? value.product.product_name.substring(0, 16) : value.product.product_name}

                                        </p>

                                    </td>

                                    <td>
                                       ${
                                        value.product.price_status === 'rfq'

                                        ? `<p class="text-brand">Tk ${value.product.sas_price}</p>`

                                        : (value.product.price_status === 'offer_price'
                                            ? `<p class="text-brand">Tk ${value.product.discount_price}</p>`

                                            : (value.product.price_status === 'price'
                                                ? `<p class="text-brand">Tk ${value.product.price}</p>`
                                                : ''
                                            )
                                        )
                                    }

                                    </td>

                                    <td class="">


                                        <a type="submit" class="add-link" style="cursor:pointer;text-decoration: underline;" id="${value.product.id}" onclick="addToCartWishlist(this.id)" >+Add To Cart</a>

                                    </td>

                                    <td class="">


                                        <a type="submit" class="text-body" id="${value.id}" onclick="wishlistRemove(this.id)" ><i class="fa fa-trash text-danger"></i></a>

                                        </td>

                                    </tr>`


                });

                $('#wishlist').html(rows);

            }
        })
    }

    wishlist();
</script> --}}


<script type="text/javascript">
    function wishlist() {
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/get-wishlist-product",
            success: function(response) {
                $('#wishQty').text(response.wishQty);
                var rows = "";

                if (response.wishQty === 0) {
                    // Wishlist is empty, hide the wishlist count
                    $('#wishQty').closest('li').hide();

                    rows += `<tr>
                                <td style="text-align: center;">Wishlist is empty</td>
                             </tr>`;
                } else {
                    // Wishlist is not empty, show the wishlist count
                    $('#wishQty').closest('li').show();

                    $.each(response.wishlist, function(key, value) {
                        rows +=
                            `<tr class="border-bottom">
                                <td>
                                    <img class="img-fluid"
                                        src="/${value.product.product_image}" style="width:60px;height:60px;" alt="" />
                                </td>
                                <td>
                                    <p>${value.product.product_name.length > 16 ? value.product.product_name.substring(0, 16) : value.product.product_name}</p>
                                </td>
                                <td>
                                    ${
                                        value.product.price_status === 'rfq'
                                        ? `<p class="text-brand">Tk ${value.product.sas_price}</p>`
                                        : (value.product.price_status === 'offer_price'
                                            ? `<p class="text-brand">Tk ${value.product.discount_price}</p>`
                                            : (value.product.price_status === 'price'
                                                ? `<p class="text-brand">Tk ${value.product.price}</p>`
                                                : ''
                                            )
                                        )
                                    }
                                </td>
                                <td class="">
                                    <a type="submit" class="add-link" style="cursor:pointer;text-decoration: underline;" id="${value.product.id}" onclick="addToCartWishlist(this.id)" >+Add To Cart</a>
                                </td>
                                <td class="">
                                    <a type="submit" style="cursor:pointer;" class="text-body" id="${value.id}" onclick="wishlistRemove(this.id)" ><i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>`;
                    });
                }
                $('#wishlist').html(rows);
            }
        });
    }

    wishlist();
</script>




{{-- // Wishlist Remove Start  --}}
<script>
    function wishlistRemove(id) {

        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/wishlist-remove/" + id,

            success: function(data) {
                wishlist();
                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message


            }
        })
    }
</script>

<script>
    $(document).ready(function() {
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function() {
            if (isOpen == false) {
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function() {
            return false;
        });
        searchBox.mouseup(function() {
            return false;
        });
        $(document).mouseup(function() {
            if (isOpen == true) {
                $('.searchbox-icon').css('display', 'block');
                submitIcon.click();
            }
        });
    });

    function buttonUp() {
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if (inputVal !== 0) {
            $('.searchbox-icon').css('display', 'none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display', 'block');
        }
    }
</script>

{{-- Add Cart Wishlist --}}
<script>
    function addToCartWishlist(id) {

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-cart-wishlist/" + id,

            success: function(data) {

                miniCart();
                miniCartRelated();

                // Start Message

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message


            }
        })
    }
</script>

{{-- <script>
    // Close dropdown on outside click
    $(document).on('click', function(event) {
        var $trigger = $("#navbarDropdown").closest('.dropdown');
        if ($trigger.length && !$trigger.has(event.target).length) {
            $('.dropdown-menu').removeClass('show');
        }
    });

    // Prevent dropdown menu from closing on click inside
    $('.dropdown-menu').on('click', function(event) {
        event.stopPropagation();
    });

    // Ensure the dropdown menu opens correctly
    $('#navbarDropdown').on('click', function(event) {
        event.stopPropagation();
        $(this).next('.dropdown-menu').toggleClass('show');
    });
</script> --}}

<script>
    const header = document.querySelector(".page-header");
    const toggleClass = "is-sticky";

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 150) {
            header.classList.add(toggleClass);
        } else {
            header.classList.remove(toggleClass);
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const qtyInput = document.getElementById('dqty');
        const increaseBtn = document.getElementById('increase');
        const decreaseBtn = document.getElementById('decrease');

        increaseBtn.addEventListener('click', () => {
            qtyInput.value = parseInt(qtyInput.value) + 1;
        });

        decreaseBtn.addEventListener('click', () => {
            if (qtyInput.value > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const qtyInput = document.getElementById('dqtyAccesories');
        const increaseBtn = document.getElementById('increaseAccesories');
        const decreaseBtn = document.getElementById('decreaseAccesories');

        increaseBtn.addEventListener('click', () => {
            qtyInput.value = parseInt(qtyInput.value) + 1;
        });

        decreaseBtn.addEventListener('click', () => {
            if (qtyInput.value > 1) {
                qtyInput.value = parseInt(qtyInput.value) - 1;
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Initialize accordion
        $('.card-header').each(function() {
            if ($(this).hasClass('mark-cat')) {
                $(this).addClass('collapsed').next().collapse('show');
            } else {
                $(this).addClass('collapsed').next().collapse('hide');
            }
            if ($(this).hasClass('mark-sub-cat')) {
                $(this).addClass('collapsed').next().collapse('show');
            } else {
                $(this).addClass('collapsed').next().collapse('hide');
            }

            if ($(this).hasClass('marks')) {
                $(this).addClass('collapsed').next().collapse('show');
            } else {
                $(this).addClass('collapsed').next().collapse('hide');
            }
        });

        // Handle click events to toggle accordion
        $('.category-filter, .card-header').click(function() {
            $(this).toggleClass('collapsed').next().collapse('toggle');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.childcategory-link').click(function() {
            // Remove "marks" class from all links
            $('.childcategory-link').removeClass('marks');
            // Add "marks" class to the clicked link
            $(this).addClass('marks');
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Listen for change event on checkbox
        $('#defaultCheck1').change(function() {
            // Check if checkbox is checked
            if ($(this).is(':checked')) {
                // If checked, hide the on-check-show div
                $('.on-check-show').hide();
            } else {
                // If not checked, show the on-check-show div
                $('.on-check-show').show();
            }
        });
    });
</script>

<script>
    $(window).load(function () {
      $(".loader").fadeOut(3000);
    });
  </script>

{{-- ======================================================= --}}

{{-- =========================== --}}
