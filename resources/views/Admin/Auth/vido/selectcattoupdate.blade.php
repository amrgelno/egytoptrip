<div class="card-body">
    <div class='card card-primary card-outline'>

        <div class="card-header" style="text-align:center;">
            <strong>
                <h1> Edit video </h1>
            </strong>
        </div>

        <hr /> <br />
        <br /> <br />

        <div class="table-responsive col-lg-7">

            <table border="1" class="table table-responsive ">

                <tr class="trc">

                    <th scope="col">#</td>
                    <th scope="col">cod</td>
                    <th scope="col">categories</td>
                    <th scope="col"> update</td>
                    <th scope="col"> Image</td>
                    <th scope="col"> cat_type</td>
                    <th scope="col"><input type='submit' value='delete' name='delete' class="delete"></td>

                </tr>

                @php   $i=0;   @endphp


                @foreach ($video as $videoitem)
                    <tr>
                        <!-- <td><?php echo $videoitem->id; ?></td> -->
                        <td> <INPUT TYPE='checkbox' name='checkstatic[]' value='<?php echo $videoitem->id; ?>' /> </td>

                        <td> {{ ++$i }} </td>

                        <td> {{ $videoitem->title }} </td>


                        <td>
                            <form action="{{ route('video.show', $videoitem->id) }}" method="post">

                                <!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id; ?>'/>       -->

                                @csrf
                                @method('GET')


                                <INPUT TYPE='submit' name='Editvideo'
                                    style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/R.png);"
                                    title='Editstatic' value />
                            </form>
                        </td>

                        <td>

                            <img src="http://{{ $Domain_site }}/Front/Video/<?php echo $videoitem->VIDOName; ?>"
                                style="width:50px; height:50px;" />

                        </td>
                        <td> <?php echo $videoitem->cat_type; ?> </td>

                        <td>
                            <div align='center'>

                                <form action="{{ route('video.destroy', $videoitem->id) }}" method="Post">

                                    @csrf
                                    @method('DELETE')

                                    <!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $videoitem->id; ?>'/>       -->

                                    @if ($request['page_id'] = 'nav_id')
                                        <input type="hidden" name="page_id" value="nav_id" />
                                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->nav_id; ?>' />
                                    @elseif($request['page_id'] = 'box_id')
                                        <input type="hidden" name="page_id" value="box_id" />
                                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->box_id; ?>' />
                                    @elseif($request['page_id'] = 'relatedtopic_id')
                                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                                        <INPUT TYPE='hidden' name='FKvideo_ID' value='<?php echo $videoitem->relatedtopic_id; ?>' />
                                    @endif
                                    <input type="SUBMIT" name="DELCATITEM" VALUE="x" class="btn btn-primary"
                                        style='background:red'>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>
