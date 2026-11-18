<div class="card-body">
    <div class='card card-primary card-outline'>

        <div class="card-header" style="text-align:center;">
            <strong>
                <h1> Edit topic </h1>
            </strong>
        </div>

        <hr /> <br />
        <br /> <br />

        <FORM name='Main' action="{{ route('Del_Bulktopic') }}" method="POST" enctype='multipart/form-data'>

            <div class="table-responsive col-lg-9">


                <B> *current_page:{{ $pagename }}
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    *page_id:{{ $MainM_ID }} </B>


                <table border="1" class="table table-responsive ">

                    <tr class="trc" align='center'>
                        <th scope="col"><span align='center'> # </span></th>
                        <th scope="col">N</th>
                        <th scope="col">subject</th>
                        <th scope="col">content(textarea)</th>
                        <th scope="col">Image</th>
                        <th scope="col">edittopic</th>
                        <th scope="col">insert </th>
                        <th scope="col">

                            <input type="hidden" name="page_id" value="{{ $page_id }}" />
                            <iNPUT TYPE="hidden" name="MainM_ID" value="{{ $MainM_ID }}" />
                            <input type="submit" value="delete" name="delete" class="delete">

                        </th>

                    </tr>

                    <tr>

                        @php   $i=0;   @endphp

                        @foreach ($topic as $topicitem)
                            <!-- <td><?php echo $topicitem->id; ?></td> -->

                            <td> <INPUT TYPE="checkbox" name="checkbox[{{ $topicitem->id }}]"
                                    value="{{ $topicitem->id }}" required /> </td>

                            @csrf
                            @method('POST')
        </FORM>

        <td> {{ ++$i }} </td>

        <td> {{ $topicitem->subject }} </td>

        <td> {!! $topicitem->content !!} </td>

        <td>

            <a href="http://{{ $Domain_site }}/Front/IMG/<?php echo $topicitem->ImageName; ?>" data-lightbox="image-1"
                data-title="My caption">

                <img src="http://{{ $Domain_site }}/Front/IMG/<?php echo $topicitem->ImageName; ?>" style="width:50px; height:50px;" />

            </a>

        </td>

        <td>
            <form action="{{ route('topic.show', $topicitem->id) }}" method="get">
                @csrf
                @method('GET')

                @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $topicitem->nav_id))
                    <input type="hidden" name="page_id" value="nav_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->nav_id; ?>' />
                @endif

                @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $topicitem->box_id))
                    <input type="hidden" name="page_id" value="box_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->box_id; ?>' />
                @endif

                @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $topicitem->relatedtopic_id))
                    <input type="hidden" name="page_id" value="topic_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->relatedtopic_id; ?>' />
                @endif

                <input type="SUBMIT" name="SELECTTopic"
                    style="margin: 5% 33%;
width: 22px;
background-size: cover;
background-repeat: no-repeat;
/* content: 'ewrerer'; */
border: unset;
/* background: yellow; */
background-position: center;
background-image: url({{ asset('Front/ICON/R.png') }});"
                    title='Edittopic' value>

            </form>

        </td>


        <td>
            <form action="{{ route('cms') }}" method="post">
                @csrf
                @method('GET')

                <!-- <INPUT TYPE='hidden' name='box_ID'  value='<?php echo $topicitem->ID; ?>'/> -->

                <INPUT TYPE='hidden' name='Topic_ID' value='<?php echo $topicitem->id; ?>' />

                <INPUT TYPE='submit' name='instopic' value='->' class='insert' />
            </form>
        </td>


        <td>
            <div align='center'>
                <form action="{{ route('topic.destroy', $topicitem->id) }}" method="Post">
                    @csrf
                    @method('DELETE')

                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $topicitem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $topicitem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $topicitem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="topic_id" />
                        <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $topicitem->relatedtopic_id; ?>' />
                    @endif

                    <input type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                        style='background:red'>
                </form>
            </div>
        </td>
        </tr>
        @endforeach
        </table>


        {{ $topic->appends(['MainM_ID' => $MainM_ID, 'page_id' => $page_id])->render('Admin.Auth.paginate') }}
