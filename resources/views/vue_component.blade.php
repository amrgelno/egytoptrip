  <div :class="container" :style="{ direction: pg_dir }">

            <!-- Start vue  Component -->
            {{-- @livewire('counter') --}}

            @if (@$_GET['PURCHASE'])

                @include('layouts.FrontCDN.framework.vue.Blog_Hero.navlanding')

                <br />

                @include('layouts.Front.Payment')
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
