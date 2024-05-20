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

{{-- OfferToCartOne --}}
<script>
    function offerToCartOne() {

        var product_name = $('#opname').text();
        var id = $('#offerproduct_id').val();
        var quantity = $('#oqty').val();

        var price = $('#opprice').val();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product/offer/store/' + id,

            data: {
                quantity: quantity,
                product_name: product_name,

                price: price,
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


        // var price = $(this).data('offer_price');
        var product_id = $(this).data('product_id');


        // var color = $('#dcolor option:selected').text();

        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/product-store-cart',

            data: {
                // price: price,
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
                                                <li class="d-flex mb-2 align-items-center">


                                                    <a href="javascript:;" style="margin-right: 15px;">${value.name}</a> x ${value.qty}
                                                    Qty

                                                    {{-- <input type="number" class="form-control form-control-sm w-25"
                                                        name="" id="" value="1" min="1" /> --}}
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



{{-- MiniCart --}}
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


                var miniCart = ""

                $.each(response.carts, function(key, value) {
                    miniCart +=

                        `
                    <ul>
                                    <li class="mb-20">

                                        <div class="cart-image">
                                            <a href="javascript:;"><img src="/${value.options.image}"
                                                    alt="" style="width:70px;height:30px;" /></a>
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
<!--  /// End Wishlist Add -->

{{-- Get Wishlist --}}
<script type="text/javascript">
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
                                        <p>${value.product.product_name}</p>
                                    </td>

                                    <td>
                                                ${value.product.price_status == 'rfq'

                                                ? `<p class="text-brand">Tk ${value.product.sas_price}</p>`

                                                : ``

                                                }

                                                ${value.product.price_status == 'offer_price'

                                                ? `<p class="text-brand">Tk ${value.product.discount_price}</p>`

                                                : `<p class="text-brand">Tk ${value.product.price}</p>`

                                                }



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
