<div class="items" v-for="(boxitem,i) in  packageDetails" :key="i">


    <div class="cards  col-lg-10 col-12  text-center mx-auto">

        <h2 class="mb-5" v-if="lang  == 'en_gb'" v-html=' boxitem.title'> </h2>

        <h2 class="mb-5" v-if="lang  == 'ar'" v-html='boxitem.title'> </h2>

    </div>


    <div class="row" style='margin-left:30px'>



        <div class="col-lg-3 col-md-6" v-if='boxitem.Country'>
            <span class="icon-font icon-camera">
                <img src="Front/IMG/Tumbnail.jpg" alt="Tumbnail.jpg" class="custom-text-box-image img-fluid"
                    style="height: 50px; width: 50px;"></span>
            <span data-from="1">@{{ boxitem.Country }} - @{{ boxitem.City }} </span>

            <p>Location</p> <!---->
        </div>




        <div class="col-lg-3 col-md-6" v-if='boxitem.price'>
            <span class="icon-font icon-camera">
                <img src="Front/IMG/Tumbnail.jpg" alt="Tumbnail.jpg" class="custom-text-box-image img-fluid"
                    style="height: 50px; width: 50px;"></span>
            <span class="counter-number" data-from="1" :data-target="boxitem.price" data-speed="1000"
                style='display:unset; color:unset; font-size:unset;'> 0 </span> $
            <p>price</p> <!---->
        </div>


        <div class="col-lg-3 col-md-6" v-if='boxitem.Duration'><span class="icon-font icon-camera">
                <img src="Front/IMG/Tumbnail.jpg" alt="Tumbnail.jpg" class="custom-text-box-image img-fluid"
                    style="height: 50px; width: 50px;"></span>
            <span class="counter-number" data-from="1" :data-target="boxitem.Duration" data-speed="1000"
                style='display:unset; color:unset; font-size:unset;'>0</span> Days
            <p>Duration</p> <!---->
        </div>

        <div class="col-lg-3 col-md-6" v-if='boxitem.GroupSize'><span class="icon-font icon-camera">
                <img src="Front/IMG/Tumbnail.jpg" alt="Tumbnail.jpg" class="custom-text-box-image img-fluid"
                    style="height: 50px; width: 50px;"></span>
            <span data-from="1" v-text='boxitem.GroupSize'></span>
            <p>GroupSize</p> <!---->
        </div>

    </div>


</div>
