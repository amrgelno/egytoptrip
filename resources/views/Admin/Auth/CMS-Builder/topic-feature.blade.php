<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='Articlebt' onclick='Articlebt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>
<img src="http://{{ $Domain_site }}/Front/ICON/ArticleES.png" class="Article-img" />
<div class="watch-video"><button id="Article&topic-bt" STYLE="background:#000;" />
    <a href="https://youtu.be/EntXf9AZYnw?si=0tqTpwQmi6U-2hK8" target="_blank" style="color:#FFF;">HOW TO
        USE</a></button>
</div>
<h1 class="Article-bt hint--right" onclick='Articlebt();' aria-label="المقالأت و الموضوعات"> Article&topic </h1>
<!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->
<div class="Article">
    <form action="{{ route('topic.store') }}" method="post" enctype="multipart/form-data">
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

        <input type="text" name="subject" placeholder="newsubject" />
        <br /><br />
        <br />
        <textarea type="text" name="content" placeholder="insert new topic here" cols="40" rows="10"></textarea>
        <input type="file" name='upload' value="search for a file" />
        <br /><br />
        <br />
        <input type="submit" name="submit" value="send" class="send2" />
    </form>


    <form action="{{ route('topic.index') }}" method="get">

        @csrf
        @method('GET')

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
        <input type="SUBMIT" name="EDIT_TOPIC" VALUE="EDIT_TOPIC" class="EDIT_TOPIC">
    </form>
</div>
<script type="text/javascript">
    function Articlebt() {
        $(".Article").slideToggle(2000);
        $("#Articlebt ").toggleClass("active");
        /*$("#MENUAFTER").css({display:"none"});*/
    }
</script>
