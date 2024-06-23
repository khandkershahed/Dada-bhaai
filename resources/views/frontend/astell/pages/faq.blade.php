@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <section>
        <div class="contact-group">
            <div class="visual">
                <h2>FAQ</h2>
                <p>Have some question? We are here to help!</p>
            </div>

        </div>
    </section>
    <form id="tmpForm">
        <section>
            <div class="wrap">
                <h2 class="sub-tit">FAQ</h2>

                <div class="list-dropdown">
                    <div class="cont">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading{{ $key }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{ $key }}" aria-expanded="false"
                                            aria-controls="flush-collapse{{ $key }}">
                                            <span class="num pe-3">{{ $key + 1 }}</span>
                                            <span class="t1 pe-3">{{ $faq->category }}</span> {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $key }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading{{ $key }}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
