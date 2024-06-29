<section class="product">
    <div class="tab-ty">
        <ul>
            @if (count($homepage->categoryHomeTabOne->products) > 0)
                <li>
                    <a href="javascript:void(0);" class="n1 on">{{ $homepage->categoryHomeTabOne->category_name }}</a>
                </li>
            @endif
            @if (count($homepage->categoryHomeTabTwo->products) > 0)
                <li>
                    <a href="javascript:void(0);" class="n2">{{ $homepage->categoryHomeTabTwo->category_name }}</a>
                </li>
            @endif
            @if (count($homepage->categoryHomeTabThree->products) > 0)
                <li>
                    <a href="javascript:void(0);" class="n3">{{ $homepage->categoryHomeTabThree->category_name }}</a>
                </li>
            @endif
            @if (count($homepage->categoryHomeTabFour->products) > 0)
                <li>
                    <a href="javascript:void(0);" class="n4">{{ $homepage->categoryHomeTabFour->category_name }}</a>
                </li>
            @endif
        </ul>
    </div>

    {{-- First Category Start  --}}
    @if (count($homepage->categoryHomeTabOne->products) > 0)
        <div class="tab-cont n1 on" style="background-image: url('images/%40p_bg01.png')">
            <div class="wrap">

                <div class="wl">

                    <div class="swiper-container">

                        <ul class="swiper-wrapper">
                            @foreach ($homepage->categoryHomeTabOne->products as $category_product_one)
                                <li class="swiper-slide">

                                    <a
                                        href="{{ url('product' . '/' . $category_product_one->id . '/' . $category_product_one->product_slug) }}">

                                        <img src="{{ asset($category_product_one->product_image) }}"
                                            style="width:500px;" alt="{{ $category_product_one->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="wr">

                    @foreach ($homepage->categoryHomeTabOne->products as $key => $category_product_one)
                        <strong class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">{{ $category_product_one->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            {!! Str::limit(strip_tags($category_product_one->short_desc), 700) !!}
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">

                            <a href="{{ url('product' . '/' . $category_product_one->id . '/' . $category_product_one->product_slug) }}"
                                class="lnk-ty1">Find store</a>

                        </div>
                    @endforeach


                    <div class="list">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                @foreach ($homepage->categoryHomeTabOne->products as $key => $category_product_one)
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0)" class="active">
                                            <img src="{{ asset($category_product_one->product_image) }}"
                                                alt="{{ $category_product_one->product_name }}" />
                                            <span
                                                title="{{ $category_product_one->product_name }}">{{ Str::limit(strip_tags($category_product_one->product_name), 18) }}</span>
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
    @endif
    {{-- First Category End  --}}

    {{-- 2nd Category Start  --}}
    @if (count($homepage->categoryHomeTabTwo->products) > 0)
        <div class="tab-cont n2" style="background-image: url('images/%40p_bg01.png')">
            <div class="wrap">

                <div class="wl">

                    <div class="swiper-container">

                        <ul class="swiper-wrapper">
                            @foreach ($homepage->categoryHomeTabTwo->products as $category_product_two)
                                <li class="swiper-slide">
                                    <a
                                        href="{{ url('product' . '/' . $category_product_two->id . '/' . $category_product_two->product_slug) }}">
                                        <img src="{{ asset($category_product_two->product_image) }}"
                                            style="width:500px;" alt="{{ $category_product_two->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="wr">
                    @foreach ($homepage->categoryHomeTabTwo->products as $key => $category_product_two)
                        <strong class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">{{ $category_product_two->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            {!! Str::limit(strip_tags($category_product_two->short_desc), 700) !!}
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            <a href="{{ url('product' . '/' . $category_product_two->id . '/' . $category_product_two->product_slug) }}"
                                class="lnk-ty1">Find store</a>
                        </div>
                    @endforeach


                    <div class="list">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                @foreach ($homepage->categoryHomeTabTwo->products as $key => $category_product_two)
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0)" class="active">
                                            <img src="{{ asset($category_product_two->product_image) }}"
                                                alt="{{ $category_product_two->product_name }}" />
                                            <span
                                                title="{{ $category_product_two->product_name }}">{{ Str::limit(strip_tags($category_product_two->product_name), 18) }}</span>
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
    @endif
    {{-- 2nd Category End  --}}

    {{-- 3rd Category Start  --}}
    @if (count($homepage->categoryHomeTabThree->products) > 0)
        <div class="tab-cont n3" style="background-image: url('images/%40p_bg01.png')">
            <div class="wrap">

                <div class="wl">

                    <div class="swiper-container">

                        <ul class="swiper-wrapper">
                            @foreach ($homepage->categoryHomeTabThree->products as $category_product_three)
                                <li class="swiper-slide">
                                    <a
                                        href="{{ url('product' . '/' . $category_product_three->id . '/' . $category_product_three->product_slug) }}">
                                        <img src="{{ asset($category_product_three->product_image) }}"
                                            style="width:500px;" alt="{{ $category_product_three->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="wr">
                    @foreach ($homepage->categoryHomeTabThree->products as $key => $category_product_three)
                        <strong class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">{{ $category_product_three->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            {!! Str::limit(strip_tags($category_product_three->short_desc), 700) !!}
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            <a href="{{ url('product' . '/' . $category_product_three->id . '/' . $category_product_three->product_slug) }}"
                                class="lnk-ty1">Find store</a>
                        </div>
                    @endforeach


                    <div class="list">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                @foreach ($homepage->categoryHomeTabThree->products as $key => $category_product_three)
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0)" class="active">
                                            <img src="{{ asset($category_product_three->product_image) }}"
                                                alt="{{ $category_product_three->product_name }}" />
                                            <span
                                                title="{{ $category_product_three->product_name }}">{{ Str::limit(strip_tags($category_product_three->product_name), 18) }}</span>
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
    @endif
    {{-- 3rd Category End  --}}

    {{-- 4th Category Start  --}}
    @if (count($homepage->categoryHomeTabFour->products) > 0)
        <div class="tab-cont n4" style="background-image: url('images/%40p_bg01.png')">
            <div class="wrap">

                <div class="wl">

                    <div class="swiper-container">

                        <ul class="swiper-wrapper">
                            @foreach ($homepage->categoryHomeTabFour->products as $category_product_four)
                                <li class="swiper-slide">
                                    <a
                                        href="{{ url('product' . '/' . $category_product_four->id . '/' . $category_product_four->product_slug) }}">
                                        <img src="{{ asset($category_product_four->product_image) }}"
                                            style="width:500px;" alt="{{ $category_product_four->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="wr">
                    @foreach ($homepage->categoryHomeTabFour->products as $key => $category_product_four)
                        <strong class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">{{ $category_product_four->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            {!! Str::limit(strip_tags($category_product_four->short_desc), 700) !!}
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_{{ $key }}"
                            style="{{ $key == '0' ? '' : 'display:none;' }}">
                            <a href="{{ url('product' . '/' . $category_product_four->id . '/' . $category_product_four->product_slug) }}"
                                class="lnk-ty1">Find store</a>
                        </div>
                    @endforeach


                    <div class="list">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                @foreach ($homepage->categoryHomeTabFour->products as $key => $category_product_four)
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0)" class="active">
                                            <img src="{{ asset($category_product_four->product_image) }}"
                                                alt="{{ $category_product_four->product_name }}" />
                                            <span
                                                title="{{ $category_product_four->product_name }}">{{ Str::limit(strip_tags($category_product_four->product_name), 18) }}</span>
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
    @endif
    {{-- $th Category End  --}}

</section>
