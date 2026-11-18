<table width="500px" border="1">
    <tr class="trc">
        <td>sel</td>
        <td>cod</td>
        <td>categories</td>
        <td> select</td>
        <td> update</td>
        <td><input type='submit' value='delete' name='delete' class="delete"></td>
    </tr>

    @php   $i=0;   @endphp

    @foreach ($video as $videoitem)
        @if (!empty($videoitem->cat_Name))
            @csrf
            @method('GET')

            <tr>

                <td> <INPUT TYPE='checkbox' name='checkstatic[]' value='<?php echo $videoitem->id; ?>' /> </td>


                <!-- <td> <?php echo $videoitem->id; ?></td> -->

                <td> {{ ++$i }}</td>

                <td>
                    <form action="{{ route('video.update', $videoitem->id) }}" method="post">
                        @csrf
                        @method('PUT')


                        <input type='text' name='cat_type' value='<?php echo $videoitem->cat_Name; ?>'>
                </td>
                <td><input type='hidden' name='cat_typeprev' value='<?php echo $videoitem->cat_Name; ?>'>
                    <!-- <INPUT TYPE='hidden' name='id'  value='<?php echo $videoitem->id; ?>'/> -->

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

                    <INPUT TYPE='submit' name='upcat' value='update' class='update' />
                    </form>
                </td>

                <td>
                    <form action="{{ route('video.show', $videoitem->id) }}" method="post">

                        @csrf
                        @method('GET')

                        <INPUT TYPE='hidden' name='cat_type' value='<?php echo $videoitem->cat_Name; ?>' />

                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['FKvideo_ID'] = $videoitem->nav_id))
                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->nav_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'static_id') and ($_POST['FKvideo_ID'] = $videoitem->box_id))
                            <input type="hidden" name="page_id" value="box_id" />
                            <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->box_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'relatedtopic_id') and ($_POST['FKvideo_ID'] = $videoitem->relatedtopic_id))
                            <input type="hidden" name="page_id" value="relatedtopic_id" />
                            <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->relatedtopic_id; ?>' />
                        @endif

                        <INPUT TYPE='submit' name='selectcate' value='selectcate' class='insert' />
                    </form>
                </td>
            </tr>
        @endif
    @endforeach
