@php
    $brands = App\Models\Brand::where('status', '1')->latest()->get();
@endphp

@if (count($brands) > 0)
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand-active">

                        @foreach ($brands as $brand)
                            <div class="single-brand">
                                <a href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                                    <img src="{{ asset('storage/brand/' . $brand->brand_image) }}"
                                    style="width: 157px; height: 56px;" alt="" />
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
