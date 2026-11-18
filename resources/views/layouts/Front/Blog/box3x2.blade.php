<section class="carousel carousel-fade slide news-section section-padding">

    @include('layouts.Front.page_Editor.box3')

    <div class="col-lg-12 col-12 mb-5">
        <h5 class="mt-5 mb-3">

            @foreach ($box as $boxitem)
                @if ($boxitem->BOX_STYLE == 'BoxModel3')
                    @if (!empty($boxitem->cat_Name))
                        <h2>

                            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                {!! $boxitem->cat_Name !!}
                            @elseif($_GET['lang'] == 'ar')
                                {!! $boxitem->Ar_cat_Name !!}
                            @endif

                        </h2>
                    @endif
                @endif
            @endforeach

        </h5>

    </div>
    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-11">



                        <div class="carousel-inner">

                            @foreach ($boxMin as $MinItem)
                                <section class="carousel-item about-section section-padding">

                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-5 col-12">
                                                <img src="Front\IMG\{{ $MinItem->ImageName }}"
                                                    class="about-image ms-lg-auto bg-light shadow-lg img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-5 col-md-7 col-12">
                                                <div class="custom-text-block">

                                                    <h1>

                                                        @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                            {{ $MinItem->title }}
                                                        @elseif($_GET['lang'] == 'ar')
                                                            {{ $MinItem->Ar_title }}
                                                        @endif
                                                    </h1>


                                                    <p>

                                                        @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                            {{ $MinItem->Desc }}
                                                        @elseif($_GET['lang'] == 'ar')
                                                            {{ $MinItem->Ar_Desc }}
                                                        @endif

                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            @endforeach

                            @foreach ($boxMax as $MaxItem)
                                <section class="carousel-item active about-section section-padding">


                                    <div class="container">
                                        <div class="row">


                                            <div class="col-lg-6 col-md-5 col-12">
                                                <img src="Front\IMG\{{ $MaxItem->ImageName }}"
                                                    class="about-image ms-lg-auto bg-light shadow-lg img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-5 col-md-7 col-12">
                                                <div class="custom-text-block">

                                                    <h1>

                                                        @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                            {{ $MaxItem->title }}
                                                        @elseif($_GET['lang'] == 'ar')
                                                            {{ $MaxItem->Ar_title }}
                                                        @endif

                                                    </h1>

                                                    <p>

                                                        @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                            {{ $MaxItem->Desc }}
                                                        @elseif($_GET['lang'] == 'ar')
                                                            {{ $MaxItem->Ar_Desc }}
                                                        @endif

                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            @endforeach

                            <div class="col-md-1">

                                <ol class="carousel-indicators" style='flex-direction: column; top: 169px;'>


                                    @foreach ($boxMin as $MinItem)
                                        <li data-bs-target="#testimonial-carousel"
                                            data-bs-slide-to="{{ $MinItem->ID - $boxMinID }}" class=""
                                            style='width:20px; height:27px;    list-style: circle;'>


                                        </li>
                                    @endforeach

                                    @foreach ($boxMax as $MaxItem)
                                        <li data-bs-target="#testimonial-carousel"
                                            data-bs-slide-to="{{ $MaxItem->ID - $boxMinID }}" class="active"
                                            aria-current="true"
                                            style='width:20px;  height:27px;  list-style: circle;  '>


                                        </li>
                                    @endforeach


                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
