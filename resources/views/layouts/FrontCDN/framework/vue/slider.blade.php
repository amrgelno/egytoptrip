    <div class="col-lg-12 col-12 p-0" style='position: relative;' >

@include('layouts.FrontCDN.framework.vue.Blog_Hero.navlanding')

        <div class='slider' v-if="navID =='1'">

            @include('layouts.FrontCDN.framework.vue.page_Editor.slider')

            <span>
                <ol class="carousel-indicators">
                    <li v-for="(Item,i) in  slider" data-bs-target="#hero-slide" :data-bs-slide-to="i" class="active"
                        aria-current="true" style="width:5px;">
                    </li>

                </ol>
            </span>

            <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active" v-for="(MinItem,i) in  sliderMin" :key="i">
                        <embed :src="'Front/IMG/' + MinItem.ImageName" class="carousel-image  img-fluid"
                            :alt="MinItem.ImageName" :title="MinItem.title" decoding="async">

                        <div class="carousel-caption d-flex flex-column justify-content-end" style='min-width:120px;'>
                            <span v-html='MinItem.title'> </span>

                            <br />

                            <div v-for="(Mdata,i) in Maxcompanyid" :key="i">



                            </div>


                        </div>
                    </div>

                    <div class="carousel-item" v-for="(MaxItem,i) in  sliderMax" :key="i"
                        style="height:40%">

                        <embed :src="'Front/IMG/' + MaxItem.ImageName" class="carousel-image img-fluid"
                            :alt="MaxItem.ImageName" :title="MaxItem.title" style='min-width:120px;'>

                        <div class="carousel-caption d-flex flex-column justify-content-end">


                            <span v-html='MaxItem.title'> </span>


                            <div v-for="(Xdata,i) in Maxcompanyid" :key="i">



                            </div>


                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"
                        style="background-color: unset;  color:gray"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"
                        style="background-color: unset; color:gray"></span>
                    <span class="visually-hidden">Next</span>
                </button>



            </div>

        </div>
    </div>
