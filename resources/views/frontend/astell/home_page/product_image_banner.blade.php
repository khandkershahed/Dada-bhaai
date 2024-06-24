<section class="brand-story scrollAni n2">
    <h2>
        We believe <strong>that</strong> is the center of music
    </h2>
    <ul>

        <li>
            <a
                href="{{ url('product/dadabhaai' . '/' . $homepage->featureProductOne->id . '/' . $homepage->featureProductOne->product_slug) }}">
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
            <a
                href="{{ url('product/dadabhaai' . '/' . $homepage->featureProductTwo->id . '/' . $homepage->featureProductTwo->product_slug) }}">
                <div class="bg"
                    style="background-image: url('{{ asset($homepage->featureProductTwo->product_image) }}');">
                </div>
                <div class="inner bg-shadow">
                    <p class="font-white">{{ $homepage->featureProductTwo->product_name }}</p>
                    <strong class="font-white">{{ $homepage->featureProductTwo->category->category_name }}</strong>
                </div>
            </a>
        </li>

        <li>
            <a
                href="{{ url('product/dadabhaai' . '/' . $homepage->featureProductThree->id . '/' . $homepage->featureProductThree->product_slug) }}">
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
            <a
                href="{{ url('product/dadabhaai' . '/' . $homepage->featureProductFour->id . '/' . $homepage->featureProductFour->product_slug) }}">
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
