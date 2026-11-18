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

    <title>Keyword</title>
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

    .input-sm {

        border: 2px solid #0CF;
    }
</style>

<body>

    @if (isset($_GET['EditKeyword']))

        <B> *current_page:{{ $pagename }}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            *page_id:{{ $MainM_ID }} </B>

        <div class="card-body">
            <div class='card card-primary card-outline'>

                <div class="card-header" style="text-align:center;">
                    <strong>
                        <h1> Edit Keyword </h1>
                    </strong>
                </div>

                <hr /> <br />
                <br /> <br />

                <FORM name='Main' action="{{ route('Del_Bulkmarque') }}" method="POST"
                    enctype='multipart/form-data'>

                    <div class="table-responsive col-lg-8">

                        <table border="1" class="table table-responsive ">

                            <tr class="trc" align='center'>

                                <th scope="col"> #</th>
                                <th scope="col"> Num</th>
                                <th scope="col">title </th>
                                <th scope="col"> description </th>
                                <th scope="col"> Keyword </th>
                                <th scope="col"> author </th>
                                <th scope="col"> update </th>
                                <th scope="col"><input type="hidden" name="page_id" value="{{ $page_id }}" />
                                    <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                                    <input type="submit" value="delete" name="delete" class="delete">
                                </th>

                            </tr>

                            <tr>
                                @php   $i=0;   @endphp

                                @foreach ($keywords as $keywordsitem)
                                    <td> <INPUT TYPE="checkbox" name="checkbox[{{ $keywordsitem->id }}]"
                                            value="{{ $keywordsitem->id }}" /> </td>


                                    @csrf
                                    @method('POST')

                </FORM>

                <!-- <td><?php echo $keywordsitem->ID; ?></td> -->

                <td> {{ ++$i }} </td>

                <td> {{ $keywordsitem->title }} </td>
                <td> {{ $keywordsitem->description }} </td>
                <td> {{ $keywordsitem->Keyword }} </td>
                <td> {{ $keywordsitem->author }} </td>
                <td>
                    <form action="{{ route('keywords.show', $keywordsitem->title) }}" method="get">

                        @csrf
                        @method('GET')


                        <input type="hidden" name="ID" value="{{ $keywordsitem->ID }}" />


                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $keywordsitem->nav_id))
                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->nav_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $keywordsitem->box_id))
                            <input type="hidden" name="page_id" value="box_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->box_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $keywordsitem->relatedtopic_id))
                            <input type="hidden" name="page_id" value="topic_id" />
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->relatedtopic_id; ?>' />
                        @endif

                        <input type="SUBMIT" name="SELECT_Keyword"
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
                        <form action="{{ route('keywords.destroy', $keywordsitem->title) }}" method="Post">
                            @csrf
                            @method('DELETE')


                            <input type="hidden" name="ID" value="{{ $keywordsitem->ID }}" />

                            @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $keywordsitem->nav_id))
                                <input type="hidden" name="page_id" value="nav_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->nav_id; ?>' />
                            @endif

                            @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $keywordsitem->box_id))
                                <input type="hidden" name="page_id" value="box_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->box_id; ?>' />
                            @endif

                            @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $keywordsitem->relatedtopic_id))
                                <input type="hidden" name="page_id" value="topic_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->relatedtopic_id; ?>' />
                            @endif

                            <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                style='background:red'>
                        </form>
                    </div>
                </td>
                </tr>
    @endforeach
    </table>
    {{ $keywords->render() }}
@elseif(isset($_GET['SELECT_Keyword']))
    <div class="card card-primary" style='margin-left:15px; '>

        <div class="card-header">

            <h3 class="card-title">
                Edit Keywords
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



        <div style='padding-left:15px;    padding-top:15px'>
            @foreach ($keywords as $keywordsitem)
                <form action="{{ route('keywords.update', $keywordsitem->title) }}" method="post">

                    @csrf
                    @method('PUT')

                    <input type="hidden" name="ID" value="{{ $keywordsitem->ID }}" />

                    <!-- <INPUT TYPE='hidden'  name='KeywordID'   value='{{ $keywordsitem->id }}'> -->

                    <!-- <INPUT TYPE='hidden'  name='MainM_ID'   value='$KeywordID '> -->

                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $keywordsitem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $keywordsitem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $keywordsitem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="topic_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $keywordsitem->relatedtopic_id; ?>' />
                    @endif

                    <div><input type="text" placeholder="{{ $keywordsitem->Keyword }}" name="keyword"
                            size="50px" placeholder="KEYWORD  كلمات المفتاحية" />
                        @include('Admin.Auth.inputeffect')
                    </div>
                    <br />


                    <div>

                        <input type="text" placeholder="{{ $keywordsitem->author }}" name="title"
                            size="50px" placeholder="titleعنوان الصفحة " />

                        @include('Admin.Auth.inputeffect')

                    </div>

                    <br />

                    <div> <input type="text" placeholder="{{ $keywordsitem->title }}" name="author"
                            size="50px" placeholder="authorأسم مؤلف" />
                        @include('Admin.Auth.inputeffect')

                    </div>


                    <br />
                    <br />

                    <input type="submit" name="SEO" value="send" class="btn btn-primary" />


                </form>



                <br /> <br />

        </div>
    </div>
    @endforeach
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
