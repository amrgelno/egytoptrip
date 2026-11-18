<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='paragraphbt' onclick='paragraphbt();'>
        <i class="right fas fa-angle-left"></i>
    </span>
    <hr />
</div>

<div class="watch-video"><button id="Paragraph-bt" STYLE="background:#000;" />
    <a href="https://youtu.be/Ex-E7dUCJ0E?si=YyzbEfN1gfqEoVnA" target="_blank" style="color:#FFF;">HOW TO
        USE</a></button>
</div>
<img src="http://{{ $Domain_site }}/Front/ICON/Paragraph.png" class="Paragraph-img" />
<h1 class="Paragraph-button hint--right" onclick='paragraphbt();' aria-label="الفقرات النصية"> Paragraph&title </h1>
<div class="Paragraph-title">

    <form action="{{ route('paragraph.store') }}" method="post" enctype="multipart/form-data">

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


        <textarea name="Paragraph" cols="1" rows="1"></textarea>
        <input type="submit" name="send" value="send" class="send" />
    </form>


    <form action="{{ route('paragraph.index') }}" method="get">

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


        <input type="submit" name="Editparagraph" value="Editparagraph" class="edit" />
    </form>
</div>
<script>
    function paragraphbt() {

        $(".Paragraph-title").slideToggle(2000);
        $("#paragraphbt").toggleClass("active");
    }
</script>
