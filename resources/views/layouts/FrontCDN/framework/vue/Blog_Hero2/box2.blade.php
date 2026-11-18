@php   $i=0;   @endphp


@foreach ($box as $boxitem)
    @if ($boxitem->BOX_STYLE == 'BOXModel1' && $loop->iteration <= 1)
        <section class="section-padding">

            @include('layouts.Front.page_Editor.box2')


            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">


                        @if (!empty($boxitem->cat_Name))
                            <h2>

                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                    {!! $boxitem->cat_Name !!}
                                @elseif($_GET['lang'] == 'ar')
                                    {!! $boxitem->Ar_cat_Name !!}
                                @endif

                            </h2>
                        @endif

                    </div>


                    @foreach ($box as $boxitem)
                        @if ($boxitem->BOX_STYLE == 'BOXModel1')
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block-wrap">
                                    <img src="Front/IMG/{{ $boxitem->ImageName }}" class="custom-block-image img-fluid"
                                        alt="">

                                    <div class="custom-block">
                                        <div class="custom-block-body">


                                            <h5 class="mb-3">
                                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                    {{ $boxitem->title }}
                                                @elseif($_GET['lang'] == 'ar')
                                                    {{ $boxitem->Ar_title }}
                                                @endif
                                            </h5>

                                            <p>
                                                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                                    {{ $boxitem->Desc }}
                                                @elseif($_GET['lang'] == 'ar')
                                                    {{ $boxitem->Ar_Desc }}
                                                @endif
                                            </p>

                                            <div class="progress mt-4">
                                                <div class="progress-bar w-{{ $boxitem->progressbarstyle }}"
                                                    role="progressbar" aria-valuenow="{{ $boxitem->progressbarstyle }}"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-2">
                                                <p class="mb-0">
                                                    <strong>Raised:</strong>
                                                    ${{ $boxitem->price }}
                                                </p>

                                                <p class="ms-auto mb-0">
                                                    <strong>Goal:</strong>
                                                    ${{ $boxitem->price1 }}
                                                </p>
                                            </div>
                                        </div>

                                        <a href="index.php?Donate='Donate" class="custom-btn btn">Donate now</a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    @endif
@endforeach
