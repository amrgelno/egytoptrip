<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="{{ asset('Front/JS/jquery-1.11.0.min.js') }}" type="text/javascript" defer></script>
    <link rel="stylesheet" href="{{ asset('Front/css/lightbox.css') }}">
    <script src="{{ asset('Front/JS/lightbox.min.js') }}" type="text/javascript" defer></script>
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <title>Website gallery</title>
</head>

<style>
    div {
        position: relative;
    }


    input[type="text"] {
        width: fit-content;
        box-shadow: inset 0px -1px 0px 0px hsl(236, 32%, 26%);
        color: Black;
        font-size: inherit;
        font-family: inherit;
        /* background-color: hsl(236, 32%, 26%); */
        padding: 0.35em 0.45em;
        border: 1px solid transparent;
        transition: background-color 0.3s ease-in-out;
    }

    input[type="text"]:focus {
        outline: none;

    }

    input[type="text"]::placeholder {
        color: Black;
    }

    span {
        position: absolute;
        background-color: hsl(236, 32%, 26%);
        transition: transform 0.5s ease;
    }

    .bottom,
    .top {
        height: 1px;
        left: 0;
        right: 0;
        transform: scaleX(0);
    }

    .left,
    .right {
        width: 1px;
        top: 0;
        bottom: 0;
        transform: scaleY(0);
    }

    .bottom {
        bottom: 0;
        transform-origin: bottom right;
    }

    input[type="text"]:focus~.bottom {
        transform-origin: bottom left;
        transform: scaleX(1);
    }

    .right {
        right: 0;
        transform-origin: top right;
    }

    input[type="text"]:focus~.right {
        transform-origin: bottom right;
        transform: scaleY(1);
    }

    .top {
        top: 0;
        transform-origin: top left;
    }

    input[type="text"]:focus~.top {
        transform-origin: top right;
        transform: scaleX(1);
    }

    .left {
        left: 0;
        transform-origin: bottom left;
    }

    input[type="text"]:focus~.left {
        transform-origin: top left;
        transform: scaleY(1);
    }


    input[type="text"]:focus {
        box-shadow: unset;
    }
</style>



<body>

    @if (isset($_GET['update_Media']))

        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Website gallery :You can update photo on Your gallery
                        </h3>
                    </div>

                    <form action="{{ route('gallery.update', $gallery_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <div class="card-body">


                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Media title </label>
                                        <div>
                                            <input type="text" class="form-control" value="" name="Mediatitle"
                                                placeholder="Enter your  Pic Title">
                                            @include('Admin.Auth.inputeffect')
                                        </div>
                                    </div>
                                </div>

                                <br />

                                <div class="col-7">
                                    <div class="form-group">
                                        <label class="input-group-text" for='PicDescription'>PicDescription:-
                                        </label>
                                        <textarea class="form-control" name="PicDescription" id="PicDescription" placeholder="وصف الصورة" required>
                                                   </textarea>
                                    </div>
                                </div>



                                <br />

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">gallery picture: </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="gallerypicture">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>

                                            <br />

                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button value="حفظ" name="save" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Website gallery :You can insert more photo to Your gallery


                            </h3>
                        </div>

                        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-7">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Media title </label>
                                            <input type="text" class="form-control" value="" name="Mediatitle"
                                                placeholder="Enter your  Pic Title">
                                        </div>
                                    </div>

                                    <br />

                                    <div class="col-7">
                                        <div class="form-group">
                                            <label class="input-group-text" for='PicDescription'>PicDescription:-
                                            </label>
                                            <textarea class="form-control" name="PicDescription" id="PicDescription" placeholder="وصف الصورة" required>
                                               </textarea>
                                        </div>
                                    </div>



                                    <br />

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">gallery picture: </label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="exampleInputFile" name="gallerypicture">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>

                                                <br />

                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button value="حفظ" name="save" type="submit"
                                    class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>



        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th> ID </td>
                            <th>title </th>
                            <th> Description </th>
                            <th> pic </th>
                            <th> Update </th>
                            <th> DELETE</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($gallery as $galleryitem)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td> {{ $galleryitem->title }}</td>
                                <td> {{ $galleryitem->Description }}</td>
                                <td>

                                    <a href="../../Front/IMG/{{ $galleryitem->pic }}" data-lightbox="image-1"
                                        data-title="My caption">

                                        <img src="../../Front/IMG/{{ $galleryitem->pic }}"
                                            style="width:50px; height:50px;" /> </a>
                                </td>

                                <td>

                                    <form action="{{ route('gallery.show', $galleryitem->id) }}" method="GET">
                                        @csrf
                                        @method('GET')

                                        <input type='submit' name='update_Media' value='Update'>

                                    </form>

                                </td>

                                <td>
                                    <form action="{{ route('gallery.destroy', $galleryitem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type='submit' value='DELETE'>

                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <!--<div class="card-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">View
            All
            Orders</a>
    </div>
</div>-->

        {{ $gallery->render('Admin.Auth.paginate') }}

    @endif

    <script src="{{ asset('Front/JS/adminlte.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/jquery-1.11.0.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" defer></script>
    {{-- <script>
        $(function() {
            // Summernote
            $('#PicDescription').summernote()
        });
    </script> --}}
</body>

</html>
