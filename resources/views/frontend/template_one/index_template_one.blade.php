@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')

  <!-- hero  -->
  <section class="hero hero__area">
      <div class="hero__active slider-active">
          <div class="single__hero single-slider hero__bg pt-140 pb-120" style="height: 568px"
              data-background="https://www.dadabhaai.com/storage/gh5gvNoyJxVBhkMIFky5P8sZj5iqKje4nt7YFi9h.jpg">
          </div>
          <div class="single__hero single-slider hero__bg pt-140 pb-120" style="height: 568px"
              data-background="https://www.dadabhaai.com/storage/qXhTOBlvmNKnrC33ySBdv6gTlKR446n8Wz9riWui.jpg">
          </div>
          <div class="single__hero single-slider hero__bg pt-140 pb-120"
              data-background="img/bg/h1__hero__bg.png" style="height: 568px"></div>
      </div>
  </section>
  <!-- Hero end -->

  <!-- Top Featured Area  -->
  <div class="top__featured--area pt-80 pb-80">
      <div class="container">
          <div class="row">
              <div class="col-xl-2">
                  <div class="top__featured--title">
                      <span class="dusty__gray-color text-uppercase">Top Featured</span>
                      <h3 class="pure__black-color mb-120">
                          <span class="f-300">Discover Top</span>
                          <span class="f-800">Categories</span>
                      </h3>
                      <a class="grenadier-color" href="category.html">View All Category</a>
                  </div>
              </div>
              <div class="col-xl-10">
                  <div class="categories-active row position-relative">
                      <div class="single-categories col-sm-12">
                          <div class="categories-box position-relative">
                              <div class="categories-thumb">
                                  <a href="category.html"><img class="img"
                                          src="img/categories/cate__thumb1.jpg" alt="" /></a>
                                  <h6 class="f-800 pure__black-color cate-title">
                                      <a href="#">Relexing Chair</a>
                                  </h6>
                              </div>
                          </div>
                      </div>
                      <div class="single-categories col-sm-12">
                          <div class="categories-box position-relative">
                              <div class="categories-thumb">
                                  <a href="category.html"><img class="img"
                                          src="img/categories/cate__thumb2.jpg" alt="" /></a>
                                  <h6 class="f-800 pure__black-color cate-title">
                                      <a href="#">Mattresses</a>
                                  </h6>
                              </div>
                          </div>
                      </div>
                      <div class="single-categories col-sm-12">
                          <div class="categories-box position-relative">
                              <div class="categories-thumb">
                                  <a href="category.html"><img class="img"
                                          src="img/categories/cate__thumb3.jpg" alt="" /></a>
                                  <h6 class="f-800 pure__black-color cate-title">
                                      <a href="#">Wooden Table</a>
                                  </h6>
                              </div>
                          </div>
                      </div>
                      <div class="single-categories col-sm-12">
                          <div class="categories-box position-relative">
                              <div class="categories-thumb">
                                  <a href="category.html"><img class="img"
                                          src="img/categories/cate__thumb4.jpg" alt="" /></a>
                                  <h6 class="f-800 pure__black-color cate-title">
                                      <a href="#">Light & Lamp</a>
                                  </h6>
                              </div>
                          </div>
                      </div>
                      <div class="single-categories col-sm-12">
                          <div class="categories-box position-relative">
                              <div class="categories-thumb">
                                  <a href="category.html"><img class="img"
                                          src="img/categories/cate__thumb2.jpg" alt="" /></a>
                                  <h6 class="f-800 pure__black-color cate-title">
                                      <a href="#">Light & Lamp</a>
                                  </h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Top Featured Area end -->

  <!-- Discover All Product  -->
  <section class="all__product pt-80 pb-20">
      <div class="all__product--nav">
          <div class="container">
              <div class="row all__product--row align-items-center justify-content-between">
                  <div class="col-xl-12 col-md-12">
                      <div class="all__product--menu mb-30">
                          <nav>
                              <hr class="m-0 p-0" style="margin-bottom: -25px !important" />
                              <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab"
                                  role="tablist">
                                  <a class="nav-item nav-link active btn orange-bg-btn pure__black-color"
                                      id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                      aria-controls="nav-home" aria-selected="true">Electronics Devices</a>
                                  <a class="nav-item nav-link btn gray-bg-btn pure__black-color"
                                      id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                      role="tab" aria-controls="nav-profile" aria-selected="false">TV &
                                      Home Appliances</a>
                                  <a class="nav-item nav-link btn gray-bg-btn pure__black-color"
                                      id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                      role="tab" aria-controls="nav-contact"
                                      aria-selected="false">Electronic Accessories</a>
                              </div>
                          </nav>
                      </div>
                  </div>
                  <div class="col-xl-12">
                      <div class="all__product--link text-center mb-30">
                          <a class="all-link" href="shop-collection.html">Discover All Products<span
                                  class="lnr lnr-arrow-right"></span></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="all__product--body">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                              aria-labelledby="nav-home-tab">
                              <div class="product__active owl-carousel">
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__01.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__03.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__08.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__09.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                              aria-labelledby="nav-profile-tab">
                              <div class="product__active owl-carousel">
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__01.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__03.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__08.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__09.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems Purple
                                                      Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                              aria-labelledby="nav-contact-tab">
                              <div class="product__active owl-carousel">
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__01.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__02.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__03.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__04.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__05.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__06.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__08.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                                  <div class="product__single">
                                      <div class="product__box">
                                          <div class="product__thumb">
                                              <a href="product-details.html" class="img-wrapper">
                                                  <img class="img"
                                                      src="img/allproducts/products__thumb__07.jpg"
                                                      alt="" />
                                                  <img class="img secondary-img"
                                                      src="img/allproducts/products__thumb__09.jpg"
                                                      alt="" />
                                              </a>
                                          </div>
                                          <div class="product__content--top">
                                              <span class="cate-name">SAMSUNG</span>
                                              <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                  <a href="product-details.html">Wireless Audioing Systems
                                                      Purple Degree</a>
                                              </h6>
                                          </div>
                                          <div class="product__content--rating d-flex justify-content-between">
                                              <div class="rating">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="price">
                                                  <h5 class="grenadier-color f-600">$2,299.00</h5>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-action">
                                          <a href="#"><span class="lnr lnr-heart"></span></a>
                                          <a href="#"><span class="lnr lnr-eye"></span></a>
                                          <a href="#"><span class="lnr lnr-cart"></span></a>
                                          <a href="#"><span class="lnr lnr-sync"></span></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Discover All Product end -->

  <!-- Weekly Deals -->
  <div class="offer-deals">
      <div class="offer--deals__main offer-deals--bg pt-75 pb-45"
          data-background="img/bg/offer__deals__bg.png">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="offer--deals__tabs">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="cat-tab-one" role="tabpanel"
                                  aria-labelledby="home-tab">
                                  <div class="row align-items-center">
                                      <div class="col-xl-4 col-lg-4">
                                          <div class="offer--deals__title mb-30">
                                              <h2>
                                                  Limited
                                                  <span class="f-800 pure__black-color d-block">Weekly
                                                      Deals</span>
                                              </h2>
                                              <p>Hurry Up Before Offer Will End</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                          <div class="offer--deals__products mb-30">
                                              <div class="ratings mb-10">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="products--deals__content mb-35">
                                                  <h6 class="f-700 mb-20">
                                                      <a href="#">3D Wooden Ceiling Floor Lighting For
                                                          Living
                                                          Room</a>
                                                  </h6>
                                                  <span class="price-old">$2,299.00</span>
                                                  <span class="price-new f-600 grenadier-color">$2,299.00</span>
                                              </div>
                                              <div class="product-countdown mb-15">
                                                  <div class="time-count-deal">
                                                      <div class="countdown-list" data-countdown="2019/12/01">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product--footer__deals">
                                                  <a class="add-link f-700">+ Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="cat-tab-two" role="tabpanel"
                                  aria-labelledby="profile-tab">
                                  <div class="row align-items-center">
                                      <div class="col-xl-4 col-lg-4">
                                          <div class="offer--deals__title mb-30">
                                              <h2>
                                                  Limited Two
                                                  <span class="f-800 pure__black-color d-block">Weekly
                                                      Deals</span>
                                              </h2>
                                              <p>Hurry Up Before Offer Will End</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                          <div class="offer--deals__products mb-30">
                                              <div class="ratings mb-10">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="products--deals__content mb-35">
                                                  <h6 class="f-700 mb-20">
                                                      <a href="#">3D Wooden Ceiling Floor Lighting For
                                                          Living
                                                          Room</a>
                                                  </h6>
                                                  <span class="price-old">$2,299.00</span>
                                                  <span class="price-new f-600 grenadier-color">$2,299.00</span>
                                              </div>
                                              <div class="product-countdown text-right mb-15">
                                                  <div class="time-count-deal">
                                                      <div class="countdown-list" data-countdown="2019/12/01">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product--footer__deals">
                                                  <a class="add-link f-700">+ Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="cat-tab-three" role="tabpanel"
                                  aria-labelledby="cat-tab-three">
                                  <div class="row align-items-center">
                                      <div class="col-xl-4 col-lg-4">
                                          <div class="offer--deals__title mb-30">
                                              <h2>
                                                  Limited Three
                                                  <span class="f-800 pure__black-color d-block">Weekly
                                                      Deals</span>
                                              </h2>
                                              <p>Hurry Up Before Offer Will End</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                          <div class="offer--deals__products mb-30">
                                              <div class="ratings mb-10">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="products--deals__content mb-35">
                                                  <h6 class="f-700 mb-20">
                                                      <a href="#">3D Wooden Ceiling Floor Lighting For
                                                          Living
                                                          Room</a>
                                                  </h6>
                                                  <span class="price-old">$2,299.00</span>
                                                  <span class="price-new f-600 grenadier-color">$2,299.00</span>
                                              </div>
                                              <div class="product-countdown text-right mb-15">
                                                  <div class="time-count-deal">
                                                      <div class="countdown-list" data-countdown="2019/12/01">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product--footer__deals">
                                                  <a class="add-link f-700">+ Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="cat-tab-four" role="tabpanel"
                                  aria-labelledby="cat-tab-four">
                                  <div class="row align-items-center">
                                      <div class="col-xl-4 col-lg-4">
                                          <div class="offer--deals__title mb-30">
                                              <h2>
                                                  Limited Four
                                                  <span class="f-800 pure__black-color d-block">Weekly
                                                      Deals</span>
                                              </h2>
                                              <p>Hurry Up Before Offer Will End</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                          <div class="offer--deals__products mb-30">
                                              <div class="ratings mb-10">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="products--deals__content mb-35">
                                                  <h6 class="f-700 mb-20">
                                                      <a href="#">3D Wooden Ceiling Floor Lighting For
                                                          Living
                                                          Room</a>
                                                  </h6>
                                                  <span class="price-old">$2,299.00</span>
                                                  <span class="price-new f-600 grenadier-color">$2,299.00</span>
                                              </div>
                                              <div class="product-countdown text-right mb-15">
                                                  <div class="time-count-deal">
                                                      <div class="countdown-list" data-countdown="2019/12/01">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product--footer__deals">
                                                  <a class="add-link f-700">+ Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="cat-tab-five" role="tabpanel"
                                  aria-labelledby="cat-tab-five">
                                  <div class="row align-items-center">
                                      <div class="col-xl-4 col-lg-4">
                                          <div class="offer--deals__title mb-30">
                                              <h2>
                                                  Limited Five
                                                  <span class="f-800 pure__black-color d-block">Weekly
                                                      Deals</span>
                                              </h2>
                                              <p>Hurry Up Before Offer Will End</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-2">
                                          <div class="offer--deals__products mb-30">
                                              <div class="ratings mb-10">
                                                  <ul class="list-inline">
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li class="rating-active">
                                                          <i class="fas fa-star"></i>
                                                      </li>
                                                      <li><i class="fas fa-star"></i></li>
                                                      <li><i class="fas fa-star"></i></li>
                                                  </ul>
                                              </div>
                                              <div class="products--deals__content mb-35">
                                                  <h6 class="f-700 mb-20">
                                                      <a href="#">3D Wooden Ceiling Floor Lighting For
                                                          Living
                                                          Room</a>
                                                  </h6>
                                                  <span class="price-old">$2,299.00</span>
                                                  <span class="price-new f-600 grenadier-color">$2,299.00</span>
                                              </div>
                                              <div class="product-countdown text-right mb-15">
                                                  <div class="time-count-deal">
                                                      <div class="countdown-list" data-countdown="2019/12/01">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="product--footer__deals">
                                                  <a class="add-link f-700">+ Add To Cart</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="offer--deals__menu">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="deals--nav__menu">
                          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="cat-tab-one-tab" data-toggle="tab"
                                      href="#cat-tab-one" role="tab" aria-controls="cat-tab-one"
                                      aria-selected="true">Gaming Console & Control</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="cat-tab-two-tab" data-toggle="tab"
                                      href="#cat-tab-two" role="tab" aria-controls="cat-tab-two"
                                      aria-selected="false">Microwave Ovens</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="cat-tab-three-tab" data-toggle="tab"
                                      href="#cat-tab-three" role="tab" aria-controls="cat-tab-three"
                                      aria-selected="false">Smart Watches Deal Series 2</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="cat-tab-four-tab" data-toggle="tab"
                                      href="#cat-tab-four" role="tab" aria-selected="false">Computer &
                                      TVs</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="cat-tab-five-tab" data-toggle="tab"
                                      href="#cat-tab-five" role="tab" aria-selected="false">Smart
                                      Watches Deal Series 2</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Weekly Deals end -->

  <!-- Product  -->
  <div class="product pt-60 fix">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-sm-6">
                  <div class="product-section mb-30">
                      <h6 class="product--section__title f-800 white-color grenadier-bg">
                          Featured Items
                      </h6>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="all__product--link text-right mb-30">
                      <a class="all-link" href="shop-collection.html">Discover All Products<span
                              class="lnr lnr-arrow-right"></span></a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                  <div class="product__active owl-carousel mb-20">
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__06.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__08.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__07.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__09.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__08.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__05.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__09.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__03.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__10.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__02.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__11.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__06.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__08.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__04.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="offer-banner offer--banner__bg mb-30"
                      data-background="img/offer/offer__thumb__3.jpg">
                      <div class="offer--banner__text">
                          <span class="f-200 white-color">Student Table Lamps</span>
                          <h4 class="white-color f-900 mb-40">55% Flate</h4>
                          <a href="shop-collection.html">View Collection<i
                                  class="icofont-long-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="offer-banner offer--banner__bg mb-30"
                      data-background="img/offer/offer__thumb__4.jpg">
                      <div class="offer--banner__text">
                          <span class="f-200 white-color">Flower Pot Decorative</span>
                          <h4 class="white-color f-900 mb-40">75% Flate</h4>
                          <a href="shop-collection.html">View Collection<i
                                  class="icofont-long-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Product end -->

  <!-- Product  -->
  <div class="product pt-50 feature-h-one">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-lg-9 col-sm-6">
                  <div class="product-section mb-30">
                      <h6 class="product--section__title f-800 white-color grenadier-bg">
                          Featured Items
                      </h6>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="all__product--link text-right mb-30">
                      <a class="all-link" href="shop-collection.html">Discover All Products<span
                              class="lnr lnr-arrow-right"></span></a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__11.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__13.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__15.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__12.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__14.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="product__single mb-30">
                      <div class="product__box featured__box--item">
                          <div class="product__thumb">
                              <a href="product-details.html"><img class="img"
                                      src="img/allproducts/products__thumb__16.jpg" alt="" /></a>
                          </div>
                          <div class="product--flex__right">
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-30">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Product end -->

  <!-- Product  -->
  <div class="product pt-50 pb-40">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-lg-9 col-sm-6">
                  <div class="product-section mb-20">
                      <h6 class="product--section__title f-800 white-color grenadier-bg">
                          Featured Items
                      </h6>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="all__product--link text-right mb-20">
                      <a class="all-link" href="shop-collection.html">Discover All Products<span
                              class="lnr lnr-arrow-right"></span></a>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-xl-3 d-none d-xl-block">
                  <div class="small__banner mb-30">
                      <div class="small__banner--thumb position-relative">
                          <a href="#"><img src="img/offer/offer__small__thumb1.jpg"
                                  alt="" /></a>
                          <div class="small__banner--content text-center">
                              <span class="f-300 white-color">Table Lamp</span>
                              <h2 class="f-800 white-color">60% Flate</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-9">
                  <div class="product__active--small owl-carousel mb-30">
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__01.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__08.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__03.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__06.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__04.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__09.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__05.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__07.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Product end -->

  <!-- Product  -->
  <div class="product pb-40">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-lg-9 col-sm-6">
                  <div class="product-section mb-20">
                      <h6 class="product--section__title f-800 white-color grenadier-bg">
                          Featured Items
                      </h6>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="all__product--link text-right mb-20">
                      <a class="all-link" href="shop-collection.html">Discover All Products<span
                              class="lnr lnr-arrow-right"></span></a>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-xl-3 d-none d-xl-block">
                  <div class="small__banner mb-30">
                      <div class="small__banner--thumb position-relative">
                          <a href="#"><img src="img/offer/offer__small__thumb2.jpg"
                                  alt="" /></a>
                          <div class="small__banner--content text-center">
                              <span class="f-300 white-color">Table Lamp</span>
                              <h2 class="f-800 white-color">60% Flate</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-9">
                  <div class="product__active--small owl-carousel mb-30">
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__08.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__04.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__07.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__05.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__10.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__09.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                      <div class="product__single">
                          <div class="product__box">
                              <div class="product__thumb">
                                  <a href="product-details.html" class="img-wrapper">
                                      <img class="img" src="img/allproducts/products__thumb__11.jpg"
                                          alt="" />
                                      <img class="img secondary-img"
                                          src="img/allproducts/products__thumb__06.jpg" alt="" />
                                  </a>
                              </div>
                              <div class="product__content--top">
                                  <span class="cate-name">SAMSUNG</span>
                                  <h6 class="product__title mine__shaft-color f-700 mb-0">
                                      <a href="product-details.html">Wireless Audioing Systems Purple Degree</a>
                                  </h6>
                              </div>
                              <div class="product__content--rating d-flex justify-content-between">
                                  <div class="rating">
                                      <ul class="list-inline">
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li class="rating-active">
                                              <i class="fas fa-star"></i>
                                          </li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="price">
                                      <h5 class="grenadier-color f-600">$2,299.00</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="product-action">
                              <a href="#"><span class="lnr lnr-heart"></span></a>
                              <a href="#"><span class="lnr lnr-eye"></span></a>
                              <a href="#"><span class="lnr lnr-cart"></span></a>
                              <a href="#"><span class="lnr lnr-sync"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Product end -->

  <!-- Brand -->
  <div class="brand">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="brand-active">
                      <div class="single-brand">
                          <img src="img/brand/brand-logo1.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo2.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo3.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo4.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo5.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo2.png" alt="" />
                      </div>
                      <div class="single-brand">
                          <img src="img/brand/brand-logo1.png" alt="" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Brand End -->

  <!-- Subscribe -->
  <div class="subscribe subscribe--area grenadier-bg">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div
                      class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                      <div class="left d-flex justify-content-between align-items-center">
                          <div class="newsletter__title">
                              <span class="notification--icon"><img src="img/icon/notification-icon.png"
                                      alt="notification" /></span>
                              <span class="notification__title--heading f-800 white-color">Subscribe for Join
                                  Us!</span>
                          </div>
                          <div class="newsletter--message d-none d-xl-block">
                              <p class="newsletter__message__title mb-0">
                                  .... & receive $20 coupne for first Shopping & free
                                  delivery.
                              </p>
                          </div>
                      </div>
                      <form class="right newsletter--form pos-rel">
                          <input class="newsletter--input" type="text"
                              placeholder="Enter Your Email Address ..." />
                          <button class="btn newsletter--button" type="button">
                              <img src="img/icon/plan-icon.png" alt="" />
                          </button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Subscribe End -->

  <!-- modal area start --
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

@endsection
