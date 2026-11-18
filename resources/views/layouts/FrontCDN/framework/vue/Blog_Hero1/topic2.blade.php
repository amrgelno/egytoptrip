{{-- <section class="section-padding section-bg" id="section_2"> --}}

<section class="section-padding section-bg" v-for="(topicitem,i) in  topic" :key="i"
    v-if=" topicitem.Topic_style == 'Article' ">

    <div class="container">

        @include('layouts.FrontCDN.framework.vue.page_Editor.topic')

        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img :src="'Front/IMG/' + topicitem.ImageName" class="custom-text-box-image img-fluid"
                    :alt="topicitem.ImageName">

            </div>


            <div class="col-lg-6 col-12">
                <div class="custom-text-box">


                    <span v-if="lang  == 'en_gb'" v-html='topicitem.subject'> </span>
                    <span v-if="lang  == 'ar '" v-html='topicitem.Ar_subject'> </span>


                    <p class="mb-0">


                        <span v-if="lang  == 'en_gb'" v-html='topicitem.content'> </span>
                        <span v-if="lang  == 'ar '" v-html='topicitem.Ar_content'> </span>



                    </p>
                </div>



                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box mb-lg-0" v-for="(paragraphitem,i) in  paragraph"
                            :key="i">


                            @include('layouts.FrontCDN.framework.vue.page_Editor.paragraph')


                            <span v-if="lang  == 'en_gb'" v-html='paragraphitem.Paragraph'> </span>
                            <span v-if="lang  == 'ar '" v-html='paragraphitem.Ar_paragraph'> </span>


                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">


                            @include('layouts.FrontCDN.framework.vue.page_Editor.static')


                            <div v-for="(staticitem,i)   in  static" :key="i">
                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1"
                                            :data-target="staticitem.SNumber_Num" data-speed="1000">
                                            0 </span>
                                        <span class="counter-number-text">@{{ staticitem.symbol }}</span>
                                    </div>

                                    <span class="counter-text">



                                        <span v-if="lang  == 'en_gb'" v-html='staticitem.title'> </span>
                                        <span v-if="lang  == 'ar '" v-html='staticitem.Ar_title'> </span>


                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
