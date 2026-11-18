<div class="row">


    @include('layouts.FrontCDN.framework.vue.page_Editor.box')



    <div class="cards  col-lg-10 col-12  text-center mx-auto" v-for="(boxitem,i) in  box" :key="i"
        v-if=" boxitem.BOX_STYLE == 'BoxModel4'  &&   boxitem.cat_Name  !=Null ">

        <h2 class="mb-5" v-if="lang  == 'en_gb'" v-html=' boxitem.cat_Name'> </h2>

        <h2 class="mb-5" v-if="lang  == 'ar'" v-html='boxitem.Ar_cat_Name'> </h2>

    </div>


    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" v-for="(boxitem,i) in  box" :key="i"
        v-if="boxitem.BOX_STYLE == 'BoxModel4'">
        <div class="featured-block d-flex justify-content-center align-items-center">
            <div>
                <a href="#" class="d-block">

                    <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid"
                        :alt="boxitem.title">
                    <p class="featured-block-text">

                        <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                        <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>




                    </p>
                </a>

                <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
                <p v-if="lang  == 'ar '" v-html='boxitem.Desc'> </p>
            </div>

        </div>
    </div>

</div>
