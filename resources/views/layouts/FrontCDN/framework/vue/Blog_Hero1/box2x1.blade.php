<section class="section-padding">


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

                        <div class="swiper-slide    col-lg-3  col-md-3  mb-4 mb-lg-0" v-for="(boxitem,i) in  box"
                            :key="i" v-if="boxitem.BOX_STYLE == 'BOXModel1'">
                            <div class="custom-block-wrap">
                                <img :src="'Front/IMG/' + boxitem.ImageName" class="custom-block-image img-fluid"
                                    alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">


                                        <h5 class="mb-3">


                                            <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                                            <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>


                                        </h5>

                                        <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
                                        <p v-if="lang  == 'ar '" v-html='boxitem.Ar_Desc'> </p>

                                        <div class="progress mt-4">
                                            <div class="progress - bar w -" role="progressbar" aria-valuenow=""
                                                aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="mb-0">
                                                <strong>Raised:</strong>
                                                @{{ boxitem.price }}
                                            </p>

                                            <p class="ms-auto mb-0">
                                                <strong>Goal:</strong>
                                                @{{ boxitem.price1 }}
                                            </p>
                                        </div>
                                    </div>

                                    <a href="index.php?Donate='Donate" class="custom-btn btn">PURCHASE
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>
    </div>
    </div>

</section>
