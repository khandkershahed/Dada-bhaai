@props(['products', 'noImage'])

<div class="product-slider owl-carousel">

    @foreach($products as $product)
        @php
            $imagePath = public_path($product->product_image);
            $imageUrl = !empty($product->product_image) && File::exists($imagePath)
                        ? asset($product->product_image)
                        : $noImage;
        @endphp

        <div class="product-card mr-3">

            {{-- Product Image --}}
            <div class="product-image position-relative">
                <a href="{{ url('product/'.$product->id.'/'.$product->product_slug) }}">
                    <img src="{{ $imageUrl }}" alt="{{ $product->product_name }}"
                         class="img-fluid" loading="lazy"
                         style="height:300px; object-fit:cover;">
                </a>

                {{-- Action Buttons --}}
                <ul class="product-links list-unstyled position-absolute top-0 end-0 m-2 d-flex flex-column gap-1">
                    <li>
                        <a class="add_to_wishlist" data-product_id="{{ $product->id }}" title="Wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                    </li>
                    <li>
                        <a class="add_to_compare" data-product_id="{{ $product->id }}" title="Compare">
                            <i class="fas fa-random"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Product Info --}}
            <div class="product-content mt-2 d-flex flex-column justify-content-between">
                <span class="brand-name text-muted">{{ optional($product->brand)->brand_name ?? 'No Brand' }}</span>

                <h3 class="product-title font-weight-bold mb-1">
                    <a href="{{ url('product/'.$product->id.'/'.$product->product_slug) }}">
                        {{ Str::limit($product->product_name, 25) }}
                    </a>
                </h3>

                <div class="price font-weight-bold mb-2">
                    @if($product->price_status === 'offer_price' && $product->discount_price)
                        <del>${{ $product->price }}</del> ${{ $product->discount_price }}
                    @elseif($product->price_status === 'price' && $product->price)
                        ${{ $product->price }}
                    @elseif($product->price_status === 'rfq' && $product->sas_price)
                        ${{ $product->sas_price }}
                    @else
                        <a href="{{ route('template_one.contact') }}">Contact Us</a>
                    @endif
                </div>

                {{-- Add to Cart Button --}}
                @if($product->sas_price || $product->price || $product->discount_price)
                    <a class="btn btn-primary add-to-cart w-100 text-center"
                       data-product_id="{{ $product->id }}">
                        Add to Cart
                    </a>
                @endif
            </div>
        </div>
    @endforeach

</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('.product-slider').each(function() {
            if (!$(this).hasClass('owl-loaded')) {
                $(this).owlCarousel({
                    loop: true,
                    margin: 15,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    responsive: {
                        0: { items: 1 },
                        480: { items: 2 },
                        768: { items: 3 },
                        992: { items: 4 },
                        1200: { items: 5 }
                    }
                });
            }
        });
    });
</script>
@endpush
