@include('layouts.Front.headtag')

@if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))

    <body onload='loading();' style='direction:ltr'>
    @elseif(@$_GET['lang'] == 'ar')

        <body onload='loading();' style='direction:rtl'>
@endif

<!-- ***** Header Area Start ***** -->

@include('layouts.Front.Blog.header')

@include('layouts.Front.Blog.navlanding')


@if (@$_GET['Donate'])


    @include('layouts.Front.Donate')
@else
    @include('layouts.Front.slider')

    @include('layouts.Front.cover')





    <br /> <br /><br />

    @include('layouts.Front.Blog.card')


    @if ($navID > 1)
        @include('layouts.Front.Blog.paragraph')
    @endif
    <br />

    @if ($navID == 1 or empty($navID))

        @if (@$_GET['box_ID'] == 0)
            @include('layouts.Front.Blog.topic2')
        @endif
    @endif





    @foreach ($fpforms as $Formitem)
        @if ($Formitem->FormType == 'Contact_form')
            @include('layouts.Front.Form2')
        @endif
    @endforeach



    @include('layouts.Front.Blog.topic')

    @include('layouts.Front.Blog.box2')


    @if ($navID == 1 or empty($navID))
        @include('layouts.Front.Form')
        <br /> <br /> <br />

        <br /> <br /> <br />

        @include('layouts.Front.Blog.box3x1')
        @include('layouts.Front.Blog.box')
    @else
        @include('layouts.Front.Blog.box3x2')
    @endif


@endif


@include('layouts.Front.volunteer')

@include('layouts.Front.footer')

</body>


</html>

</h1>
