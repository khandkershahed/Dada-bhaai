@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
<<<<<<< HEAD
    <main class="main">

        {{--  @include('frontend.astell.home_page.category') --}}
=======
    {{--
    @include('frontend.astell.home_page.image_banner')
>>>>>>> 66560139fcefb9dd5af3be83bba56c362e6605c2

        {{-- Home Video Section Start  --}}
        @include('frontend.astell.home_page.home_video')
        {{-- Home Video Section End  --}}

<<<<<<< HEAD
        {{-- Image Banner Section Start  --}}
        @include('frontend.astell.home_page.image_banner')
        {{-- Image Banner Section End  --}}


        {{-- <section class="product">
            <div class="tab-ty">
                <ul>
                    @foreach ($categories as $key => $category)
                        <li>
                            <a href="javascript:void(0);"
                                class="n{{ $key }} {{ $loop->first ? 'on' : '' }}">{{ $category->category_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            @forelse ($categories as $key => $category)
                <div class="tab-cont n{{ $key }} {{ $loop->first ? 'on' : '' }}"
                    style="background-image: url('images/%40p_bg01.png')">
                    <div class="wrap">

                        <div class="wl">
=======
    @include('frontend.astell.home_page.banner')
    --}}

    {{-- Home Video Section Start  --}}
    @include('frontend.astell.home_page.home_video')
    {{-- Home Video Section End  --}}

    {{-- Image Banner Section Start  --}}
    @include('frontend.astell.home_page.image_banner')
    {{-- Image Banner Section End  --}}

    <section class="product">
        <div class="tab-ty">
            <ul>
                @foreach ($categories as $key => $category)
                    <li>
                        <a href="javascript:void(0);"
                            class="n{{ $key }} {{ $loop->first ? 'on' : '' }}">{{ $category->category_name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        @forelse ($categories as $key => $category)
            <div class="tab-cont n{{ $key }} {{ $loop->first ? 'on' : '' }}"
                style="background-image: url('images/%40p_bg01.png')">
                <div class="wrap">

                    <div class="wl">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">

                                @foreach ($category->products as $image)
                                    <li class="swiper-slide">
                                        <a href="">
                                            <img src="{{ asset($image->product_image) }}" alt="{{ $image->product_name }}"
                                                style="width: 400px; height: 400px;" />
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <div class="wr">
                        @forelse ($category->products as $key => $product)
                            <strong class="tmpProductInfo tmpProductInfo_0"
                                {{ $loop->first ? '' : 'style=display:none;' }}>{{ $product->product_name }}</strong>

                            <p class="tmpProductInfo tmpProductInfo_0" {{ $loop->first ? '' : 'style=display:none;' }}>
                                {!! $product->short_desc !!}
                            </p>
                            <div class="btn-group tmpProductInfo tmpProductInfo_0"
                                {{ $loop->first ? '' : 'style=display:none;' }}>
                                <a href="" class="lnk-ty1">Find store</a>

                            </div>
                        @empty
                        @endforelse

                        <div class="list">
>>>>>>> 66560139fcefb9dd5af3be83bba56c362e6605c2
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">

                                    @foreach ($category->products as $image)
                                        <li class="swiper-slide">
                                            <a href="">
                                                <img src="{{ asset($image->product_image) }}"
                                                    alt="{{ $image->product_name }}" style="width: 400px; height: 400px;" />
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="wr">

                            @forelse ($category->products as $key => $product)
                                <strong class="tmpProductInfo tmpProductInfo_0"
                                    {{ $loop->first ? '' : 'style=display:none;' }}>{{ $product->product_name }}</strong>

                                <p class="tmpProductInfo tmpProductInfo_0" {{ $loop->first ? '' : 'style=display:none;' }}>
                                    {!! Str::words($product->short_desc, 10) !!}
                                </p>

                                <div class="btn-group tmpProductInfo tmpProductInfo_0"
                                    {{ $loop->first ? '' : 'style=display:none;' }}>
                                    <a href="" class="lnk-ty1">Find store</a>
                                </div>
                            @empty
                            @endforelse

                            <div class="list">
                                <div class="swiper-container">
                                    <ul class="swiper-wrapper">

                                        @foreach ($category->products as $key => $image)
                                            <li class="swiper-slide">
                                                <a href="javascript:;" class="{{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset($image->product_image) }}"
                                                        alt="sp3000_list_1.png" />
                                                    <span>{{ $image->product_name }}</span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-slider"></div>
                            </div>

                        </div>

                    </div>
                </div>
            @empty
            @endforelse


        </section> --}}

        {{-- Category Section Start  --}}

        {{-- Category Section End  --}}


        {{-- Product Image Section Start  --}}
        @include('frontend.astell.home_page.product_image_banner')
        {{-- Product Image Section End  --}}

        {{-- Home Page Banner Section Start  --}}
        @include('frontend.astell.home_page.banner')
        {{-- Home Page Banner Section End  --}}
    </main>
@endsection
