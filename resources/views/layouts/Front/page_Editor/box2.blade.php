@if (auth::guard('admin')->check())


    <form action="{{ route('box.index') }}" method="get">

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
            <input type="hidden" name="page_id" value="box_ID" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="Topic_ID" />

        @endif


        @if (isset($navID) or isset($box_ID) or isset($Topic_ID) or empty($navID))

            @foreach ($box as $boxitem)
                @if ($boxitem->BOX_STYLE == 'BOXModel1')
                    @if (!empty($boxitem->cat_Name))
                        <input type="hidden" name="cat_Name" value="{{ $boxitem->cat_Name }}" />
                    @endif
                @endif
            @endforeach






            <INPUT TYPE='submit' name='updateBox' title='Edit_categories' class='insert'
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
