@include('layouts.FrontCDN.framework.vue.headtag')


{{-- @livewireStyles() --}}

<body loading='fast' data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" onload='showResult()'>

    <div id="app" v-cloak style="display:none">

        <div :class="container" :style="{ direction: pg_dir }">


            @include('layouts.FrontCDN.framework.vue.loadingsc')

            <!-- Start vue  Component -->
            {{-- @livewire('counter') --}}

            @if (@$_GET['PURCHASE'])
                @include('layouts.FrontCDN.framework.vue.Blog_Hero.navlanding')

                <br />

                @include('layouts.Front.purchase')
            @else
                @include('layouts.FrontCDN.framework.vue.slider')



                <div class='websection'>

                    @include('layouts.FrontCDN.framework.vue.defaulttheme')

                </div>


                <div class="gallery" style='display:none;  margin-top:150px;'>

                    <h2 class="mb-5 " v-if="lang  == 'en_gb'"> website_Gallery</h2>


                    <h2 class="mb-5" v-if="lang  == 'ar'"> معرض الصور</h2>

                    @include('layouts.FrontCDN.framework.vue.Gallery')

                </div>




                <div class="Faqs" style='display:none;  margin-top:150px;'>

                    <h2 class="mb-5 " v-if="lang  == 'en_gb'"> Faqs</h2>


                    <h2 class="mb-5" v-if="lang  == 'ar'">أسئلة الشائعة</h2>


                    @include('layouts.FrontCDN.framework.vue.Blog_Hero.faqs')


                </div>





                <div class="insatFeeds" style='display:none;  margin-top:150px;'>

                    <h2 class="mb-5 " v-if="lang  == 'en_gb'"> Instan Feeds</h2>


                    <h2 class="mb-5" v-if="lang  == 'ar'">أخبارنا بالأنستا</h2>


                </div>


                <div class="TripAdvisorRieview" style='display:none;  margin-top:150px;'>

                    <h2 class="mb-5 " v-if="lang  == 'en_gb'"> TripAdvisorRieview </h2>


                    <h2 class="mb-5" v-if="lang  == 'ar'"> أراء العملاء بتريب ادفيزور</h2>

                    TripAdvisorTestomnials

                    @include('layouts.FrontCDN.framework.vue.Blog_Hero.TripAdvisorTestomnials')


                </div>


                <div class='searchbar' style='display:none;  margin-top:150px;'>


                    <h2 class="mb-5 " v-if="lang  == 'en_gb'">Search on Website Page</h2>


                    <h2 class="mb-5" v-if="lang  == 'ar'"> البحث داخل الموقع </h2>




                </div>
            @endif




            @include('layouts.FrontCDN.framework.vue.Blog_Hero.chatbot');

            @include('layouts.FrontCDN.framework.vue.Blog_Hero.footer')

            <!--  End  Footer  Component-->

            <!--End  vue  Component -->
        </div>

    </div>

</body>

<script src="Front/JS/jquery.min.js" type="text/javascript" defer></script>
<script src="Front/JS/main.es.js" type="module" defer></script>

<script src="Front/JS/webscripts1-min.js" type="text/javascript"></script>


<script src="Front/JS/animation.js" type="text/javascript"></script>
<script src="Front/JS/widget.js" type="text/javascript"></script>
<script src="Front/JS/gt.min.js" type="text/javascript" data-gt-widget-id="43217984" defer></script>

{{-- @livewireScripts() --}}

{{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}

@if (auth::guard('admin')->check())
    <script src="Front/JS/inspector-min.js" type="text/javascript" defer></script>
@endif


<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>

</html>
