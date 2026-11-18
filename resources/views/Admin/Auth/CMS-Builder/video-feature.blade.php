<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='videobt' onclick='videobt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/Image_playback-512.png" class="videocat-img" />
<h1 class="video-bt hint--right" onclick='videobt();' aria-label="فئات الفيديوهات"> video categeory </h1>
<!--<div class="videocatOpen-buttor"> >> </div>  <div class="videocatClose-buttor"> << </div>-->
<div class="video-cat">
    <form name="vidoScript">
        <input type="text" name="cat_VIDO" placeholder="cat_Name" id="catvido" required />
        <input type="number" name="countnum" id="countnum" placehoder="insert number image" />
        <input type="submit" name="addMORE" value="+" onclick="addvido();" />
    </form>
    <form name="EditVideo" action="{{ route('video.index') }}" method="get">

        @csrf

        @method('PUT')

        @if (isset($navID))
            <input type="hidden" name="FKvideo_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="FKvideo_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_id" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="FKvideo_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        @endif
        <input type="submit" name="EDIT_Video" value="updateVIDEO" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function videobt() {

        $(".video-cat").slideToggle(2000);
        $("#videobt ").toggleClass("active");
    }
</script>

<script>
    function addvido() {
        var x = document.getElementById('countnum').value;
        var s = document.getElementById('catvido').value;
        var F = "<form action='{{ route('video.store') }}' name='form' method='post' enctype='multipart/form-data'>";
        var csrf = '@csrf';
        var m = "<input type='text' name='vidotitle[]' placeholder='vidotitle caption'  required/><hr/>";
        var y = "<input type='file'  name='vidoshow[]'  value='search for a file' required />";
        for (i = 1; i <= x; i++) {
            document.write(+i + ' ' + F + csrf + y + m);
            document.write('<br />');
            document.write('<br />');
            document.write('<br />');
        }
        @if (isset($navID))
            document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $navID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");
        @elseif (isset($box_ID))

            document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $box_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='box_id'/>");
        @elseif (isset($Topic_ID))

            document.write("<input type='hidden'  name='FKvideo_ID'   value='{{ $Topic_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");
        @endif
        document.write("<input type='hidden'  name='counter'>");
        document.form.counter.value = x;
        document.write("<input type='text'  name='videocat'>");
        document.form.videocat.value = s;
        document.write("<input type='submit'  name='AddVIDO'  value='Addvideo'/>");
        document.write('<form/>');
    }
</script>
