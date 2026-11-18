<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='KEYWORDSbt' onclick='KEYWORDSbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>
<img src="http://{{ $Domain_site }}/Front/ICON/seo2-91-128.png" class="Marque" />
<h1 class="KEYWORDS-bt hint--right" onclick='KEYWORDSbt();' aria-label="أداة السيو"> Meta Generator(SEO TOOLS)
</h1>
<div class="KEYWORDS">

    <form action="{{ route('keywords.store') }}" method="post">

        @csrf

        @if (isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_ID" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="Topic_ID" />
        @endif

        <input type="text" name="keywords" size="50px" placeholder="KEYWORD  كلمات المفتاحية" required /><br />
        <br />
        <input type="text" name="description" size="80px" placeholder="descriptionوصف الصفحة " required />
        <input type="text" name="title" size="50px" placeholder="titleعنوان الصفحة " required />
        <input type="text" name="author" size="50px" placeholder="authorأسم مؤلف" required />
        <input type="submit" name="SEO" value="send" class="send" />
    </form>

    <form action="{{ route('keywords.index') }}" method="get">

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
            <input type="hidden" name="page_id" value="Topic_ID" />
        @endif
        <input name="EditKeyword" type="submit" value="update Meta Generator" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function KEYWORDSbt() {

        $(".KEYWORDS").slideToggle(2000);
        $("#KEYWORDSbt ").toggleClass("active");

    }
</script>
