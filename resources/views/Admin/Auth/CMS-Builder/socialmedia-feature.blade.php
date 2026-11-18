<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='smediabt' onclick='smediabt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/smm1.png" class="social-img" />

<h1 class="socialmedia-bt hint--right" onclick='smediabt();' aria-label="السوشيل ميديا"> social media </h1>
<!--<div class="socialmediaOpen-buttor"> >> </div> <div class="socialmediaClose-buttor"> <<  </div>-->
<div class="social-media">
    <form action="{{ route('social.store') }}" method="post" enctype="multipart/form-data">

        @csrf

        <input name="socialicon" type="file" value="uploadfile" required />

        <input name="url" type="url" placeholder="insert your social link url" required />

        <input name="socail" type="submit" value="insert" class="EDIT_TOPIC" />
    </form>

    <form action="{{ route('social.index') }}" method="get">
        @csrf
        @method('PUT')

        <input name="Edit_social" type="submit" value="Edit_social" class="EDIT_TOPIC" />
    </form>

</div>

<script>
    function smediabt() {

        $(".social-media").slideToggle(2000);
        $("#smediabt ").toggleClass("active");

    }
</script>
