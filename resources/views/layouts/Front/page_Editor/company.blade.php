@if (auth::guard('admin')->check())
    <a href="{{ route('company.index') }}"><INPUT TYPE='submit' name='EDIT_info' title='EditINFO' class='insert'
            style="margin: 5% 33%;
width: 22px;
background-size: cover;
background-repeat: no-repeat;
/* content: 'ewrerer'; */
border: unset;
/* background: yellow; */
background-position: center;
background-image: url(Front/ICON/author.png);"
            value /> </a>
@endif
