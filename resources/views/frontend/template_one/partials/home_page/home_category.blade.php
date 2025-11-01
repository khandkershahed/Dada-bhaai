@php
    use Illuminate\Support\Facades\File;

    $products = App\Models\Admin\Product::where('status', 1)->latest()->get();
    $noCategoryImage = asset('img/no-image.png'); // fallback image
@endphp

<div class="top__featured--area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 slider-category">
                <div class="top__featured--title">
                    <span class="dusty__gray-color text-uppercase">Top Featured</span>
                    <h3 class="pure__black-color mb-120">
                        <span class="f-300">Discover Top</span>
                        <span class="f-800">Categories</span>
                    </h3>
                </div>
            </div>
            <div class="col-xl-10">
                <div class="categories-active row position-relative">
                    @forelse ($categories as $category)
                        <div class="single-categories col-sm-12">
                            <div class="categories-box position-relative">
                                <div class="categories-thumb">
                                    <a href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                        <img class="border img-fluid"
                                             src="{{ $category->image_url }}"
                                             style="width: 100%; height: 275px; object-fit: cover;"
                                             alt="{{ $category->category_name }}">
                                    </a>
                                    <h6 class="f-800 pure__black-color cate-title">
                                        <a href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">
                                            {{ $category->category_name }}
                                        </a>
                                    </h6>
                                </div>
                                <div class="category-products">
                                    @foreach ($category->products as $product)
                                        <p>{{ $product->name }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-danger">No Category Available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
