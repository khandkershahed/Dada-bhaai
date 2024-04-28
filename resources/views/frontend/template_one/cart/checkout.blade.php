@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- page banner area start -->
    <section class="page-banner-area blog-page"
        data-background="{{ asset('frontend/template_one/assets/img/bg/blog-page-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <div class="banner-text text-center pt-80 pb-80">
                            <h2 class="f-800 cod__black-color">
                                DADA VAI <span class="grenadier-color">PRODUCT</span>
                            </h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb pt-3">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item grenadier-color active" aria-current="page">
                                        <a href="">
                                            <span class="grenadier-color">Shipping Info</span>
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- shop area start -->

    <form action="">
        @csrf


    </form>

    <div class="product shop-page pt-80 pb-80 fix">
        <div class="container">
            <div class="border-b">
                <div class="row">
                    <div class="col-lg-12 col-md-4">
                        <div class="shop-bar d-flex align-items-center justify-content-between">
                            <h5 class="f-800 cod__black-color">
                                <span class="grenadier-color">Information</span>
                            </h5>
                            <a href="#" class="f-800 cod__black-color">
                                <span class="grenadier-color">CONTINUE SHOPPING <i
                                        class="fa fa-long-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="accordion2" class="accordion">
                                        <div class="card border-0 shadow-none mb-0">
                                            <div class="card-header checkout-page-form collapsed" data-toggle="collapse"
                                                data-target="#collapseOne">
                                                <a class="card-title"> Billing Info </a>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion2"
                                                style="background-color: #f5f5f5">
                                                <div class="card-body p-0">
                                                    <div class="mb-3 bg-light p-3">
                                                        <span class="font-weight-bold">Billing Info</span>

                                                        <div class="row mt-2">

                                                            <div class="col-lg-4">
                                                                <label for="">Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Name" />
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label for="">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Phone" />
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label for="">Email</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Email" />
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Addres One</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address One" />
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Addres Two</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Country</label> <br />
                                                                <select class="form-select w-100">
                                                                    <option selected>
                                                                        Open this select menu
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Zip Code</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">State</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>

                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">City</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-header collapsed checkout-page-form" data-toggle="collapse"
                                                data-target="#collapseTwo">
                                                <a class="card-title"> Shipping Info </a>
                                            </div>

                                            <div id="collapseTwo" class="collapse" data-parent="#accordion2"
                                                style="background-color: #f5f5f5">
                                                <div class="card-body p-0">
                                                    <div class="mb-3 bg-light p-3">
                                                        <span class="font-weight-bold">Shipping Info</span>
                                                        <div class="row mt-2">
                                                            <div class="col-lg-4">
                                                                <label for="">Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Name" />
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Phone" />
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label for="">Email</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Email" />
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Addres One</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address One" />
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Addres Two</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Country</label> <br />
                                                                <select class="form-select w-100">
                                                                    <option selected>
                                                                        Open this select menu
                                                                    </option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">Zip Code</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">State</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>
                                                            <div class="col-lg-4 mt-3">
                                                                <label for="">City</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter Your Address Two" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header collapsed checkout-page-form" data-toggle="collapse"
                                                data-target="#collapseThree">
                                                <a class="card-title"> Payment Info </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion2"
                                                style="background-color: #f5f5f5">
                                                <div class="card-body p-0">
                                                    <div class="mb-3 bg-light p-3">
                                                        <span class="font-weight-bold">Payment Info</span>
                                                        @php
                                                            $shippings = App\Models\User\Shipping::where('status', '1')
                                                                ->latest()
                                                                ->get();
                                                        @endphp
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="py-3">

                                                                    @foreach ($shippings as $shipping)
                                                                        <div class="form-check">

                                                                            <input class="form-check-input" type="radio"
                                                                                name="shipping_charge" autocomplete="off"
                                                                                value="{{ $shipping->value }}" checked />

                                                                            <label class="form-check-label"
                                                                                for="cashOnDelivery">
                                                                                {{ $shipping->title }}
                                                                            </label>
                                                                            
                                                                        </div>
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div id="cashOnDeliveryDetails">
                                                                    Delivery Man Will Delivery Your Percel As
                                                                    Soon As Possible. Then Pay The Amount.
                                                                </div>
                                                                <div id="onlinePaymentDetails" style="display: none">
                                                                    Online Payment Open
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Check Out Content -->
                                <div class="col-lg-4">
                                    <form action="">
                                        <div class="card rounded-0">
                                            <div class="card-header font-weight-bold">
                                                ORDER SUMMERY
                                            </div>
                                            <div class="card-body border-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0">

                                                        <thead style="background: #dfdddd">
                                                            <tr>
                                                                <th scope="col">Details</th>
                                                                <th class="text-right">Price Info</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            @foreach ($carts as $item)
                                                                <tr class="">
                                                                    <td>Sub Total:</td>
                                                                    <td class="text-right">Tk {{ $item->price }}</td>
                                                                </tr>
                                                            @endforeach


                                                            <tr class="">
                                                                <td>Shipping Charge :</td>
                                                                <td class="text-right">Free Shipping</td>
                                                            </tr>

                                                            <tr class="">
                                                                <td>Delivery Charge :</td>
                                                                <td class="text-right">50 TK</td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="col">ORDER TOTAL</th>
                                                                <th class="text-right">TK 19000</th>
                                                            </tr>

                                                        </tbody>

                                                    </table>
                                                    <div>
                                                        <div class="d-flex justify-content-end">

                                                            <button type="submit" class="cart-button w-100">
                                                                Check Out
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
