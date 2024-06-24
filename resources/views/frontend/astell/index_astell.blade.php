@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <main class="main">

        {{--  @include('frontend.astell.home_page.category') --}}

        {{-- Home Video Section Start  --}}
        @include('frontend.astell.home_page.home_video')
        {{-- Home Video Section End  --}}

        {{-- Image Banner Section Start  --}}
        @include('frontend.astell.home_page.image_banner')
        {{-- Image Banner Section End  --}}

        {{-- Category Section Start  --}}

        {{-- Category Section End  --}}


        {{-- Product Image Section Start  --}}
        @include('frontend.astell.home_page.product_image_banner')
        {{-- Product Image Section End  --}}

        {{-- Home Page Banner Section Start  --}}
        @include('frontend.astell.home_page.banner')
        {{-- Home Page Banner Section End  --}}

    </main>
@endsection
