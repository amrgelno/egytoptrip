<div class="row">

    <div class="custom-block-wrap box  col-lg-11  col-xs-6">

        <div class="row">

            @foreach ($Gallery as $GalleryItem)
                <div class=" col-lg-3 col-md-2  col-xs-2 col-sm-2">
                    <a href="Front/IMG/{{ $GalleryItem->pic }} " data-lightbox="image-1" data-title="My caption">
                        <div class="imgG1"
                            style="margin: 20px 10px;  height: 161px;  background-size: cover;   background-image: url('./Front/IMG/{{ $GalleryItem->pic }}');">

                        </div>
                    </a>


                </div>
            @endforeach
        </div>

    </div>
