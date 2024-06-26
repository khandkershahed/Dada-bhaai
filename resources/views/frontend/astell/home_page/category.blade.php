<style>
    .product__slider-main {
        margin-bottom: 15px;
    }

    .product__slider-main img {
        margin: 0 auto;
    }

    .product__slider-thmb .slick-slide {
        opacity: 0.5;
        transition: all .3s ease;
    }

    .product__slider-thmb .slick-slide.slick-active,
    .product__slider-thmb .slick-slide:hover {
        opacity: 1;
    }

    .product__slider-main,
    .product__slider-thmb {
        display: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            asdasd
        </div>
        <div class="col-lg-6">
            asdasdas
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="product__slider" class="row">
                <div class="product__slider-main col-lg-6">
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                </div>
                <div class="product__slider-thmb col-lg-6">
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                    <div class="slide"><img src="http://dummyimage.com/300" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')

@endsection
