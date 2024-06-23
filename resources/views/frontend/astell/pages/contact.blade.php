@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <section>
        <div class="contact-group">
            <div class="visual">
                <h2>Contact Us</h2>
                <p>Have some question? We are here to help!</p>
            </div>

            <div class="cont">
                <strong>Get in touch with us</strong>

                @php
                    $site = App\Models\Sites::find(1);
                @endphp

                <ul>
                    <li style="width: 30%;">
                        <div class="inner">
                            <img src="https://www.astellnkern.com/system/download.jsp?type=contact_us&subType=&filename=20211012210345_e1580537-86b0-46f2-b331-d40ebf2eda65.png&name=i_contact1.png"
                                alt="i_contact1.png">
                            {{ $site->address }}
                        </div>
                    </li>
                    <li style="width: 35%;    margin-right: 12px;">
                        <div class="inner">
                            <img src="https://www.astellnkern.com/system/download.jsp?type=contact_us&subType=&filename=20211012210345_526a13bd-5f85-44de-82d4-59bb85cbd7ce.png&name=i_contact3.png"
                                alt="i_contact3.png">
                                {{ $site->contact_email }}
                        </div>
                    </li>
                    <li style="width: 30%;">
                        <div class="inner">
                            <img src="https://www.astellnkern.com/system/download.jsp?type=contact_us&subType=&filename=20211012210345_526a13bd-5f85-44de-82d4-59bb85cbd7ce.png&name=i_contact3.png"
                                alt="i_contact3.png">
                                {{ $site->phone_one }}
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{ route('template.two.contact.store') }}" method="POST">
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

                            <div class="row px-4 py-5">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            style="padding: 0.875rem .75rem;" name="name" placeholder="Enter Your Name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            style="padding: 0.875rem .75rem;" name="email" placeholder="Enter Your Email">

                                        @error('email')
                                            <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            style="padding: 0.875rem .75rem;" name="phone" placeholder="Enter Your Phone">

                                        @error('phone')
                                            <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Subject</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                            style="padding: 0.875rem .75rem;" name="subject"
                                            placeholder="Enter Your Subject">

                                        @error('subject')
                                            <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Message</label>
                                        <textarea class="form-control @error('subject') is-invalid @enderror" style="padding: 0.875rem .75rem;" rows="5"
                                            placeholder="Leave a comment here" id="floatingTextarea2" name="message"></textarea>
                                        @error('subject')
                                            <div class="text-danger" style="padding-top: -10px;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="pt-3">
                                        <button class="btn btn-outline-primary py-3 px-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrap">
        </div>
    </section>
@endsection
