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
                        <ul>
                            @foreach ($faqs as $key => $faq)
                                <li>
                                    <div value="312" class="cont-top">
                                        <span class="num">{{ $key+1 }}</span>
                                        <span class="t1">{{ $faq->category }}</span>
                                        <div class="t2">
                                            {{ $faq->question }}
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <ul class="file-ty">
                                        </ul>
                                        <div class="edit">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </section>
    </form>
@endsection
