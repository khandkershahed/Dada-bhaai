<<<<<<< HEAD
<section class="product">
    <div class="tab-ty">
        <ul class="ps-0">
            @foreach ($categories as $key => $category)
                <li>
                    <a href="javascript:void(0);" class="tab-link n{{ $key + 1 }} {{ $key == 0 ? 'on' : '' }}">
                        {{ $category->category_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="tab-conts">
        @foreach ($categories as $key => $category)
            <div class="tab-cont n{{ $key + 1 }} {{ $key == 0 ? 'on' : '' }}">
                @foreach ($category->products as $product)
                    <p>{{ $product->product_name }}</p>
                @endforeach
            </div>
        @endforeach
    </div>
</section>

@section('scripts')
    <script>
        $(document).ready(function() {
            // Tab functionality
            document.querySelectorAll('.tab-ty ul li a').forEach(function(tab, index) {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove 'on' class from all tab links and tab contents
                    document.querySelectorAll('.tab-ty ul li a').forEach(function(el) {
                        el.classList.remove('on');
                    });
                    document.querySelectorAll('.tab-cont').forEach(function(el) {
                        el.classList.remove('on');
                    });

                    // Add 'on' class to clicked tab link and corresponding tab content
                    tab.classList.add('on');
                    document.querySelector('.tab-cont.n' + (index + 1)).classList.add('on');
                });
            });
        });
    </script>
@endsection
=======
>>>>>>> db50f00cedf08e5da82015652cc616b69da4317c
