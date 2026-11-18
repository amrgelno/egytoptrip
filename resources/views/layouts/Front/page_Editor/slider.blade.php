@if (auth::guard('admin')->check())


    <form action="{{ route('slider.index') }}" method="get">

        @csrf

        @method('PUT')

        @if (empty($navID))
            <input type="hidden" name="MainM_ID" value="1" />
        @elseif(isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_ID" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="Topic_ID" />
        @endif


        @if (isset($navID) or isset($box_ID) or isset($Topic_ID) or empty($navID))
            <INPUT TYPE='submit' name='Edit_slider' title='Edit Slider' class='insert'
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

    </form>

    `
@endif


@endif
