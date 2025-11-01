@php
    $noImage = asset('img/no-image.png');

    // Build tabs: first tab is "All Products", then categories with products
    $tabs = collect([['id' => 'all', 'name' => 'All Products']])
        ->merge(
            $categories->filter(fn($c) => $c->products->isNotEmpty())
                       ->map(fn($c) => ['id' => $c->id, 'name' => $c->category_name])
        );
@endphp

<section class="pb-20">
    <div class="container">

        {{-- Tabs: Desktop & Mobile --}}
        @foreach(['desktop','mobile'] as $view)
        <nav class="show-{{ $view }}">
            <div class="nav nav-tabs {{ $view == 'desktop' ? 'd-flex justify-content-center' : '' }}"
                 id="nav-tab" role="tablist">
                @foreach($tabs as $tab)
                    <a class="nav-item nav-link btn orange-bg-btn pure__black-color {{ $loop->first ? 'active' : '' }}"
                       id="nav-{{ $tab['id'] }}-tab"
                       data-toggle="tab"
                       href="#category-{{ $tab['id'] }}"
                       role="tab"
                       aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        {{ $tab['name'] }}
                    </a>
                @endforeach
            </div>
        </nav>
        @endforeach

        {{-- Tab Content --}}
        <div class="all__product--body">
            <div class="tab-content">

                {{-- All Products Tab --}}
                <div class="tab-pane fade show active" id="category-all" role="tabpanel">
                    <x-product-slider :products="$allProducts" :noImage="$noImage" />
                </div>

                {{-- Category-wise Tabs --}}
                @foreach($categories as $category)
                    @if($category->products->isNotEmpty())
                        <div class="tab-pane fade" id="category-{{ $category->id }}" role="tabpanel">
                            <x-product-slider :products="$category->products" :noImage="$noImage" />
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize Owl Carousel for each product slider
        $('.product-slider').each(function() {
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
        });

        // Make tabs responsive for mobile
        $('.show-mobile .nav-tabs').css({
            overflowX: 'auto',
            whiteSpace: 'nowrap'
        });
    });
</script>
@endpush
