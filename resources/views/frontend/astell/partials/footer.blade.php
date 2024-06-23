<footer>
    @php
        $site = App\Models\Sites::find(1);
    @endphp
    <div class="wrap">
        
        <div class="inner">
            <a class="logo__link" href="{{ route('index') }}"><img class="" style="width: 100px;"
                src="{{ asset('upload/logo_white/' . $site->logo_white) }}" alt=""></a>

            <a href="{{ route('template.two.contact') }}">Contact Us</a>
            <a href="{{ route('template.two.faq') }}">Faq</a>
            <a href="javascript:;">Buying Guide</a>
            <p>
                {{ $site->address }}
            </p>
        </div>
        <div class="inner2">
            <a href="{{ $site->instagram_url }}" target="_blank" class="insta"></a>
            <a href="{{ $site->facebook_url }}" target="_blank" class="facebook"></a>
            <a href="{{ $site->youtube_url }}" target="_blank" class="youtube"></a>
        </div>
    </div>
</footer>
