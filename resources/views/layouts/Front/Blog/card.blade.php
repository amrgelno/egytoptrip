<div class="row">

    @foreach ($box as $boxitem)
        @if (!empty($boxitem->cat_Name))
            @if ($boxitem->BOX_STYLE == 'BoxModel4')
                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">{{ $boxitem->cat_Name }}</h2>
                </div>
            @endif
        @endif
    @endforeach

    @foreach ($box as $boxitem)
        @if ($boxitem->BOX_STYLE == 'BoxModel4')
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="Front/IMG/{{ $boxitem->ImageName }}" class="featured-block-image img-fluid"
                            alt="{{ $boxitem->title }}">

                        <p class="featured-block-text">
                            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                {!! $boxitem->title !!}
                            @elseif($_GET['lang'] == 'ar')
                                {!! $boxitem->Ar_title !!}
                            @endif
                        </p>
                    </a>
                </div>
            </div>
        @endif
    @endforeach


</div>
