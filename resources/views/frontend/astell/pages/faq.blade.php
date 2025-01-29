@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    {{-- <section>
        <div class="contact-group">
            <div class="visual">
                <h2>FAQ</h2>
                <p>Have some question? We are here to help!</p>
            </div>

        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="sub-tit">FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div id="accordion" class="accordion w-100">
                    <div class="card mb-0">
                        @foreach ($faqs as $key => $faq)
                            <div class="card-header {{ $key == 0 ? '' : 'collapsed' }}" data-toggle="collapse"
                                href="#collapse{{ $key }}">
                                <a class="card-title">
                                    {{ $key + 1 }}. {{ $faq->question }}
                                </a>
                            </div>
                            <div id="collapse{{ $key }}" class="card-body collapse {{ $key == 0 ? 'show' : '' }}"
                                data-parent="#accordion">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="faq-section">
        <div class="fa-bg-box">
            <img src="{{ asset('img/pattern-background.png') }}" class="bg-img" alt="Background">
            <div class="faq-content">
                <h1 class="faq-title">FAQs</h1>
                <div class="faq-breadcrumbs">
                    <ul>
                        <li><a href="/"><i class="fa-solid fa-home text-danger"></i> Home</a></li>
                        <li><a href="/"><i class="fa-solid fa-home text-danger"></i> Two</a></li>
                        <li class="text-danger">Faqs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center faq-top" style="background-image: url({{ asset(path: 'img/faqs.webp') }});">
                        <h1 class="faq-top__title pt-5">Have Any Question?</h1>
                        <div>
                            <form action="#" class="faq-search">
                                <input type="text" class="faq-search__input form-field"
                                    placeholder="Search Questions...">
                                <button class="faq-search__btn"><i class="fa-solid fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="faq-options">
                        <div class="faq-head">
                            <h4>Shopping Questions</h4>
                            <span class="faq-head__border"></span>
                        </div>
                        <div>
                            <div class="accordion-single js-acc-single">
                                @foreach ($faqs as $key => $faq)
                                    <div class="accordion-single-item js-acc-item">
                                        <h2 class="accordion-single-title js-acc-single-trigger">{{ $key + 1 }}.
                                            {{ $faq->question }}</h2>
                                        <div class="accordion-single-content">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            const accSingleTriggers = document.querySelectorAll('.js-acc-single-trigger');

            accSingleTriggers.forEach(trigger => trigger.addEventListener('click', toggleAccordion));

            function toggleAccordion() {
                const items = document.querySelectorAll('.js-acc-item');
                const thisItem = this.parentNode;

                items.forEach(item => {
                    if (thisItem == item) {
                        thisItem.classList.toggle('is-open');
                        return;
                    }
                    item.classList.remove('is-open');
                });
            }
        </script>
    @endpush
@endsection
