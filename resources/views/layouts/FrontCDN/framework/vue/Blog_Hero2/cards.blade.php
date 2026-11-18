<div class="row">

    @include('layouts.FrontCDN.framework.vue.page_Editor.box5')

    <div class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div v-for="(boxitem,i) in  box" :key="i"
            v-if=" boxitem.BOX_STYLE == 'BoxModel5'  &&   boxitem.cat_Name  !=Null "class="cards  col-lg-10 col-12  text-center mx-auto ">

            <img src="Front/IMG/silhouette-of-hot-air-balloon-air-transport-for-travel-isolated-on-white-background-vector.jpg"
                width='70px' height='50px'>

            <h2 class="mb-5 " v-if="lang  == 'en_gb'" v-html=' boxitem.cat_Name'> </h2>


            <h2 class="mb-5" v-if="lang  == 'ar'" v-html='boxitem.Ar_cat_Name'></h2>


        </div>
    </div>


    <div class="wow bounceInUp  col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" v-for="(boxitem,i) in  box"
        :key="i" v-if="boxitem.BOX_STYLE == 'BoxModel5'" data-wow-duration="1s" data-wow-delay="0.3s">

        <div class=" custom-block-wrap box  col-lg-11  col-xs-6 " style='margin:20px;'>

            <div class="frontface">



                <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid "
                    :alt="boxitem.title" style='object-fit:cover;   height:400px; '>

            </div>


            <div class="backface  ms-1" style='display:flex;  flex-direction:column;  flex-wrap: nowrap  left:unset; '>
                <div class="d-block col-12 ">
                    <p class="featured-block-text  col-12"
                        style="font-size:14px;  text-align: center;   width:fit-content">

                        <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                        <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>
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
