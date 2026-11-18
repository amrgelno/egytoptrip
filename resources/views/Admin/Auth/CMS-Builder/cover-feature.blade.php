<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='coverbt' onclick='coverbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/banner_carrousel_slider_images_ad_promotion-512.png" class="cover-img" />
<h1 class='cover-bt hint--right' onclick='coverbt();' aria-label="الغلاف">coverimage </h1>
<!--<div class="coverOpen-buttor"> >> </div>  <div class="coverClose-buttor"> << </div>-->
<div class="cover">
    <form action="{{ route('cover.store') }}" method="post" enctype="multipart/form-data">
        @csrf

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
        <input name="upload" type="file" value="uploadfile" required />
        <input name="Edit_cover" type="submit" value="insert" class="EDIT_TOPIC" />
    </form>


    <form action="{{ route('cover.index') }}" method="get">

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

        <input name="Edit_cover" type="submit" value="change cover" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function coverbt() {

        $(".cover").slideToggle(2000);
        $("#coverbt ").toggleClass("active");

    }
</script>
