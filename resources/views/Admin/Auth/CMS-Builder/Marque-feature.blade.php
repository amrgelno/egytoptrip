<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='Marquebt' onclick='Marquebt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>
<img src="http://{{ $Domain_site }}/Front/ICON/internet-page-content-128.png" class="Marque" />
<h1 class="Marque-bt hint--right" onclick='Marquebt();' aria-label="شريط الأاخباري"> News Marque </h1>
<!--<div class="MarqueOpen-buttor"> >> </div>  <div class="MarqueClose-buttor"> << </div>-->
<div class="Marqueline">
    <form action="{{ route('marque.store') }}" method="post">

        @csrf

        @if (isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @endif

        <input type="text" name="NewsMarque" size="80px" placeholder="newnews" required />
        <input type="submit" name="Marque" value="send" class="send" />
    </form>

    <form action="{{ route('marque.index') }}" method="get">
        @csrf
        @method('PUT')


        @if (isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @endif

        <input name="Edit_marque" type="submit" value="Edit_marque" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function Marquebt() {
        $(".Marqueline").slideToggle(2000);
        $("#Marquebt ").toggleClass("active");
    }
</script>
