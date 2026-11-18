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
                    <div class="col-md-11">



                        <div class="carousel-inner">

                            <section v-for="(boxitem,i) in  boxMin" :key="i"
                                class="carousel-item active about-section section-padding">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-5 col-12">
                                            <img :src="'Front/IMG/' + boxitem.ImageName"
                                                class="about-image ms-lg-auto bg-light shadow-lg img-fluid"
                                                alt="">
                                        </div>
                                        <div class="col-lg-5 col-md-7 col-12">
                                            <div class="custom-text-block">

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
                            </section>



                            <div class="col-md-1">

                                <ol class="carousel-indicators" style='flex-direction: column; top: 169px;'>


                                    <li v-for="(boxMaxitem,i) in boxMin" :key="i"
                                        data-bs-target="#testimonial-carousel"
                                        :data-bs-slide-to="boxMaxitem.ID - boxMinID" class="active"
                                        style='width:20px; height:27px;    list-style: circle;'>


                                    </li>




                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
