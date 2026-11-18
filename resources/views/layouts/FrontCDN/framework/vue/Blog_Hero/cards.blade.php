<div class="row">

    @include('layouts.FrontCDN.framework.vue.page_Editor.box5')

    <div class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div v-for="(boxitem,i) in  box" :key="i"
            v-if=" boxitem.BOX_STYLE == 'BoxModel5'  &&   boxitem.cat_Name  !=Null "class="cards  col-lg-10 col-12  text-center mx-auto ">

            <img src="Front/IMG/copyright_decor.webp"
                width='170px' height='50px'>

            <h2 class="mb-5 " v-if="lang  == 'en_gb'" style="font-weight: 900 !important; -webkit-text-stroke: 0.69px #e03b31;" v-html=' boxitem.cat_Name'> </h2>


            <h2 class="mb-5" v-if="lang  == 'ar'" style="font-weight: 900 !important; -webkit-text-stroke: 0.69px #e03b31;" v-html='boxitem.Ar_cat_Name'></h2>


        </div>
    </div>


    <div class="wow bounceInUp  col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" v-for="(boxitem,i) in  box"
        :key="i" v-if="boxitem.BOX_STYLE == 'BoxModel5'" data-wow-duration="1s" data-wow-delay="0.3s">

        <div class=" custom-block-wrap box  col-lg-11  col-xs-6 " style='margin:20px; height:440px;'>



                <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid "
                    :alt="boxitem.title" style='object-fit:cover;  width:-webkit-fill-available; position: relative; height:440px;'>




            <div class="backface  ms-1"
                style='display: flex;flex-direction: column;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;'>
                <div class="d-block col-12 ">
                    <p class="featured-block-text  col-12"
                        style="font-size:14px;  text-align: center;   width:fit-content">

                    <h2 v-if="lang  == 'en_gb'" style="font-weight: 900;" v-html='boxitem.title'> </h2>
                    <h2 v-if="lang  == 'ar '" style="font-weight: 900;" v-html='boxitem.Ar_title'> </h2>
                    <br />

                    <a :href="'?box_ID=' + boxitem.ID + '&Destinations=Any' +
                        '&lang=' + lang"   style="text-align: center;"> viewmore
                </a>

                    </p>





                </div>


                <!-- <p v-if="lang  == 'en_gb '"
                        v-html='boxitem.Desc'>
                        </p>
                        <p v-if="lang  == 'ar '" v-html='boxitem.Desc'> </p> -->


                </div>
            </div>

        </div>

    </div>
