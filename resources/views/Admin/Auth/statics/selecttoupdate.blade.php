<div class="card card-primary" style='margin-left:15px; '>

    <div class="card-header">

        <h3 class="card-title">
            Edit static
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

        @foreach ($static as $SNumbersitem)
            <form action="{{ route('SNumbers.update', $SNumbersitem->id) }}" method="post"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <br />
                <h1> update statics </h1>
                <hr />
                <div style='display:flex;'>
                    <!-- <INPUT TYPE='hidden'  name='id'   value='<?php echo $SNumbersitem->id; ?>'> -->

                    <INPUT TYPE='hidden' name='ID' value='<?php echo $SNumbersitem->id; ?>' />

                    <div id="EnLangoption" class="lang-option" data-lang="en">

                        <input type="text" name="statictitle" class='col-form-label-lg' style="width:420px"
                            placeholder='Defaultlang' value="<?php echo $SNumbersitem->title; ?>" />
                    </div>


                    <div id="ArLangoption" class="lang-option" data-lang="ar" style="display:none;">


                        <input type="text" name="Ar_title" class='col-form-label-lg' style="width:420px"
                            placeholder='secondlang' value="<?php echo $SNumbersitem->Ar_title; ?>" />


                    </div>

                    &nbsp; &nbsp; <input type='text' name='staticNum' placeholder='static_num'
                        value="<?php echo $SNumbersitem->SNumber_Num; ?>" />

                    &nbsp; &nbsp; <input type='text' name='staticsymbol' placeholder='staticsymbol eg:$,%,LE'
                        value="<?php echo $SNumbersitem->symbol; ?>" />

                    &nbsp; &nbsp; <input type="file" name='staticshow' value="search for a file" />

                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'topic_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->relatedtopic_id; ?>' />
                    @endif

                    &nbsp; &nbsp; <input type='submit' value='update' name='updatecat' class="btn btn-primary">
                </div>
            </form>
        @endforeach

        <br />
        <br />
    </div>
</div>
