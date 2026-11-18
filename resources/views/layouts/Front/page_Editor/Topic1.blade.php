@if (auth::guard('admin')->check())
    <form action="{{ route('topic.index') }}" method="get">

        @csrf

        @method('PUT')

        @if (isset($navID) or empty($navID))
            @if (empty($navID))
                <input type="hidden" name="MainM_ID" value="1" />
            @else
                <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            @endif

            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_id" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        @endif


        @if (isset($navID) or isset($box_ID) or isset($Topic_ID) or empty($navID))
            <INPUT TYPE='submit' name='EDIT_TOPIC' title='EditTopic' class='insert'
                style="margin: 5% 33%;
width: 22px;
background-size: cover;
background-repeat: no-repeat;
/* content: 'ewrerer'; */
border: unset;
/* background: yellow; */
background-position: center;
background-image: url(Front/ICON/author.png);"
                value />
        @endif

    </form>
@endif
