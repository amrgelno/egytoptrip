<section id="Features" class="features section" dir='ltr'>



    @include('layouts.FrontCDN.framework.vue.page_Editor.box2')


    <div class="container">
        <div class="row">

            <div id="portfolio" class="our-portfolio section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                               <img src="Front/IMG/R.png" width='150px'
                                    height='50px'>

                            <div class="section-heading  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">

                                <h2  align="center"  v-for="(boxitem,i) in  box" :key="i"
                                    v-if=" boxitem.BOX_STYLE == 'BOXModel2'  &&   boxitem.cat_Name  !=Null ">

                                    <span v-if="lang  == 'en_gb'" v-html='boxitem.cat_Name'> </span>
                                    <span v-if="lang  == 'ar '" v-html='boxitem.Ar_cat_Name'> </span>



                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="row">
                        <div class="swiperpartner col-lg-12" style='overflow-x:hidden;'>

                            <div slides-per-view="4" class="swiper-wrapper ">


                                <div class="item swiper-slide   col-lg-3  col-md-3  mb-4 mb-lg-0 "
                                    v-for="(boxitem,i) in  box" :key="i"
                                    v-if=" boxitem.BOX_STYLE == 'BOXModel2'">

                                    <div class="portfolio-item">
                                        <div class="thumb">
                                            <img :src="'Front/IMG/' + boxitem.ImageName" :alt="boxitem.ImageName"
                                                style="width:70%; height: 250px;">
                                            <!--   <div class="hover-content">
                                              <div class="inner-content">
                                                    <a href="#">
                                                        <h4>

                                                            <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
                                                            <p v-if="lang  == 'ar '" v-html='boxitem.Ar_Desc'> </p>

                                                        </h4>
                                                    </a>
                                                    <span>

                                                        <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                                                        <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>

                                                    </span>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
