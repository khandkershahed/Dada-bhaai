@php
    use Illuminate\Support\Facades\Storage;

    // Fetch featured products efficiently (using scopes)
    $products = App\Models\Admin\Product::active()
        ->where('feature', '1')
        ->with('brand') // eager load brand to reduce queries
        ->latest('id')
        ->take(4)
        ->get();

    $noImage = asset('img/no-image.png'); // fallback image
@endphp

@if ($products->count() > 0)
    <div class="product pt-0 feature-h-one">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 col-sm-6">
                    <div class="product-section mb-30">
                        <h6 class="product--section__title f-800 white-color grenadier-bg">
                            Featured Product
                        </h6>
                    </div>
                </div>
            </div>

            {{-- Featured Product Items --}}
            <div class="row gx-1">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-grid mb-4">
                            <div class="product-image">
                                <a href="{{ url('product/' . $product->id . '/' . $product->product_slug) }}" class="image">
                                    @php
                                        $productImage = $noImage;

                                        if (!empty($product->product_image)) {
                                            if (Storage::disk('public')->exists($product->product_image)) {
                                                $productImage = asset('storage/' . $product->product_image);
                                            } elseif (file_exists(public_path($product->product_image))) {
                                                $productImage = asset($product->product_image);
                                            }
                                        }
                                    @endphp

                                    <img src="{{ $productImage }}"
                                         alt="{{ $product->product_name }}"
                                         title="{{ $product->product_name }}"
                                         data-tip="{{ $product->product_name }}"
                                         style="width:100%; height:300px; object-fit:cover;">
                                </a>

                                <ul class="product-links">
                                    <li>
                                        <a class="add_to_wishlist" data-product_id="{{ $product->id }}" data-tip="Wishlist" style="cursor:pointer;">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="add_to_compare" data-product_id="{{ $product->id }}" data-tip="Compare" style="cursor:pointer;">
                                            <i class="fas fa-random"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-content d-flex justify-content-between align-items-center">
                                <div>
                                    <span>
                                        <a class="text-muted" href="{{ url('product/' . $product->id . '/' . $product->product_slug) }}">
                                            {{ optional($product->brand)->brand_name }}
                                        </a>
                                    </span>
                                    <h3 class="title font-weight-bold" title="{{ $product->product_name }}">
                                        <a href="{{ url('product/' . $product->id . '/' . $product->product_slug) }}">
                                            {{ \Illuminate\Support\Str::limit($product->product_name, 25) }}
                                        </a>
                                    </h3>
                                </div>

                                <div class="price font-weight-bold pr-2">
                                    @if ($product->sas_price !== null || $product->price !== null || $product->discount_price !== null)
                                        @if ($product->price_status === 'rfq' && $product->sas_price)
                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $product->sas_price }}</h6>
                                        @elseif ($product->price_status === 'offer_price' && $product->price && $product->discount_price)
                                            <del>${{ $product->price }}</del>
                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $product->discount_price }}</h6>
                                        @elseif ($product->price_status === 'price' && $product->price)
                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $product->price }}</h6>
                                        @endif
                                    @endif
                                </div>
                            </div>

                            @if ($product->sas_price || $product->price || $product->discount_price)
                                <a class="add-cart add_to_cart_btn_product" data-product_id="{{ $product->id }}" style="cursor:pointer;">
                                    Add to cart
                                </a>
                            @else
                                <a href="{{ route('template_one.contact') }}" class="add-cart">Contact Us</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
