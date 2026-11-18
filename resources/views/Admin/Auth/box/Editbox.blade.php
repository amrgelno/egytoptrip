<div class="card-body">
    <div class='card card-primary card-outline'>

        <div class="card-header" style="text-align:center;">
            <strong>
                <h1> Edit box </h1>
            </strong>
        </div>

        <hr /> <br />
        <br /> <br />

        <div style='padding-left:30px;'><B>* cat_type: {{ $cat_type }} </B> </div>
        <FORM name='Main' action="{{ route('Del_Bulkbox') }}" method="POST" enctype='multipart/form-data'>

            <div class="table-responsive col-lg-9">

                <table id="data-table" border="1" class="table table-responsive ">




                    <tr class="trc">
                        <thead>

                            <th scope="col">#</th>
                            <th scope="col">Num</th>
                            <th scope="col">categories</th>
                            <th scope="col"> Edit</th>
                            <th scope="col"> select</th>
                            <th scope="col"> Image</th>
                            <th scope="col"> Image Name</th>
                            <!-- <th scope="col"> cat_type</th> -->
                            <th scope="col">Seo Report</th>
                            <th scope="col">
                                <input type="hidden" name="page_id" value="{{ $page_id }}" />
                                <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                                <input type="submit" value="delete" name="delete" class="delete">
                            </th>
                        </thead>

                    </tr>



                    @php   $i=0;   @endphp


                    @foreach ($boxD as $boxitem)
                        <tr>

                            <td> <INPUT TYPE="checkbox" name="checkbox[{{ $boxitem->ID }}]"
                                    value="{{ $boxitem->ID }}" /> </td>


                            @csrf
                            @method('POST')

        </FORM>

        <td> {{ ++$i }} </td>

        <td> <a href="http://{{ $Domain_site }}?box_ID=<?php echo $boxitem->ID; ?>&lang=en_gb"
                target='_blank'>{{ $boxitem->title }} </a>
        </td>
        <td>

            <form action="{{ route('box.show', $boxitem->ID) }}" method="post">
                @csrf
                @method('GET')

                <INPUT TYPE='submit' name='selecttoupdate' class='update'
                    style="margin: 5% 33%;
width: 22px;
background-size: cover;
background-repeat: no-repeat;
/* content: 'ewrerer'; */
border: unset;
/* background: yellow; */
background-position: center;
background-image: url({{ asset('Front/ICON/R.png') }});"
                    title='Editbox' value />
            </form>
        </td>

        <td>
            <form action="{{ route('cms') }}" method="post">
                @csrf
                @method('GET')
                <!-- <INPUT TYPE='hidden' name='box_ID'  value='<?php echo $boxitem->ID; ?>'/> -->

                <INPUT TYPE='hidden' name='box_ID' value='<?php echo $boxitem->ID; ?>' />


                <INPUT TYPE='submit' name='instopic' title='boxfeatures' class='insert'
                    style="margin: 5% 33%;
width: 22px;
background-size: cover;
background-repeat: no-repeat;
/* content: 'ewrerer'; */
border: unset;
/* background: yellow; */
background-position: center;
background-image: url({{ asset('Front/ICON/description.png') }});"
                    value />
            </form>
        </td>
        <td>

            <a href="http://{{ $Domain_site }}/Front/IMG/<?php echo $boxitem->ImageName; ?>" data-lightbox="image-1"
                data-title="My caption">


                <img src="http://{{ $Domain_site }}/Front/IMG/<?php echo $boxitem->ImageName; ?>" style="width:50px; height:50px;" />



            </a>

        </td>


        <td> <?php echo $boxitem->ImageName; ?> </td>

        <td>
            <a href="https://freetools.seobility.net/en/seocheck/{{ $Domain_site }}" target='_blank'>SEO
                Report</a>
        </td>

        <!-- <td> <?php /*echo $boxitem->cat_type ;*/?>     </td> -->
        <td>
            <div align='center'>

                <form action="{{ route('box.destroy', $boxitem->ID) }}" method="Post">
                    @csrf
                    @method('DELETE')

                    <INPUT TYPE='hidden' name='cat_type' value='<?php echo $boxitem->cat_type; ?>' />

             
                    @if (@$_POST['page_id'] == 'nav_id')
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->nav_id; ?>' />

                            @endif
                    @if(@$_POST['page_id'] == 'box_id')
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->box_id; ?>' />
                            @endif

                    @if(@$_POST['page_id'] == 'topic_id')
                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->relatedtopic_id; ?>' />
                    @endif
                    <input type="SUBMIT" name="DELCATITEM" VALUE="x" class="btn btn-primary"
                        style='background:red'>
                </form>
            </div>
        </td>
        </tr>
        @endforeach

        </table>


        {{ $boxD->appends(['MainM_ID' => $MainM_ID, 'page_id' => $page_id, 'cat_type' => $cat_type])->render('Admin.Auth.paginate') }}
