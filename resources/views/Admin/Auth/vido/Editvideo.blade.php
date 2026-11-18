<div class="card card-primary" style='margin-left:15px; '>

    <div class="card-header">

        <h3 class="card-title">
            Edit video
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

        @foreach ($video as $videoitem)
            <form action="{{ route('video.update', $videoitem->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <br />
                <h1> update categories </h1>
                <hr />
                <div style='display:flex;'>
                    <!-- <INPUT TYPE='hidden'  name='id'   value='<?php echo $videoitem->id; ?>'> -->

                    <!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id; ?>'/>       -->

                    <input type="text" name="vidotitle" placeholder="<?php echo $videoitem->title; ?>" />
                    &nbsp; &nbsp; <input type="file" name='vidoshow' value="search for a file" />


                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['FKvideo_ID'] = $videoitem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['FKvideo_ID'] = $videoitem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'relatedtopic_id') and ($_POST['FKvideo_ID'] = $videoitem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->relatedtopic_id; ?>' />
                    @endif

                    <input type='submit' value='update' name='updatecat' class="btn btn-primary">
                </div>
            </form>
        @endforeach

        <br />
        <br />

    </div>
</div>
