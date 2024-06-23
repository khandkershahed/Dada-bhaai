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
    @foreach ($categories as $key => $category)
        <div
            class="tab-cont n{{ $key }} {{ $loop->first ? 'on' : '' }}"style="background-image: url('images/%40p_bg01.png')">

            <div class="wrap">
                <div class="wl">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            @foreach ($category->products as $image)
                                <li class="swiper-slide">
                                    <a href="">
                                        <img src="{{ asset($image->product_image) }}"
                                            alt="{{ $image->product_name }}" />
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                <div class="wr">
                    @foreach ($category->products as $key => $product)
                        <strong class="tmpProductInfo tmpProductInfo_0"
                            {{ $loop->first ? '' : 'style=display:none;' }}>{{ $product->product_name }}</strong>

                        <p class="tmpProductInfo tmpProductInfo_0" {{ $loop->first ? '' : 'style=display:none;' }}>
                            The A&amp;ultima SP3000 is the flagship product that is the
                            essence of everything learned and engineered over the last 10+
                            years of digital music processing.
                        </p>

                        <div class="btn-group tmpProductInfo tmpProductInfo_0"
                            {{ $loop->first ? '' : 'style=display:none;' }}>
                            <a href="{{ url('product-single' . '/' . $product->id) }}" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="1.png" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="2.png" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="iF_23.jpg" />
                                <img src="https://i.ibb.co/Tbdf3yk/20221109162717-caaf539d-336d-4eff-90b1-e9711f8f4af1.png"
                                    alt="2023vgp.png" />
                            </div>
                        </div>
                    @endforeach

                    {{-- <strong class="tmpProductInfo tmpProductInfo_1">SP2000T</strong>

                    <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                        The SP2000T combines the OP AMP configuration of our SP2000
                        with a nostalgic vacuum TUBE AMP, adding a vintage feel to the
                        portable player.
                    </p>

                    <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                        <a href="" class="lnk-ty1">Find store</a>
                        <div class="mark-group">
                            <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                alt="RED_2022.jpg" />
                            <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                alt="iF_GoldAward2022_gold_l_RGB.jpg" />
                        </div>
                    </div> --}}


                    <div class="list">

                        <div class="swiper-container">

                            <ul class="swiper-wrapper">

                                @foreach ($category->products as $key => $image)
                                    <li class="swiper-slide">
                                        <a href="javascript:;" class="{{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset($image->product_image) }}" alt="sp3000_list_1.png" />
                                            <span>SP3000</span>
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
    @endforeach
    

</section>
