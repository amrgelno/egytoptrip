<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <title> Website template </title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        Website template :You can change Your website template here
                    </h3>
                </div>

                <form action="{{ route('templatesupdate') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="card-body">

                        @foreach ($template as $templateitem)
                            <div class="col-md-12">
                                <div class="radio">
                                    <label>

                                        <input name="webtemplate" type="radio" value="{{ $templateitem->id }}"
                                            @if ($templateitem->status == 'Active') checked="" @endif>
                                        <span class="circle"></span></a><span class="check"></span>

                                        {{ $templateitem->Theme_Name }}

                                    </label>
                                </div>
                            </div>
                        @endforeach

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button value="حفظ" name="save" type="submit" class="btn btn-primary">Change
                                template</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
    </div>

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
