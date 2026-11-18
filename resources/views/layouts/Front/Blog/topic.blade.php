@foreach ($topic as $topicitem)
    <section class="about-section section-padding">


        <div class="container">
            <div class="row">

                @if ($topicitem->Topic_style == 'Topic_Model1')
                    @include('layouts.Front.page_Editor.Topic1')


                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="Front\IMG\{{ $topicitem->ImageName }}"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">


                            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                {!! $topicitem->subject !!}
                            @elseif($_GET['lang'] == 'ar')
                                {!! $topicitem->Ar_subject !!}
                            @endif



                            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                {!! $topicitem->content !!}
                            @elseif($_GET['lang'] == 'ar')
                                {!! $topicitem->Ar_content !!}
                            @endif



                            <ul class="social-icon mt-4">

                                @foreach ($social as $allitem)
                                    <li class="social-icon-item">
                                        <a href="#{{ $allitem->links }}" class="{{ $allitem->social_icon }}"></a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

            </div>
        </div>
    </section>
@endif
@endforeach
