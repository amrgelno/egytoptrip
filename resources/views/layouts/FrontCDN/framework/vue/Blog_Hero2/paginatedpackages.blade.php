<div class="col-lg-4 col-md-6  mb-4 mb-lg-1" v-for="(boxitem,i) in  paginatedData" :key="i"
    v-if="boxitem.BOX_STYLE == 'BoxModel6'">

    <div class="featured-block d-flex justify-content-center align-items-center">
        <div>


            <img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid" :alt="boxitem.title">
            <p class="featured-block-text">

                <span v-if="lang  == 'en_gb'" v-html='boxitem.title'> </span>
                <span v-if="lang  == 'ar '" v-html='boxitem.Ar_title'> </span>


            </p>

            <p v-if="lang  == 'en_gb'" v-html='boxitem.Desc'> </p>
            <p v-if="lang  == 'ar '" v-html='boxitem.Desc'> </p>




            <div class='col-12'>
                <div class='row'>


                    <div class='col-md-6  col-xs-6'> price: <span v-text='boxitem.price'> </span>$</div>


                    <div class='col-md-6  col-xs-6'>Duration : <span v-text='boxitem.Duration'> </span> D </div>
                </div>
            </div>
            <br />

            <div class='col-12'>
                <div class='row'>
                    <input type='text' class='col-xs-5 col-md-5' :value='boxitem.created_at' style="border:unset;"
                        disabled>

                    <div class='col-md-6  col-xs-6'><a :href="'?box_ID=' + boxitem.ID + '&lang=' + lang"
                            class="custom-btn btn">

                            viewmore </a> </div>
                </div>
            </div>

        </div>


    </div>




</div>
