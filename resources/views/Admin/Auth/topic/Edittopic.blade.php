<div class="card card-primary" style='margin-left:15px; '>

    <div class="card-header">

        <h3 class="card-title">
            Edit Topic
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



    <div style='padding-left:15px;   padding-top:15px;'>



        @foreach ($topicD as $topicitem)
            <form action="{{ route('topic.update', $topicitem->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')




                <div id="EnLangoption" class="lang-option" data-lang="en">

                    &nbsp; &nbsp; <p><B>*Default content_lang: </B></p>


                    &nbsp; &nbsp; <div><input type="text" class= ' topic-input' style="width:720px" name="subject"
                            placeholder="newsubject" value='{{ $topicitem->subject }}' />

                        @include('Admin.Auth.inputeffect')

                    </div>
                    <br /> <br />
                    <br />


                    &nbsp; &nbsp;
                    <textarea name='content' style="width: 434px; height: 154px;">{{ $topicitem->content }}</textarea>
                    .
                </div>


                <div id="ArLangoption" class="lang-option" data-lang="ar" style="display:none;">


                    &nbsp; &nbsp;<p><B>*second content_lang: </B> </p>

                    &nbsp; &nbsp; <input type="text" value="{{ $topicitem->Ar_subject }}" class='topic-input'
                        name="Ar_subject" width='720px' placeholder="newsubject" />


                    &nbsp; &nbsp;
                    <textarea name='Ar_content' style="width: 434px; height: 154px;"> {{ $topicitem->Ar_content }} </textarea>

                </div>

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

                <input type="file" name='upload' value="search for a file" />



                <br /> <br />
                <select name='Topic_STYLE'>

                    @if (isset($topicitem->Topic_style))
                        <option value="{{ $topicitem->Topic_style }}" align='center'> Select TOPIC_STYLE </option>

                        <option value="Article">
                            @if ($topicitem->Topic_style == 'Article')
                                o Article
                            @else
                                Article
                            @endif
                        </option>

                        <br />

                        <option value="AccordionPanel">
                            @if ($topicitem->Topic_style == 'AccordionPanel')
                                o AccordionPanel
                            @else
                                AccordionPanel
                            @endif
                        </option>
                    @else
                        <option align='center'> Select TOPIC_STYLE </option>

                        <option value="Article"> Article </option>

                        <option value="AccordionPanel"> AccordionPanel </option>
                    @endif

                </select>


                <BR /> <BR />
                <input type='submit' value='updata' name='Edit' class="btn btn-primary">
            </form>
        @endforeach

        <BR /> <BR />

    </div>
</div>
