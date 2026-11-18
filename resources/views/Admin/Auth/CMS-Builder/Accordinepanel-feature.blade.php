<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='faqsbt' onclick='faqsbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/layout_accordion_merged.svg" class="Article-img" />
<div class="watch-video"><button id="Article&topic-bt" STYLE="background:#000;" />
    <a href="http://{{ $Domain_site }}/Front/CMS_VIDEO/instopic.mp4" target="_blank" style="color:#FFF;">HOW
        TO USE</a></button>
</div>
<h1 class="Article-bt hint--right" onclick='faqsbt();' aria-label="أسئلة الشائعة"> FAQS & Accordion Panel </h1>
<!--<div class="topicopen-buttor"> >> </div> <div class="topicClose-buttor"> << </div>-->

<div class="faqs" style='display:none;'>
    <form action="{{ route('faq.store') }}" method="post" enctype="multipart/form-data">
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

        <input type="text" name="subject" placeholder="newsubject etc:AccordionFAQSQuestions" required />
        <br /><br />
        <br />
        <textarea type="text" name="content" placeholder="insert new topic here etc:- AccordionFAQSAnswer" cols="40"
            rows="10"></textarea>
        <!-- <input type="file"  name='upload'   value="search for a file" /> -->
        <br /><br />
        <br />
        <input type="submit" name="submit" value="send" class="send2" />
    </form>



    <form action="{{ route('faq.index') }}" method="get">

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
        <input type="SUBMIT" name="EDIT_faqs" VALUE="EDIT_faqs" class="EDIT_TOPIC">
    </form>
</div>



<script type="text/javascript">
    function faqsbt() {
        $(".faqs").slideToggle(2000);
        $("#faqsbt ").toggleClass("active");

    }
</script>
