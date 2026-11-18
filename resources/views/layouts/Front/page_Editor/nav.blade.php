@if (auth::guard('admin')->check())
    <a href="{{ route('nav.index') }}"> <INPUT TYPE='submit' name='instopic' title='Editnav' class='insert'
            style="margin: 5% 1%;
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
