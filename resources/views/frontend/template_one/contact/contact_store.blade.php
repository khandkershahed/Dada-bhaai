@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <section class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d387193.30602252256!2d-74.25987168979924!3d40.69714940431937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1593511321262!5m2!1sen!2sbd"
            style="height: 400px"></iframe>
    </section>
    <!-- contact google map end -->

    <!-- contact area start -->
    <section class="contact-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">

                    <div class="contact-form">
                        <h4 class="title">Send A Message</h4>

                        <form action="{{ route('template_one.contact.store') }}" method="POST">

                            @csrf

                            @if (session('status'))
                                <div class="text-success" role="alert">
                                    {{ session('status') }}

                                </div>
                            @elseif (session('error'))
                                <div class="text-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="row">

                                <div class="col-6">
                                    <input type="text" name="name" class="@error('name') is-invalid @enderror"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror"
                                        placeholder="Email Address">
                                    @error('email')
                                        <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <input type="text" name="subject" class="@error('subject') is-invalid @enderror"
                                        placeholder="Name Of Subject">

                                    @error('subject')
                                        <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <textarea name="message" class="@error('message') is-invalid @enderror" placeholder="Desciption"></textarea>
                                    @error('message')
                                        <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit">Submit</button>

                        </form>

                    </div>
                </div>

                <div class="col-xl-4 offset-xl-1 col-lg-5">
                    <div class="contact-text">
                        <div class="single-text mb-30">
                            <i class="icofont-telephone"></i>
                            <h5>Contact customer service</h5>
                            <p>Need assistance? Our customer service is here to
                                assist you Monday through Friday from
                                9 am EST to 10 pm EST.</p>
                            <h5>{{ $sites->phone_two }}</h5>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact area end -->
@endsection
