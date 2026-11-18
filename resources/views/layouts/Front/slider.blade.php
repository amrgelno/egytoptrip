@foreach ($sliderMin as $MinItem)
    <div class="col-lg-12 col-12 p-0">

        @include('layouts.Front.page_Editor.slider')

        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliderMin as $MinItem)
                    <div class="carousel-item active">
                        <img src="Front/IMG/{{ $MinItem->ImageName }}" class="carousel-image img-fluid" alt="...">

                        <div class="carousel-caption d-flex flex-column justify-content-end" style='min-width: 20px;'>


                            {!! $MinItem->title !!}

                            @foreach ($Maxcompanyid as $Maxid)
                                <br />
                                <span>
                                    <img src="Front/IMG/{{ $Maxid->path_pic }}" class="logo img-fluid"
                                        alt="{{ $Maxid->Comp_Name }}">

                                    {{ $Maxid->Comp_Name }}
                                    <small>{{ $Maxid->Business }}</small>
                                </span>
                            @endforeach


                        </div>
                    </div>
                @endforeach


                @foreach ($sliderMax as $MaxItem)
                    <div class="carousel-item">
                        <img src="Front/IMG/{{ $MaxItem->ImageName }}" class="carousel-image img-fluid" alt="...">





                        <div class="carousel-caption d-flex flex-column justify-content-end" style='min-width: 20px;'>


                            {!! $MinItem->title !!}
                            @foreach ($Maxcompanyid as $Maxid)
                                <br />
                                <span>
                                    <img src="Front/IMG/{{ $Maxid->path_pic }}" class="logo img-fluid"
                                        alt="{{ $Maxid->Comp_Name }}">

                                    {{ $Maxid->Comp_Name }}
                                    <small>{{ $Maxid->Business }}</small>
                                </span>
                            @endforeach


                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
@endforeach
