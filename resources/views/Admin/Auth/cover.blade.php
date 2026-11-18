<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('Front/JS/jquery-1.11.0.min.js') }}" type="text/javascript" defer></script>
    <link rel="stylesheet" href="{{ asset('Front/css/lightbox.css') }}">
    <script src="{{ asset('Front/JS/lightbox.min.js') }}" type="text/javascript" defer></script>
    <link rel="stylesheet" href="{{ asset('Front/css/lightbox.css') }}">
    <link href={{ asset('Front/css/adminlte.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Front/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <link href="{{ asset('Front/css/Uiframework.css') }}" rel="stylesheet" type="text/css">

    <title>cover</title>
</head>

<style>
    table {
        border-bottom: 2px solid #5e5e5e;
        box-shadow: -2px 1px 12px 0px;
        background: lavenderblush;
        font-size: 12px;

    }



    .tox.tox-silver-sink.tox-tinymce-aux {
        display: none;
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

    @if (isset($_GET['Edit_cover']))

        <div class="card-body">
            <div class='card card-primary card-outline'>

                <div class="card-header" style="text-align:center;">
                    <strong>
                        <h1> Edit cover </h1>
                    </strong>
                </div>

                <hr /> <br />
                <br /> <br />

                <div class="table-responsive col-lg-7">

                    <table border="1" class="table table-responsive " style='width:fit-content'>

                        <tr class="trc" align='center'>

                            <th scope="col"> #</th>
                            <th scope="col">cover_Img </th>
                            <th scope="col"> Editor </th>
                            <th scope="col"><input type='submit' value='delete' name='delete' class='delete'></th>

                        </tr>

                        <tr>
                            @php   $i=0;   @endphp

                            @foreach ($cover as $coveritem)
                                <!-- <td><?php echo $coveritem->id; ?></td> -->

                                <td> {{ ++$i }} </td>


                                <td>

                                    <a href="http://{{ $Domain_site }}/Front/IMG/<?php echo $coveritem->Cover_Name; ?>"
                                        data-lightbox="image-1">

                                        <img src="http://{{ $Domain_site }}/Front/IMG/<?php echo $coveritem->Cover_Name; ?>"
                                            style="width:50px; height:50px;" /> </a>


                                </td>


                                <td>

                                    <form action="{{ route('cover.show', $coveritem->id) }}" method="get">

                                        @csrf
                                        @method('GET')

                                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $coveritem->nav_id))
                                            <input type="hidden" name="page_id" value="nav_id" />
                                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->nav_id; ?>' />
                                        @endif

                                        @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $coveritem->box_id))
                                            <input type="hidden" name="page_id" value="box_id" />
                                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->box_id; ?>' />
                                        @endif

                                        @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $coveritem->relatedtopic_id))
                                            <input type="hidden" name="page_id" value="topic_id" />
                                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->relatedtopic_id; ?>' />
                                        @endif


                                        <input type="SUBMIT" name="SELECTCover"
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
                                        <form action="{{ route('cover.destroy', $coveritem->id) }}" method="Post">

                                            @csrf
                                            @method('DELETE')

                                            @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $coveritem->nav_id))
                                                <input type="hidden" name="page_id" value="nav_id" />
                                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->nav_id; ?>' />
                                            @endif

                                            @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $coveritem->box_id))
                                                <input type="hidden" name="page_id" value="box_id" />
                                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->box_id; ?>' />
                                            @endif

                                            @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $coveritem->relatedtopic_id))
                                                <input type="hidden" name="page_id" value="topic_id" />
                                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->relatedtopic_id; ?>' />
                                            @endif

                                            <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                                style='background:red'>
                                        </form>
                                    </div>
                                </td>
                        </tr>
    @endforeach
    </table>
    {{ $cover->render() }}
@elseif(isset($_GET['SELECTCover']))
    <div class="card card-primary" style='margin-left:15px; '>

        <div class="card-header">

            <h3 class="card-title">
                Edit Cover
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



        <div style='padding-left:15px'>
            @foreach ($coverD as $coveritem)
                <form action="{{ route('cover.update', $coveritem->id) }}" method="post"
                    enctype="multipart/form-data"
                    style='display:flex;flex-wrap: wrap;flex-direction: column;align-items: baseline;align-content: flex-start;justify-content: center;'>

                    @csrf
                    @method('PUT')

                    <!-- <INPUT TYPE='hidden'  name='coverID'   value='{{ $coveritem->id }}'> -->

                    <INPUT TYPE='hidden' name='MainM_ID' value='{{ $coverID }}'>

                    <div id="EnLangoption" class="lang-option" data-lang="en">

                        &nbsp; &nbsp; <p><B>*Default cover_lang: </B></p>

                        <input type="text" name="cover_title" style='width: 314px;'
                            value="<?php echo $coveritem->cover_title; ?>" />
                        <br />
                        <br />
                        <textarea cols='60' row='30' name="coverDesc">  <?php echo $coveritem->cover_Desc; ?>     </textarea> <br />


                    </div>


                    <div id="ArLangoption" class="lang-option" data-lang="ar" style="display:none;">

                        &nbsp; &nbsp;<p><B>*second box_lang: </B> </p>

                        <input type="text" name="Ar_title" style='width: 314px;' value="<?php echo $coveritem->Ar_title; ?>" />
                        <br /> <br />
                        <textarea cols='60' row='30' name="Ar_Desc">  <?php echo $coveritem->Ar_Desc; ?>     </textarea> <br />


                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $coveritem->nav_id))
                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->nav_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $coveritem->box_id))
                            <input type="hidden" name="page_id" value="box_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->box_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $coveritem->relatedtopic_id))
                            <input type="hidden" name="page_id" value="topic_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $coveritem->relatedtopic_id; ?>' />
                        @endif


                    </div>


                    <input name="upload" type="file" value="uploadfile" />

                    <br>
                    <input type='submit' value='updata' name='Edit' class="btn btn-primary">
                </form>
            @endforeach


        </div>

        <br /> <br />

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
