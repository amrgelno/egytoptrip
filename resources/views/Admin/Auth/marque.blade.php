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

    <title>Marque</title>
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


    li {
        list-style: none;
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

    @if (isset($_GET['Edit_marque']))


        <B> *current_page:{{ $pagename }}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            *page_id:{{ $MainM_ID }} </B>

        <div class="card-body">
            <div class='card card-primary card-outline'>

                <div class="card-header" style="text-align:center;">
                    <strong>
                        <h1> Edit Marque </h1>
                    </strong>
                </div>

                <hr /> <br />
                <br /> <br />

                <FORM name='Main' action="{{ route('Del_Bulkmarque') }}" method="POST"
                    enctype='multipart/form-data'>

                    <div class="table-responsive col-lg-7">

                        <table border="1" class="table table-responsive " style="width:fit-content">

                            <tr class="trc" align='center'>

                                <th scope="col"> #</th>
                                <th scope="col">ID</th>
                                <th scope="col"> Marquetitle </th>
                                <th scope="col"> update </th>
                                <th scope="col"><input type="hidden" name="page_id" value="{{ $page_id }}" />
                                    <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                                    <input type="submit" value="delete" name="delete" class="delete">
                                </th>
                            </tr>

                            <tr>
                                @php   $i=0;   @endphp

                                @foreach ($marque as $marquehitem)
                                    <!-- <td><?php echo $marquehitem->id; ?></td> -->


                                    <td> <INPUT TYPE="checkbox" name="checkbox[{{ $marquehitem->id }}]"
                                            value="{{ $marquehitem->id }}" /> </td>


                                    @csrf
                                    @method('POST')

                </FORM>

                <td> {{ ++$i }} </td>

                <td> {!! $marquehitem->NEWS !!} </td>


                <td>
                    <form action="{{ route('marque.show', $marquehitem->id) }}" method="get">

                        @csrf
                        @method('GET')

                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $marquehitem->nav_id; ?>' />



                        <input type="SUBMIT" name="SELECTMarque"
                            style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/R.png);"
                            title='Editmarque' value>

                    </form>

                </td>

                <td>
                    <div align='center'>
                        <form action="{{ route('marque.destroy', $marquehitem->id) }}" method="Post">
                            @csrf
                            @method('DELETE')

                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $marquehitem->nav_id; ?>' />


                            <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                style='background:red'>
                        </form>
                    </div>
                </td>
                </tr>
    @endforeach
    </table>
    {{ $marque->render() }}
@elseif(isset($_GET['SELECTMarque']))
    <div class="card card-primary" style='margin-left:15px; '>

        <div class="card-header">





            <h3 class="card-title">
                Edit Marque
            </h3>




            &nbsp; &nbsp; &nbsp;


            {{-- <select id="langOpt" style='color:black;  margin-left:75%'>
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
            </script> --}}

        </div>



        <div style='padding-left:15px;   padding-top:15px'>
            @foreach ($marque as $marquehitem)
                <form action="{{ route('marque.update', $marquehitem->id) }}" method="post">

                    @csrf
                    @method('PUT')

                    <!-- <INPUT TYPE='hidden'  name='marqueID'   value='{{ $marquehitem->id }}'> -->


                    <input type="hidden" name="page_id" value="nav_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $marquehitem->nav_id; ?>' />


                    <INPUT TYPE='text' name='NewsMarque' value='{{ $marquehitem->NEWS }}' />

                    <input type='submit' value='updata' name='Edit' class="btn btn-primary">
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
