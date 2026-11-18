    @extends('layouts.FrontCDN.framework.react.Blog.Topicreact')


    @section('topic')
        <article class="topic">

            <div class='topic-FRAME' key={item.id}>

                <div class="img">
                    <img class="img" src={Img+item.ImageName} />
                </div>

                <div class="text">

                    @if (@$_GET['lang'] == 'en' or empty(@$_GET['lang']))
                        <a href={ArTopicext+item.id}> { item.subject } </a>
                    @elseif($_GET['lang'] == 'Ar')
                        <a href={EnTopicext+item.id}> { item.Ar_subject } </a>
                    @endif

                    <div>

                        @if (@$_GET['lang'] == 'en' or empty(@$_GET['lang']))
                            { item.content }
                        @elseif($_GET['lang'] == 'Ar')
                            { item.Ar_content }
                        @endif
                    </div>
                </div>

            </div>

        </article>
    @stop
