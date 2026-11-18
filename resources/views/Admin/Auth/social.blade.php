<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <title>socialmedia</title>
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




    .input-sm {

        border: 2px solid #0CF;
    }
</style>

<body>

    @if (isset($_GET['Edit_social']))

        <div class="card-body">
            <div class='card card-primary card-outline'>

                <div class="card-header" style="text-align:center;">
                    <strong>
                        <h1> Edit socialmedia </h1>
                    </strong>
                </div>

                <hr /> <br />
                <br /> <br />

                <div class="table-responsive col-lg-10">

                    <table border="1" class="table table-responsive ">

                        <tr class="trc" align='center'>

                            <th scope="col"> #</th>
                            <th scope="col"> socialmediatitle </th>
                            <th scope="col"> socialmedia anchor </th>

                            <th scope="col"> update </th>
                            <th scope="col"><input type='submit' value='delete' name='delete' class='delete'></th>

                        </tr>

                        <tr>
                            @php   $i=0;   @endphp

                            @foreach ($socials as $socialitem)
                                <!-- <td><?php echo $socialitem->id; ?></td> -->

                                <td> {{ ++$i }} </td>


                                <td><img src="http://{{ $Domain_site }}/Front/IMG/{{ $socialitem->social_icon }}"
                                        style="width:50px; height:50px;"> </td>


                                <td> <?php echo $socialitem->links; ?></td>


                                <td>
                                    <form action="{{ route('social.show', $socialitem->id) }}" method="get">

                                        @csrf
                                        @method('GET')

                                        <input type="hidden" name="page_id" value="nav_id" />
                                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $socialitem->nav_id; ?>' />

                                        <input type="SUBMIT" name="SELECTsocialmedia"
                                            style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/R.png);"
                                            title='Editstatic' value>

                                    </form>

                                </td>

                                <td>
                                    <div align='center'>
                                        <form action="{{ route('social.destroy', $socialitem->id) }}" method="Post">
                                            @csrf
                                            @method('DELETE')

                                            <input type="hidden" name="page_id" value="nav_id" />
                                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $socialitem->nav_id; ?>' />

                                            <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                                style='background:red'>
                                        </form>
                                    </div>
                                </td>
                        </tr>
    @endforeach
    </table>
    {{ $socials->render() }}
@elseif(isset($_GET['SELECTsocialmedia']))
    <div class="card card-primary" style='margin-left:15px; '>

        <div class="card-header">

            <h3 class="card-title">
                Edit social Media
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



        <div style='padding-left:15px;  padding-top:15px;'>

            @foreach ($socials as $socialitem)
                <form action="{{ route('social.update', $socialitem->id) }}" method="post"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- <INPUT TYPE='hidden'  name='socialID'   value='{{ $socialitem->id }}'> -->

                    <input type="hidden" name="page_id" value="nav_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $socialitem->nav_id; ?>' />


                    <div class="col-4">

                        <div class="form-group">
                            <INPUT TYPE='text' class="form-control" name='url' '{{ $socialitem->links }}' />
                        </div>
                    </div>

                    <input name="socialicon" type="file" value="uploadfile" />


                    &nbsp; &nbsp; <input type='submit' value='updata' name='Edit' class="btn btn-primary"
                        style="margin-left: 190px;">
                </form>
            @endforeach


            <br /> <br />
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
