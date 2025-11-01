@php
    use Illuminate\Support\Facades\File;

    $offercats = App\Models\Admin\OfferCategory::where('status', '1')
        ->inRandomOrder()
        ->limit(2)
        ->get();

       $noImage = asset('upload/no-image.png'); // fallback image
@endphp

@if ($offercats->count() > 0)
    <div class="product pt-60 fix category-banner-product">
        <div class="container">
            <div class="row">
                @foreach ($offercats as $offercat)
                    <div class="col-lg-6">
                        <a href="{{ route('offer-categorywise.product', $offercat->id) }}"
                           title="{{ $offercat->offer_category_name }}">

                            @php
                                // Check if image exists in storage
                                $offerImagePath = 'storage/offer_category_image/' . $offercat->offer_category_image;
                                if (!empty($offercat->offer_category_image) && File::exists(public_path($offerImagePath))) {
                                    $offerImage = asset($offerImagePath);
                                } else {
                                    $offerImage = $noImage;
                                }
                            @endphp

                            <div class="offer-banner offer--banner__bg mb-30">
                                <img class="offer-banner-img img-fluid"
                                     src="{{ $offerImage }}"
                                     alt="{{ $offercat->offer_category_name }}"
                                     onerror="this.onerror=null; this.src='{{ $noImage }}';" />
                                {{-- Optional overlay text can go here --}}
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
