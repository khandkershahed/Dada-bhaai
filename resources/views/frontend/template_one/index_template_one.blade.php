@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- hero  -->
    @include('frontend.template_one.partials.home_page.hero')
    <!-- Hero end -->

    <!-- Top Category Area  -->
    @include('frontend.template_one.partials.home_page.home_category')
    <!-- Top Category Area end -->

    <!-- Discover All Product  -->
    @include('frontend.template_one.partials.home_page.home_product')
    <!-- Discover All Product end -->

    <!-- Weekly Deals -->
    @include('frontend.template_one.partials.home_page.home_weekly_offer')
    <!-- Weekly Deals end -->

    <!-- Featured  -->
    @include('frontend.template_one.partials.home_page.home_feature')
    <!-- Featured end -->

    <!-- Offer Banner  -->

    @include('frontend.template_one.partials.home_page.offer_banner')

    <!-- Offer Banner -->

    <!-- Latest Items   -->
    @include('frontend.template_one.partials.home_page.latest_product')
    <!-- Latest Items  end -->

    <!-- Latest Offer  -->
    @include('frontend.template_one.partials.home_page.latest_offer')
    <!-- Latest Offer end -->

    <!-- Brand -->
    @include('frontend.template_one.partials.home_page.home_brand')
    
    <!-- Brand End -->

    <!-- Subscribe -->
    {{-- <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
<<<<<<< HEAD
                    <p class="text-center text-white mb-0 p-3">
                        Embark on an Epic Journey of Exploration at Dadabhaai – Where Every Click Awakens a World of Wonders and Whims!
                    </p>
=======
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img
                                        src="{{ asset('frontend/template_one/assets/img/icon/notification-icon.png') }}"
                                        alt="notification" /></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join
                                    Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">

                                </p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ..." />
                            <button class="btn newsletter--button" type="button">
                                <img src="{{ asset('frontend/template_one/assets/img/icon/plan-icon.png') }}"
                                    alt="" />
                            </button>
                        </form>
                    </div>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Subscribe End -->

    <!-- modal area start --
<<<<<<< HEAD
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Launch demo modal
              </button>

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                             <div class="modal-wrapper">
                                 <div class="pro-img">
                                     <img src="img/allproducts/modal-img.jpg" data-zoom-image="img/allproducts/demo.jpg" class="zoom-e-img" alt="">
                                 </div>
                                 <div class="pro-text">
                                     <h4>-30% on Subscribe</h4>
                                     <p>Five things you only know if you were at Chanel
                                         Hamburg Show Kering Reinforces Luxury Status
                                         By Distributing Puma.</p>
                                      <form action="#">
                                          <input type="email" placeholder="Enter your Email">
                                          <button type="submit">Submit</button>
                                          <span>
                                              <input type="checkbox">
                                              Prevent this pop-up
                                          </span>
                                      </form>
                                 </div>
                             </div>
                          </div>
                      </div>
                  </div>
              </div>
              -- modal area end -->
=======
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Launch demo modal
          </button>

          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                         <div class="modal-wrapper">
                             <div class="pro-img">
                                 <img src="img/allproducts/modal-img.jpg" data-zoom-image="img/allproducts/demo.jpg" class="zoom-e-img" alt="">
                             </div>
                             <div class="pro-text">
                                 <h4>-30% on Subscribe</h4>
                                 <p>Five things you only know if you were at Chanel
                                     Hamburg Show Kering Reinforces Luxury Status
                                     By Distributing Puma.</p>
                                  <form action="#">
                                      <input type="email" placeholder="Enter your Email">
                                      <button type="submit">Submit</button>
                                      <span>
                                          <input type="checkbox">
                                          Prevent this pop-up
                                      </span>
                                  </form>
                             </div>
                         </div>
                      </div>
                  </div>
              </div>
          </div>
          -- modal area end -->
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
@endsection
