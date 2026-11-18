<section class="carousel carousel-fade slide news-section section-padding">

    @include('layouts.FrontCDN.framework.vue.page_Editor.box4')


    <div class="col-lg-12 col-12 mb-5" v-for="(boxitem,i) in  box" :key="i"
        v-if=" boxitem.BOX_STYLE == 'BoxModel3'  &&   boxitem.cat_Name  !=Null">
        <h5 class="mt-5 mb-3">

            <span v-if="lang  == 'en_gb'" v-html='boxitem.cat_Name'> </span>
            <span v-if="lang  == 'ar '" v-html='boxitem.Ar_cat_Name'> </span>

        </h5>

    </div>


    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

        <div class="col">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-7">

                        <div class="carousel-inner">

                            <div class="carousel-item active news-block-top" v-for="(boxitem,i) in  boxMin"
                                :key="i" style='border-radius:unset;'>
                                <img :src="'Front/IMG/' + boxitem.ImageName" class="carousel-image img-fluid"
                                    alt="...">

                                <div
                                    class="carousel-caption d-flex flex-column justify-content-end news-block-two-col-info  news-category-block">
                                    <h1>

                                        <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                                        <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>

                                    </h1>

                                    <p>

                                    <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
                                    <p v-if="lang  == 'ar '" v-html='boxitem.Ar_Desc'> </p>


                                    </p>
                                </div>
                            </div>


                        </div>


                    </div>



                    <div class="col-md-5">
                        <h2>





                            <!--<p v-if="lang  == 'en_gb'"> Recent offers </p>
                            <p v-if="lang  == 'ar '"> أحدث العروض</p>-->



                        </h2>

                        <ol class="carousel-indicators" style='flex-direction: column; top: -29px;'>

                            <li v-for="(boxMaxitem,i) in boxMin" :key="i"
                                data-bs-target="#testimonial-carousel" :data-bs-slide-to="i" class="active"
                                aria-current="true" style='width:445px; height:145px;'>

                                <div class="news-block news-block-two-col d-flex mt-4">
                                    <div class="news-block-two-col-image-wrap" style='margin-right: -61px;'>

                                        <img :src="'Front/IMG/' + boxMaxitem.ImageName" class="news-image img-fluid"
                                            alt="">

                                    </div>

                                    <div class="news-block-two-col-info">
                                        <div class="news-block-title mb-2  ms-5 p-2">
                                            <h6>
                                                <a class="news-block-title-link  ms-1">

                                                    <span v-if="lang  == 'en_gb'" v-html='boxMaxitem.title'> </span>
                                                    <span v-if="lang  == 'ar '" v-html='boxMaxitem.Ar_title'> </span>


                                                </a>
                                            </h6>
                                        </div>

                                        <div class="news-block-date">
                                            <p>

                                                @{{ boxMaxitem.created_at }} <i class="bi-calendar4 custom-icon me-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
