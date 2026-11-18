    <div class="col-lg-12 col-12 p-0">

        @include('layouts.FrontCDN.framework.vue.page_Editor.slider')


        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" v-for="(MinItem,i) in  sliderMin" :key="MinItem.id">
                    <img :src="'Front/IMG/' + MinItem.ImageName" class="carousel-image img-fluid"
                        :alt="MinItem.ImageName">

                    <div class="carousel-caption d-flex flex-column justify-content-end" style='min-width: 20px;'>
                        <span v-html='MinItem.title'> </span>
                        <br />

                        <div v-for="(Mdata,i) in Maxcompanyid" :key="(Mdata.id)">
                            <img :src="'Front/IMG/' + Mdata.path_pic" class="logo img-fluid" :alt="Mdata.Comp_Name">

                            @{{ Mdata.Comp_Name }}
                            <small> @{{ Mdata.Business }}</small>
                        </div>


                    </div>
                </div>

                <div class="carousel-item" v-for="(MaxItem,i) in  sliderMax" :key="MaxItem.id">

                    <img :src="'Front/IMG/' + MaxItem.ImageName" class="carousel-image img-fluid"
                        :alt="MaxItem.ImageName">

                    <div class="carousel-caption d-flex flex-column justify-content-end" style='min-width: 20px;'>


                        <span v-html='MaxItem.title'> </span>


                        <div v-for="(Xdata,i) in Maxcompanyid" :key="Xdata.id">
                            <img :src="'Front/IMG/' + Xdata.path_pic" class="logo img-fluid" :alt="Xdata.Comp_Name">

                            @{{ Xdata.Comp_Name }}
                            <small>@{{ Xdata.Business }}</small>
                        </div>


                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
