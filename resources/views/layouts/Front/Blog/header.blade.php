<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">

                    @foreach ($Maxcompanyid as $Maxid)
                        <i class="bi-geo-alt me-2"></i>
                        {{ $Maxid->Address }}<span>,</span> {{ $Maxid->city }} <span>,</span>{{ $Maxid->country }}
                </p>
                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:{{ $Maxid->Email }}">
                        {{ $Maxid->Email }}
                    </a>
                    @endforeach
                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">
                    @foreach ($social as $allitem)
                        <li class="social-icon-item">
                            <a href="#{{ $allitem->links }}" class="{{ $allitem->social_icon }}"></a>
                        </li>
                    @endforeach


                </ul>
            </div>

        </div>
    </div>
</header>
