<div class="card card-primary" style='margin-left:15px; '>

    <div class="card-header">

        <h3 class="card-title">
            Edit Paragraph
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

        @foreach ($paragraphD as $paragraphitem)
            <form action="{{ route('paragraph.update', $paragraphitem->id) }}" method="POST" />


            @csrf
            @method('PUT')

            <!-- <INPUT TYPE='hidden'  name='paragraphID'   value='{{ $paragraphitem->id }}'> -->

            <INPUT TYPE='hidden' name='MainM_ID' value='{{ $paragraphID }}'>

            @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $paragraphitem->nav_id))
                <input type="hidden" name="page_id" value="nav_id" />
                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $paragraphitem->nav_id; ?>' />
            @endif

            @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $paragraphitem->box_id))
                <input type="hidden" name="page_id" value="box_id" />
                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $paragraphitem->box_id; ?>' />
            @endif

            @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $paragraphitem->relatedtopic_id))
                <input type="hidden" name="page_id" value="topic_id" />
                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $paragraphitem->relatedtopic_id; ?>' />
            @endif



            <div id="EnLangoption" class="lang-option" data-lang="en">


                &nbsp; &nbsp; <p><B>*Default content_lang: </B></p>

                <textarea name='updateparagraph'>{{ $paragraphitem->Paragraph }}</textarea>

            </div>


            <div id="ArLangoption" class="lang-option" data-lang="ar" style="display:none;">


                &nbsp; &nbsp; <p><B>*second content_lang: </B></p>

                &nbsp; &nbsp;
                <textarea name='Ar_paragraph'>{{ $paragraphitem->Ar_paragraph }}</textarea>
            </div>
            <br /> <br />
            &nbsp; &nbsp; &nbsp;
            <input type='submit' value='updata' name='Edit' class="btn btn-primary" style="margin-left: 190px;">
            </form>
        @endforeach

    </div>


    <br /> <br /> <br />


</div>
