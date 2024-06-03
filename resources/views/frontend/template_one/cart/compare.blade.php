@extends('frontend.template_one.frontend_dashboard_template_one')

@section('index_template_one')
@section('title')
    DadaBhaai | WishList
@endsection

<!-- page banner area start -->
<section class="page-banner-area blog-page"
    data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div class="banner-text text-center pt-180 pb-120">
                        <h2 class="f-800 cod__black-color">
                            WishList <span class="grenadier-color">Product</span>
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-3">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item grenadier-color active" aria-current="page">
                                    <a href="">
                                        <span class="grenadier-color">WishList</span>
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


@endsection
