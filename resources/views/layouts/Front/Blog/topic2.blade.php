{{-- <section class="section-padding section-bg" id="section_2"> --}}

@php   $i=0;   @endphp


@foreach ($topic as $topicitem)
    @if ($topicitem->Topic_style == 'Article')
        <section class="section-padding section-bg">

            <div class="container">

                @include('layouts.Front.page_Editor.topic')

                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="Front\IMG\{{ $topicitem->ImageName }}" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>


                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                {!! $topicitem->subject !!}
                            @elseif($_GET['lang'] == 'ar')
                                {!! $topicitem->Ar_subject !!}
                            @endif


                            <p class="mb-0">
                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                    {!! $topicitem->content !!}
                                @elseif($_GET['lang'] == 'ar')
                                    {!! $topicitem->Ar_content !!}
                                @endif
                            </p>
                        </div>



                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">


                                    @include('layouts.Front.page_Editor.paragraph')


                                    @foreach ($paragraph as $paragraphitem)
                                        @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                            {!! $paragraphitem->Paragraph !!}
                                        @elseif($_GET['lang'] == 'ar')
                                            {!! $paragraphitem->Ar_paragraph !!}
                                        @endif
                                    @endforeach




                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">


                                    @include('layouts.Front.page_Editor.static')

                                    @foreach ($static as $staticitem)
                                        <div class="counter-thumb mt-4">
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1"
                                                    data-to="{{ $staticitem->SNumber_Num }}" data-speed="1000">
                                                    {{ $staticitem->SNumber_Num }}</span>
                                                <span class="counter-number-text">{{ $staticitem->symbol }}</span>
                                            </div>

                                            <span class="counter-text">

                                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                    {{ $staticitem->title }}
                                                @elseif($_GET['lang'] == 'ar')
                                                    {{ $staticitem->Ar_title }}
                                                @endif


                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
@endforeach
