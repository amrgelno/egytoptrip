<div class="row">


    @include('layouts.FrontCDN.framework.vue.page_Editor.box')



    <div class="col-lg-10 col-12  text-center mx-auto" v-for="(boxitem,i) in  box" :key="i"
        v-if=" boxitem.BOX_STYLE == 'BoxModel4'  &&   boxitem.cat_Name  !=Null ">

        <h2 class="mb-5" v-if="lang  == 'en_gb'" v-html=' boxitem.cat_Name'> </h2>

        <h2 class="mb-5" v-if="lang  == 'ar'" v-html='boxitem.Ar_cat_Name'> </h2>

    </div>




    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" v-for="(boxitem,i) in  box" :key="i"
        v-if="boxitem.BOX_STYLE == 'BoxModel4'">

        <div class="custom-block-wrap"
            style='margin:20px;   transform-style: preserve-3d;   transition: all 1.5s ease-out;'>

            <span class="front">

                <a href="#" class="d-block">

                    <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid "
                        :alt="boxitem.title" style='object-fit:cover;   height:400px; '>

            </span>



            <div class="back" loading='lazy'>

                <p class="featured-block-text" style="margin-left: 12px;">

                    <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                    <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>




                </p>
                </a>

                <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
                <p v-if="lang  == 'ar '" v-html='boxitem.Desc'> </p>
                </span>


                <a :href="'?box_ID=' + boxitem.ID + '&Destinations=Any' + '&lang=' + lang" class="custom-btn btn">
                    viewmore
                </a>


            </div>
        </div>

    </div>
