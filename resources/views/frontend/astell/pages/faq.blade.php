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
                                        <span class="num">27</span>
                                        <span class="t1">A/S</span>
                                        <div class="t2">
                                            [Astell&amp;Kern] Europe RMA center in Germany
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <ul class="file-ty">
                                        </ul>
                                        <div class="edit">
                                            <div>Astell&amp;Kern official RMA center in Europe is<b>&nbsp;DM Solution</b>,
                                                which
                                                deals with enquiry&nbsp;and RMA service.</div>
                                            <div><br></div>
                                            <div>Please refer to the below information.&nbsp;</div>
                                            <div>Before enquiry, please name us exact product information such as
                                                Serial&nbsp;Number, Place of Purchase, Receipt to see the purchase date
                                                etc.&nbsp;</div>
                                            <div>The more detailed the symptom description is, the faster it can proceed.
                                            </div>
                                            <p><br>Address: &nbsp;DM Solution, Ober der Roeth 4, 65824 Schwalbach,
                                                Germany<br>Email:&nbsp;<a href="mailto:info@astellkernservice.de"
                                                    target="_blank"
                                                    style="color: rgb(17, 85, 204);">info@astellkernservice.de</a><br>Tel :
                                                +49
                                                (0)
                                                6196 / 953 573 0<br>Typical working time:&nbsp;<br>Monday to Friday&nbsp;
                                                &nbsp;09:00 ~ 17:00&nbsp; Lunch time&nbsp; 12:00 ~ 13:00</p>
                                            <div><br
                                                    style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">
                                            </div>
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
