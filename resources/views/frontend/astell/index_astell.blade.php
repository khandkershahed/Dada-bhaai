@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    {{-- 

    @include('frontend.astell.home_page.image_banner')

    @include('frontend.astell.home_page.category')

    @include('frontend.astell.home_page.banner') --}}

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
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">

                                    @foreach ($category->products as $key => $image)
                                        <li class="swiper-slide">
                                            <a href="javascript:;" class="{{ $key == 0 ? 'active' : '' }}">
                                                <img src="{{ asset($image->product_image) }}" alt="sp3000_list_1.png" />
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


    </section>

    {{-- Product Image Section Start  --}}
    <section class="brand-story scrollAni n2">
        <h2>
            We believe <strong>Astell&Kern</strong> is the center of music
        </h2>
        <ul>

            <li>
                <a href="#">
                    <div class="bg"
                        style=" background-image: url('{{ asset($homepage->featureProductOne->product_image) }}');">
                    </div>

                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductOne->product_name }}</p>
                        <strong class="font-white">{{ $homepage->featureProductOne->category->category_name }}</strong>
                    </div>

                </a>
            </li>

            <li>
                <a href="#">
                    <div class="bg"
                        style="
                  background-image: url('{{ asset($homepage->featureProductTwo->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductTwo->product_name }}</p>
                        <strong class="font-white">{{ $homepage->featureProductTwo->category->category_name }}</strong>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="bg"
                        style="background-image: url('{{ asset($homepage->featureProductThree->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductThree->product_name }}</p>
                        <strong class="font-white">{{ $homepage->featureProductThree->category->category_name }}</strong>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="bg"
                        style="background-image: url('{{ asset($homepage->featureProductFour->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductFour->product_name }}</p>
                        <strong class="font-white">{{ $homepage->featureProductFour->category->category_name }}</strong>
                    </div>
                </a>
            </li>

        </ul>
    </section>
    {{-- Product Image Section End  --}}

    {{-- Home Page Banner Section Start  --}}
    @include('frontend.astell.home_page.banner')
    {{-- Home Page Banner Section End  --}}
@endsection
