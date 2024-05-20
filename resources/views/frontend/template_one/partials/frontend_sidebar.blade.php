<div class="col-lg-3 order-2 order-lg-1">
    @php
        $brands = App\Models\Brand::where('status', '1')->orderBy('brand_name', 'ASC')->latest()->limit(7)->get();

        $categorys = App\Models\Admin\Category::where('status', '1')
            ->orderBy('category_name', 'ASC')
            ->latest()
            ->limit(9)
            ->get();

    @endphp

    <div class="common-sidebar shop-banner-sidebar">
        {{-- Category  --}}
        <div class="common-cat">
            <div class="side-title">
                <h6>Category</h6>
            </div>
            {{-- Brands Accordion --}}
            <div id="accordionBrands" class="accordion">
                <div class="card border-0 shadow-none mb-0">
                    @foreach ($categorys as $category)
                        <div class="card-header mark-cat collapsed pl-0" data-toggle="collapse" data-parent="#accordion"
                            href="#cat{{ $category->id }}">
                            <a class="card-title">
                                {{ $category->category_name }}
                            </a>
                        </div>

                        <div id="cat{{ $category->id }}" class="collapse" data-parent="#accordion"
                            style="background-color: #f5f5f5;">

                            @php
                                $subcategorys = App\Models\Admin\SubCategory::where('status', '1')
                                    ->where('category_id', $category->id)
                                    ->latest()
                                    ->get();
                            @endphp

                            <div id="accordion2" class="accordion pl-3">

                                @forelse ($subcategorys as $subcategory)
                                    <div class="card border-0 shadow-none mb-0">
                                        <div class="card-header mark-sub-cat category-filter collapsed pl-0" data-toggle="collapse"
                                            data-target="#sub{{ $subcategory->id }}">
                                            <a class="card-title">
                                                {{ $subcategory->subcategory_name }}
                                            </a>
                                        </div>
                                        <div id="sub{{ $subcategory->id }}" class="collapse" data-parent="#accordion2"
                                            style="background-color: #f5f5f5;">

                                            @php
                                                $childcategorys = App\Models\Admin\ChildCategory::where('status', '1')
                                                    ->where('subcategory_id', $subcategory->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp
                                            @forelse ($childcategorys as $childcategory)
                                                <div class="card-body p-2">
                                                    <a class="marks" href="{{ url('product/childcategory/' . $childcategory->id . '/' . $childcategory->childcategory_slug) }}"
                                                        class="pl-3 text-muted">{{ $childcategory->childcategory_name }}</a>
                                                </div>
                                            @empty
                                                <p>No ChildCategory Avaiable</p>
                                            @endforelse

                                        </div>
                                    </div>
                                @empty
                                    <p>No SubCategory Avaiable</p>
                                @endforelse


                            </div>
                        </div>
                    @endforeach

                    {{-- Multi Accordion End --}}
                </div>
            </div>

        </div>
        {{-- Category  --}}


    </div>

    <div class="common-sidebar shop-banner-sidebar">
        {{-- Brand  --}}
        <div class="common-cat">
            <div class="side-title">
                <h6>Brands</h6>
            </div>
            <div>
                @forelse ($brands as $brand)
                    <div class="card brand-filter pl-0">
                        <a class="card-title mb-0" style="color: #170000 ; padding: .75rem 0rem;"
                            href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                            {{ $brand->brand_name }}
                        </a>
                    </div>
                @empty
                    <p>No Brand Avaiable</p>
                @endforelse
            </div>
        </div>
        {{-- Brand  --}}

        {{-- Tags --}}
        <div class="common-tag mt-30">
            <div class="side-title">
                <h6>Popular Tag</h6>
            </div>
            @php
                $tags = App\Models\Admin\Product::where('status', '1')
                    ->orderBy('product_name', 'ASC')
                    ->latest()
                    ->limit(7)
                    ->get();
            @endphp
            <ul class="mt-25 mb-15">
                @forelse ($tags as $tag)
                    <li><a href="javascript:;">{{ $tag->tags }}</a></li>
                @empty
                    <p class="mb-0 text-dark">No Tags Avaiable</p>
                @endforelse
            </ul>
        </div>
    </div>

</div>
