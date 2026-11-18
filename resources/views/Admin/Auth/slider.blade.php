<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('Front/JS/jquery-1.11.0.min.js') }}" type="text/javascript" defer></script>
    <link rel="stylesheet" href="{{ asset('Front/css/lightbox.css') }}">
    <script src="{{ asset('Front/JS/lightbox.min.js') }}" type="text/javascript" defer></script>
    <link href={{ asset('Front/css/adminlte.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">

    <title>slider</title>
</head>

<style>
    table {
        border-bottom: 2px solid #5e5e5e;
        box-shadow: -2px 1px 12px 0px;
        background: lavenderblush;
        font-size: 12px;

    }


    td:hover {
        background: #a3d0d7 !important;
    }


    .trc>td {

        background: #03055a8a !important;

    }


    .trc {
        /* background: #ba510030; */
        /* background: #03055a; */
        background: #03055a8a;
        font-weight: bolder;
        color: #ddd0c2;
        font-style: italic;

    }

    li {
        list-style: none;
    }

    .odd {
        background-color: #930;
    }

    body {
        background: rgb(240 242 246);
        overflow: unset;
    }

    tr:nth-child(even) {
        background: #09C;
        color: white;
    }


    .inputNum {

        width: 42px;
    }

    tr:nth-child(even) {
        background: #21465254;
        color: red;
        /* box-shadow: inset -1px 1px 20px 0px #000;*/
    }

    td:nth-child(odd) {
        background: #1eff0014;
        border-bottom: 2px solid #eceffa;
    }

    td {
        border: 1px solid #ffffff;

    }


    tr {
        border: 2px solid rgb(255, 255, 255);

    }


    th {
        text-align: center;
        font-size: 18px;
        font-weight: bolder;
        height: 50px;
        color: #ffc107;
        box-shadow: inset -20px 0px 20px 20px #00000078;

    }

    input[type="text"] {
        width: 100px;

    }


    .input-sm {

        border: 2px solid #0CF;
    }
</style>

<body>

    @if (isset($_GET['Edit_slider']))


        <B> *current_page:{{ $pagename }}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            *page_id:{{ $MainM_ID }} </B>


        <div class="card-body">
            <div class='card card-primary card-outline'>

                <div class="card-header" style="text-align:center;">
                    <strong>
                        <h1> Edit slider </h1>
                    </strong>
                </div>

                <hr /> <br />
                <br /> <br />


                <FORM name='Main' action="{{ route('Del_Bulkslider') }}" method="POST"
                    enctype='multipart/form-data'>

                    <div class="table-responsive col-lg-6">

                        <table border="1" class="table table-responsive ">

                            <tr class="trc" align='center'>

                                <th scope="col"> #</th>
                                <th scope="col"> ID </th>
                                <th scope="col"> title </th>
                                <th scope="col">slider_Img </th>
                                <th scope="col"> update </th>
                                <th scope="col">
                                    <input type="hidden" name="page_id" value="{{ $page_id }}" />
                                    <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                                    <input type="submit" value="delete" name="delete" class="delete">
                                </th>

                            </tr>

                            <tr>
                                @php   $i=0;   @endphp

                                @foreach ($slider as $slideritem)
                                    <!-- <td><?php echo $slideritem->id; ?></td> -->

                                    <td> <INPUT TYPE="checkbox" name="checkbox[{{ $slideritem->id }}]"
                                            value="{{ $slideritem->id }}" /> </td>


                                    @csrf
                                    @method('POST')

                </FORM>


                <td> {{ ++$i }} </td>


                <td> <?php echo $slideritem->title; ?> </td>


                <td>

                    <a href="http://{{ $Domain_site }}/Front/IMG/<?php echo $slideritem->ImageName; ?>" data-lightbox="image-1">


                        <img src="http://{{ $Domain_site }}/Front/IMG/<?php echo $slideritem->ImageName; ?>"
                            style="width:50px; height:50px;" /> </a>
                </td>


                <td>

                    <form action="{{ route('slider.show', $slideritem->id) }}" method="get">

                        @csrf
                        @method('GET')

                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $slideritem->nav_id))
                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->nav_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $slideritem->box_id))
                            <input type="hidden" name="page_id" value="box_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->box_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $slideritem->relatedtopic_id))
                            <input type="hidden" name="page_id" value="topic_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->relatedtopic_id; ?>' />
                        @endif


                        <input type="SUBMIT" name="SELECTslider"
                            style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url({{ asset('Front/ICON/R.png') }});"
                            title='Editstatic' value>


                    </form>

                </td>

                <td>
                    <div align='center'>
                        <form action="{{ route('slider.destroy', $slideritem->id) }}" method="Post">

                            @csrf
                            @method('DELETE')

                            @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $slideritem->nav_id))
                                <input type="hidden" name="page_id" value="nav_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->nav_id; ?>' />
                            @endif

                            @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $slideritem->box_id))
                                <input type="hidden" name="page_id" value="box_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->box_id; ?>' />
                            @endif

                            @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $slideritem->relatedtopic_id))
                                <input type="hidden" name="page_id" value="topic_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->relatedtopic_id; ?>' />
                            @endif

                            <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                style='background:red'>
                        </form>
                    </div>
                </td>
                </tr>
    @endforeach
    </table>


    {{ $slider->appends(['MainM_ID' => $MainM_ID, 'page_id' => $page_id])->render('Admin.Auth.paginate') }}
@elseif(isset($_GET['SELECTslider']))
    <div class="card card-primary" style='margin-left:15px; '>

        <div class="card-header">

            <h3 class="card-title">
                Edit Slider
            </h3>




            &nbsp; &nbsp; &nbsp;


            <select id="langOpt" style='color:black;  margin-left:75%'>
                <option value="en" style='color:black;'><span> أنجيلزي-EN </span> </option>
                <option value="ar" style='color:black;'><span> عربي-Ar </span> </option>
            </select>

            <script>
                document.querySelector('#langOpt').addEventListener('change', function(e) {
                    document.querySelectorAll('.lang-option').forEach(element => {
                        if (element.dataset.lang === e.target.value) {
                            element.style.display = 'block';
                        } else {
                            element.style.display = 'none';
                        }
                    });
                });
            </script>
        </div>


        <br /> <br />
        <div style='padding-left:15px'>
            @foreach ($sliderD as $slideritem)
                <form action="{{ route('slider.update', $slideritem->id) }}" method="post"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- <INPUT TYPE='hidden'  name='sliderID'   value='{{ $slideritem->id }}'> -->

                    <INPUT TYPE='hidden' name='MainM_ID' value='{{ $sliderID }}'>

                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $slideritem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $slideritem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $slideritem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="topic_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $slideritem->relatedtopic_id; ?>' />
                    @endif

                    <input type='text' name='slidetitle' style="width:520px" placeholder='slideshow caption' />
                    <br />
                    <br />

                    <input name="upload" type="file" value="uploadfile" /> <br />


                    <input type='submit' value='updata' name='Edit'>
                </form>
            @endforeach



            <br />

            <br />

        </div>

    </div>
@else
    <h1> لايوجد محتوي حتى الأن </h1>

    @endif
    </div>
    </div>
    </div>
    </div>
</body>
<script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript" defer></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" defer></script>

</html>
