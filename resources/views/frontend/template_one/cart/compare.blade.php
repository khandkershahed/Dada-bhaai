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
                            Compare <span class="grenadier-color">Product</span>
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-3">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item grenadier-color active" aria-current="page">
                                    <a href="">
                                        <span class="grenadier-color">Compare</span>
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

{{-- Compare List  --}}
<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12 table-responsive" style="overflow-y: hidden;">
                <table class="table table-bordered">
                    <tbody>

                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Product Name
                            </th>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <a href="">Cookie Press Machine Biscuit Maker Decorating Gun
                                    Kitchen Tools Set</a>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <a href="">Cookie Press Machine Biscuit Maker Decorating Gun
                                    Kitchen Tools Set</a>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <a href="">Cookie Press Machine Biscuit Maker Decorating Gun
                                    Kitchen Tools Set</a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Product Image
                            </th>
                            <td style="vertical-align: middle !important">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/upload/product/multiimage/1796664640686908.jpg"
                                        alt="Product" width="100px">
                                </a>
                            </td>
                            <td style="vertical-align: middle !important">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/upload/product/multiimage/1796664640686908.jpg"
                                        alt="Product" width="100px">
                                </a>
                            </td>
                            <td style="vertical-align: middle !important">
                                <a href="#">
                                    <img src="http://127.0.0.1:8000/upload/product/multiimage/1796664640686908.jpg"
                                        alt="Product" width="100px">
                                </a>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Price
                            </th>
                            <td class="blklt-clr price" style="vertical-align: middle !important">
                                <span class="thm-clr"> Tk 630</span>
                            </td>
                            <td class="blklt-clr price" style="vertical-align: middle !important">
                                <span class="thm-clr"> Tk 630</span>
                            </td>
                            <td class="blklt-clr price" style="vertical-align: middle !important">
                                <span class="thm-clr"> Tk 630</span>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Brand
                            </th>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                Others
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                Others
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                Others
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Secification
                            </th>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p class="blklt-clr">
                                    This product is very suitable for home, DIY makes
                                    perfect cookies. Stainless ste...
                                    <a href="">
                                        <span style="color: red !important">more</span>
                                    </a>
                                </p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p class="blklt-clr">
                                    This product is very suitable for home, DIY makes
                                    perfect cookies. Stainless ste...
                                    <a href="">
                                        <span style="color: red !important">more</span>
                                    </a>
                                </p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p class="blklt-clr">
                                    This product is very suitable for home, DIY makes
                                    perfect cookies. Stainless ste...
                                    <a href="">
                                        <span style="color: red !important">more</span>
                                    </a>
                                </p>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Size
                            </th>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Medium</p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Medium</p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Medium</p>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Color
                            </th>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Silver</p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Silver</p>
                            </td>
                            <td class="blklt-clr" style="vertical-align: middle !important">
                                <p>Silver</p>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <th class="compare-label blk-clr"
                                style="vertical-align: middle !important;background: #edebeb;padding: 25px;">
                                Action
                            </th>
                            <td class="blklt-clr action" style="vertical-align: middle !important">
                                <a href="" onclick="return confirm('Are you sure want to delete this data?')"
                                    title="" style="padding: 3px 3px 3px 3px">
                                    <i class="fa fa-close"></i>
                                </a>
                            </td>
                            <td class="blklt-clr action" style="vertical-align: middle !important">
                                <a href="" onclick="return confirm('Are you sure want to delete this data?')"
                                    title="" style="padding: 3px 3px 3px 3px">
                                    <i class="fa fa-close"></i>
                                </a>
                            </td>
                            <td class="blklt-clr action" style="vertical-align: middle !important">
                                <a href="" onclick="return confirm('Are you sure want to delete this data?')"
                                    title="" style="padding: 3px 3px 3px 3px">
                                    <i class="fa fa-close"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{{-- Compare List  --}}




@endsection
