<div id="Features" class="features section" dir='ltr'>


    @include('layouts.Front.page_Editor.box1')


    <div class="container">
        <div class="row">

            <div id="portfolio" class="our-portfolio section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                @foreach ($box as $boxitem)
                                    @if ($boxitem->BOX_STYLE == 'BOXModel2')
                                        @if (!empty($boxitem->cat_Name))
                                            <h2>


                                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                    {{ $boxitem->cat_Name }}
                                                @elseif($_GET['lang'] == 'ar')
                                                    {{ $boxitem->Ar_cat_Name }}
                                                @endif



                                            </h2>
                                        @endif
                                    @endif
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="loop owl-carousel">
                                @foreach ($box as $boxitem)
                                    @if ($boxitem->BOX_STYLE == 'BOXModel2')
                                        <div class="item">

                                            <div class="portfolio-item">
                                                <div class="thumb">
                                                    <img src="./Front/IMG/{{ $boxitem->ImageName }}" alt="">
                                                    <div class="hover-content">
                                                        <div class="inner-content">
                                                            <a href="#">
                                                                <h4>


                                                                    @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                                        {{ $boxitem->Desc }}
                                                                    @elseif($_GET['lang'] == 'ar')
                                                                        {{ $boxitem->Ar_Desc }}
                                                                    @endif

                                                                </h4>
                                                            </a>
                                                            <span>

                                                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                                    {{ $boxitem->title }}
                                                                @elseif($_GET['lang'] == 'ar')
                                                                    {{ $boxitem->Ar_title }}
                                                                @endif

                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
