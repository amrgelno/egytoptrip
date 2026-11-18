<section id="Features" class="features section" dir='ltr' style="margin-top: 50px;">


    @include('layouts.FrontCDN.framework.vue.page_Editor.box1')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4" v-for="(boxitem,i) in  box" :key="i"
                v-if=" boxitem.BOX_STYLE == 'BOXModel1'  &&   boxitem.cat_Name  !=Null ">

                <h2>

                    <span v-if="lang  == 'en_gb'" v-html='boxitem.cat_Name'> </span>
                    <span v-if="lang  == 'ar '" v-html='boxitem.Ar_cat_Name'> </span>

                </h2>

            </div>


            <section class="swipercard_aria home_2">


                <div class="swiperpricecard col-md-12" style='overflow-x:hidden;'>

                    <div slides-per-view="4" class="swiper-wrapper">

                        <div class="swiper-slide    col-lg-3  col-md-3 " v-for="(boxitem,i) in  box"
                            :key="i" v-if="boxitem.BOX_STYLE == 'BOXModel1'">



                            <div class="custom-block-wrap box  col-lg-11  col-xs-6"
                                style='margin:20px; border-radius: 50px;'>

                                <span class="frontface">

                                    <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid "
                                        :alt="boxitem.title" style='object-fit:cover;   height:400px; '>

                                </span>


                                <div class="backface  ms-1" loading='lazy'
                                    style='display:flex;  flex-direction:column;  flex-wrap: nowrap  left:unset;  left: 0.1in;  '>
                                    <span class="d-block col-12 ">

                                        <p class="featured-block-text  col-10 "
                                            style="font-size:14px;  text-align: center;   /*visibility: visible;*/  MARGIN-LEFT: 0in !important; width:fit-content">

                                            <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                                            <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>


                                            <br /> <br /> <br />

                                            <a
                                                :href="'?PURCHASE=PURCHASE' +
                                                '&lang=' + lang">PURCHASE
                                            </a>


                                            <br /> <br />


                                            <span class="social-icon"
                                                style="border-radius: 100px;  padding:10px; margin-left:10px;  border:1px solid #000; width:100px;"
                                                title="whatsapp">




                                                <a :href="' //wa.me/+201005385533?'+'text=I`mlooking20%to20%book'+boxitem.title">WA
                                            </a>

                                    </span>

                                    &nbsp;

                                    <span class="social-icon"
                                        style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
                                        title="whatsapp">
                                        <a
                                            :href="'//t.me/+201005385533?' + 'text=I`mlooking20%to20%book' + boxitem.title">TA
                                        </a> </span>

                                    <!-- <span class="social-icon"
                                        style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
                                        title="whatsapp">
                                        <a :href="'//wechat.me/+201005385533?' + 'text=I`mlooking20%to20%book' + boxitem.title">Wechat
                                       </a> </span>-->


                                    &nbsp;
                                    <span class="social-icon"
                                        style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
                                        title="whatsapp">
                                        <a href="tel:+20-100-538-533 "> call </a> </span>

                                    </p>





                                    </span>


                                    <!-- <p v-if="lang  == 'en_gb
                                                '"
                                                v-html='boxitem.Desc'>
                                        </p>
                                        <p v-if="lang  == 'ar '" v-html='boxitem.Desc'> </p> -->




                                    </span>

                                </div>
                            </div>










                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>

</section>
