    <div class="card-body">
        <div class='card card-primary card-outline'>

            <div class="card-header" style="text-align:center;">
                <strong>
                    <h1> Edit paragraph </h1>
                </strong>
            </div>

            <hr /> <br />
            <br /> <br />

            <FORM name='Main' action="{{ route('Del_Bulkparagraph') }}" method="POST" enctype='multipart/form-data'>

                <div class="table-responsive col-lg-7">

                    <B> *current_page:{{ $pagename }}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *page_id:{{ $MainM_ID }} </B>


                    <table id="data-table" border="1" class="table table-responsive " style='width: fit-content;'>

                        <tr class='filter-select' data-placeholder='select a name' data-value='اختار' class="trc"
                            align='center'>
                            <th scope="col"> <span align='center'> # </span></th>
                            <th scope="col">title_Num</th>
                            <th scope="col">title </th>
                            <th scope="col"> Editor </th>
                            <th scope="col">
                                <input type="hidden" name="page_id" value="{{ $page_id }}" />
                                <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                                <input type="submit" value="Bulk-delete or delete" name="delete" class="delete">
                            </th>

                        </tr>

                        <tr>
                            <!-- @php   $i=0;   @endphp -->

                            @foreach ($paragraph as $paragraphitem)
                                <!-- <td><?php echo $paragraphitem->id; ?></td> -->

                                <!-- <td> {{ ++$i }}     </td> -->

                                <td> <INPUT TYPE="checkbox" name="checkbox[{{ $paragraphitem->id }}]"
                                        value="{{ $paragraphitem->id }}" required /> </td>



                                @csrf
                                @method('POST')
            </FORM>

            <td> {{ $loop->iteration }} </td>

            <td> {!! $paragraphitem->Paragraph !!} </td>


            <td>
                <div align='center'>

                    <form action="{{ route('paragraph.show', $paragraphitem->id) }}" method="GET" />

                    @csrf
                    @method('GET')


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

                    <input type="SUBMIT" name="SELECTParagraph"
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
                </div>
            </td>

            <td>
                <div align='center'>
                    <form action="{{ route('paragraph.destroy', $paragraphitem->id) }}" method="POST" />
                    @csrf
                    @method('DELETE')


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

                    <input type="SUBMIT" name="DELETE_Item" VALUE="x" class="btn btn-primary"
                        style='background:red'>
                    </form>

                </div>
            </td>

            </tr>
            @endforeach

            </table>


            {{ $paragraph->appends(['MainM_ID' => $MainM_ID, 'page_id' => $page_id])->render('Admin.Auth.paginate') }}
