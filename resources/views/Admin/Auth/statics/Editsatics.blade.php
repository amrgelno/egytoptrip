<div class="card-body">
    <div class='card card-primary card-outline'>

        <div class="card-header" style="text-align:center;">
            <strong>
                <h1> Edit static </h1>
            </strong>
        </div>

        <hr /> <br />
        <br /> <br />


        <B> * cat_type: {{ $cat_type }} </B>

        <FORM name='Main' action="{{ route('Del_BulkSNumbers') }}" method="POST" enctype='multipart/form-data'>


            <div class="table-responsive col-lg-10">

                <table border="1" class="table table-responsive ">

                    <tr class="trc">

                        <th scope="col">#</th>
                        <th scope="col">cod</th>
                        <th scope="col">categories</th>
                        <th scope="col">Numbers</th>
                        <th scope="col"> Editor</th>
                        <th scope="col"> Image</th>
                        <th scope="col"> Image Name</th>
                        <th scope="col"> cat_type</th>
                        <th scope="col">
                            <input type="hidden" name="page_id" value="{{ $page_id }}" />
                            <iNPUT TYPE="hidden" name="FKStatic_ID" value="{{ $FKStatic_ID }}" />
                            <input type="submit" value="delete" name="delete" class="delete">
                        </th>
                    </tr>

                    @php   $i=0;   @endphp


                    @foreach ($static as $SNumbersitem)
                        <tr>
                            <!-- <td><?php echo $SNumbersitem->id; ?></td> -->
                            <td> <INPUT TYPE='checkbox' name='checkbox[{{ $SNumbersitem->id }}]'
                                    value='{{ $SNumbersitem->id }}' /> </td>

                            @csrf
                            @method('POST')

        </FORM>

        <td> {{ ++$i }} </td>

        <td> {{ $SNumbersitem->title }} </td>
        <td> {{ $SNumbersitem->SNumber_Num }} </td>

        <td>
            <form action="{{ route('SNumbers.show', $SNumbersitem->id) }}" method="post">

                <INPUT TYPE='hidden' name='ID' value='<?php echo $SNumbersitem->id; ?>' />

                @csrf
                @method('GET')


                <INPUT TYPE='submit' name='update'
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


            <a href="http://{{ $Domain_site }}/Front/IMG/<?php echo $SNumbersitem->ImageName; ?>" data-lightbox="image-1"
                data-title="My caption">

                <img src="http://{{ $Domain_site }}/Front/IMG/<?php echo $SNumbersitem->ImageName; ?>" style="width:50px; height:50px;" />


            </a>

        </td>
        <td> <?php echo $SNumbersitem->ImageName; ?> </td>
        <td> <?php echo $SNumbersitem->SNumber_type; ?> </td>

        <td>
            <div align='center'>

                <form action="{{ route('SNumbers.destroy', $SNumbersitem->id) }}" method="Post">

                    @csrf
                    @method('DELETE')

                    <INPUT TYPE='hidden' name='ID' value='<?php echo $SNumbersitem->id; ?>' />





                        
                    @if ($request['page_id'] = 'nav_id')
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->nav_id; ?>' />
                    @elseif($request['page_id'] = 'box_id')
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->box_id; ?>' />
                    @elseif($request['page_id'] = 'topic_id')
                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->relatedtopic_id; ?>' />
                    @endif


                    <input type="SUBMIT" name="DELCATITEM" VALUE="x" class="btn btn-primary"
                        style='background:red'>
                </form>
            </div>
        </td>
        </tr>
        @endforeach

        </table>

        {{ $static->appends(['FKStatic_ID' => $FKStatic_ID, 'page_id' => $page_id, 'cat_type' => $cat_type])->render('Admin.Auth.paginate') }}
