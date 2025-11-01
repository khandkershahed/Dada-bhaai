@php
    $brands = App\Models\Brand::where('status', '1')->latest()->get();
@endphp


@if ($brands->isNotEmpty())
<div class="brand bg-light py-3">
    <div class="container">
        <div class="brand-active owl-carousel">
            @foreach ($brands as $brand)
                <div class="single-brand text-center p-2">
                    <a href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                        <img class="img-fluid lazyload"
                             src="{{ asset('storage/brand/' . $brand->icon) }}"
                             alt="{{ $brand->brand_name }}"
                             loading="lazy"
                             onerror="this.onerror=null; this.src='{{ asset('https://dadabhaai.com/upload/logo_white/202406290352Dadabhaai%20Logo%20White%20Variant.png') }}';" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
$(document).ready(function(){
    $('.brand-active').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{ items:2 },
            480:{ items:3 },
            768:{ items:5 },
            992:{ items:6 },
            1200:{ items:8 }
        }
    });
});
</script>
@endpush
@endif
