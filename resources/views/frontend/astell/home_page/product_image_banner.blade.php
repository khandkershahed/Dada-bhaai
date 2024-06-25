@if (
    !empty($homepage->featureProductOne) ||
        !empty($homepage->featureProductTwo) ||
        !empty($homepage->featureProductThree) ||
        !empty($homepage->featureProductFour))
        
    <section class="brand-story scrollAni n2">
        <h2>
            We believe <strong>that</strong> is the center of music
        </h2>
        <ul>

            <li>
                <a
                    href="{{ url('product' . '/' . $homepage->featureProductOne->id . '/' . $homepage->featureProductFour->product_slug) }}">
                    <div class="bg"
                        style=" background-image: url('{{ asset($homepage->featureProductOne->product_image) }}');">
                    </div>

                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductOne->product_name }}</p>
                        <strong
                            class="font-white">{{ optional($homepage->featureProductOne->category)->category_name }}</strong>
                    </div>

                </a>
            </li>

            <li>
                <a
                    href="{{ url('product' . '/' . $homepage->featureProductTwo->id . '/' . $homepage->featureProductFour->product_slug) }}">
                    <div class="bg"
                        style="background-image: url('{{ asset($homepage->featureProductTwo->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductTwo->product_name }}</p>
                        <strong
                            class="font-white">{{ optional($homepage->featureProductTwo->category)->category_name }}</strong>
                    </div>
                </a>
            </li>

            <li>
                <a
                    href="{{ url('product' . '/' . $homepage->featureProductThree->id . '/' . $homepage->featureProductFour->product_slug) }}">
                    <div class="bg"
                        style="background-image: url('{{ asset($homepage->featureProductThree->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductThree->product_name }}</p>
                        <strong
                            class="font-white">{{ optional($homepage->featureProductThree->category)->category_name }}</strong>
                    </div>
                </a>
            </li>

            {{-- {{ url('product' . '/' . $homepage->featureProductFour->id . '/' . $$homepage->featureProductFour->product_slug->product_slug) }} --}}

            <li>
                <a
                    href="{{ url('product' . '/' . $homepage->featureProductFour->id . '/' . $homepage->featureProductFour->product_slug) }}">

                    <div class="bg"
                        style="background-image: url('{{ asset($homepage->featureProductFour->product_image) }}');">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">{{ $homepage->featureProductFour->product_name }}</p>
                        <strong
                            class="font-white">{{ optional($homepage->featureProductFour->category)->category_name }}</strong>
                    </div>
                </a>
            </li>

        </ul>
    </section>
@endif
