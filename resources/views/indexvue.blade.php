@include('layouts.FrontCDN.framework.vue.headtag')


<body   data-aos-easing="ease"  data-aos-duration="200"  data-aos-delay="500"  onload="showResult();"  >
  @if (@$_GET['MainM_ID']or@$_GET['box_ID'] )@include('layouts.FrontCDN.framework.vue.Loading-screen')@endif
<div id="app" v-cloak>@if (auth::guard('admin')->check())@component('vue_component')@endcomponent @else @php
require_once'../Front/Html/vue/Build/index-min.vue';    /*vue Build  SPA DESIGN PATTERN*/ @endphp @endif </div>
</body>


 <link href="https://cdn.jsdelivr.net/npm/swiper@10/shared/swiper-core.min.mjs" rel="modulepreload"  fetchpriority='low'  crossorigin>

<link href="https://cdn.jsdelivr.net/npm/swiper@10/shared/utils.min.mjs" rel="modulepreload"  fetchpriority='low' crossorigin>

 {{-- <link href="https://cdn.jsdelivr.net/npm/swiper@10/shared/swiper-core.min.mjs" rel="preconnect"  fetchpriority='high'  crossorigin>

<link href="https://cdn.jsdelivr.net/npm/swiper@10/shared/utils.min.mjs" rel="preconnect"  fetchpriority='high' crossorigin>  --}}

<link href="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_US.fVIdDXxOFc8.O/am=AAAE/d=1/exm=el_conf/ed=1/rs=AN8SPfqqiknrPQ_vTVU9HiVxn7tHXHom_Q/m=el_main" rel="preconnect"  crossorigin >

<link href="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_US.fc2oazFHJXU.O/am=AAAE/d=1/exm=el_conf/ed=1/rs=AN8SPfqd2Whn3oLgIPt7St6KNppFTv5sow/m=el_main" rel="preconnect"  crossorigin >
<script src="Front/JS/webscripts1-min.js" type="text/javascript"  fetchpriority='low' defer></script>
{{-- <script src="Front/JS/rocket-loader.min.js" type="text/javascript" async='true'></script> --}}
<script src="Front/JS/lazysizes.min.js" type="text/javascript" async='true'></script>
{{-- <script src="Front/JS/jquery.min.js" type="text/javascript" ></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" async="true"></script>
<script src="Front/JS/animation.js" type="text/javascript"></script>
<script src="Front/JS/widget.js" type="text/javascript"></script>
<script src="Front/JS/gt.min.js" type="text/javascript" data-gt-widget-id="43217984" rel="preload"  fetchpriority='low' ></script>
<script src="Front/JS/cdnvue-min.js" type="text/javascript" rel="preload"  fetchpriority='high'  crossorigin></script>

<script src="Front/JS/main.es.js" type="module" fetchpriority='high'  rel='preloader'  crossorigin></script>
<script src="https://cdn.jsdelivr.net/npm/rocket-loader@2.4.0/build/js/loader.min.js" async="true"></script>
{{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}


<script>   alert('website under construction')    </script>



@if (!auth::guard('admin')->check())
    <script src="Front/JS/inspector-min.js" type="text/javascript" defer></script>
@endif

@if (!auth::guard('admin')->check())
<script type="text/javascript">window.gtranslateSettings=window.gtranslateSettings ||{}; window.gtranslateSettings["43217984"]={ default_language: "en", // Set Default Language languages: [ "af", "sq", "am", "en", "fa", // "ar", "ps", "ja", "zh-CN", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "ny", "zh-TW", "co", "hr", "cs", "da", "nl", "eo", "et", "tl", "fi", "fr", "fy", "gl", "ka", "de", "el", "gu", "ht", "ha", "haw", "iw", "hi", "hmn", "hu", "is", "ig", "id", "ga", "it", "jw", "kn", "kk", "km", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "pl", "pt", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "es", "su", "sw", "sv", "tg", "ta", "te", "th", "tr", "uk", "ur", "uz", "vi", "cy", "xh", "yi", "yo", "zu", ], // Languages Selected wrapper_selector: "#gt-mordadam-43217984", // Element Selected native_language_names: 1, // Set All Languages ​​Should Be Native Language From The Beginning flag_style: "2d", // Flag Style flag_size: 24, // Flag Size horizontal_position: "inline", // Set Horizontal Position flags_location: "flags\/", // Set Flags Location};</script>
@endif


<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               1
    });
    wow.init();
</script>

</html>
