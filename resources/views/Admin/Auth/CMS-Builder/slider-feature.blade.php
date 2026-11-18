<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='slideshowbt' onclick='slideshowbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/slideshow.png" class="slideshow-img" />
<div class="watch-video"><button id="slideshow-bt" STYLE="background:#000;" />
    <a href="http://{{ $Domain_site }}/Front/CMS_VIDEO/slideshow.mp4" target="_blank" style="color:#FFF;"> HOW
        TO USE</a></button>
</div>
<h1 class="slideshow-bt hint--right" onclick='slideshowbt();' aria-label="السليدر"> slideshow </h1>
<!--<div class="slideshowOpen-buttor"> >> </div> <div class="slideshowclose-buttor"> << </div>-->
<div class="slideshow">
    <form name="slideshowscript">
        <input type="number" name="counter" id="counter" placehoder="insert number image" />
        <input type="submit" name="submit" value="+Addslider" onclick="addslider();" />
    </form>
    <form name="multislider" action="{{ route('slider.index') }}" method="get">

        @csrf

        @method('PUT')


        @if (isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_id" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        @endif

        <input type="submit" name="Edit_slider" value="updateslider" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function slideshowbt() {
        $(".slideshow").slideToggle(2000);
        $("#slideshowbt ").toggleClass("active");

    }
</script>
<script>
    function addslider() {

        var x = document.getElementById('counter').value; //counter_Number

        var F = "<form action='{{ route('slider.store') }}' name='form'  method='post' enctype='multipart/form-data'>";
        var csrf = '@csrf';
        var m = "<input type='text' name='slidetitle[]'   placeholder='slideshow caption'/><hr/>";
        var y = "<input type='file'  name='uploadslide[]'  value='search for a file' />";
        for (i = 1; i <= x; i++) {
            document.write(+i + ' ' + F + csrf + y + m);
            document.write('<br />');
            document.write('<br />');
            document.write('<br />');
        }

        @if (isset($navID))
            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $navID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");
        @elseif (isset($box_ID))

            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='box_id'/>");
        @elseif (isset($Topic_ID))

            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $Topic_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");
        @endif

        document.write("<input type='hidden'  name='countnum' >");
        document.form.countnum.value = x;
        document.write("<input type='submit'  name='Add'  value='addimage'/>");
        document.write('<form/>');
    }
</script>
