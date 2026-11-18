<div class="counter_aria container custom_container">

    @include('layouts.FrontCDN.framework.vue.page_Editor.static')
    <div class='row'>

        <div class="col-lg-12 col-12 text-center mb-4" v-for="(data,i) in static" :key="i"
            v-if="data.SNumber_Name  != ''  &&  data.SNumber_Name  != Null  ">

            <h2 v-if="lang  == 'en_gb' ">
                <div class="clear"></div>@{{ data.SNumber_Name }}
            </h2>

            <h2 v-else-if="lang  == 'Ar' ">
                <div class="clear"></div>@{{ data.Ar_SNumber_Name }}
            </h2>

        </div>

    </div>
    <div class="items">
        <div class='row'>

            <div class="col-lg-3 col-md-6 " v-for="(staticitem,i)   in  static" :key="staticitem.id" align='center'>
                <img src="Front/IMG/HotAirBalloon-vector_LoadingScreen.svg" width='550px' height='50px'>
                <span class="icon-font icon-camera"> <img :src="'Front/IMG/' + staticitem.ImageName"
                        class="custom-text-box-image img-fluid" :alt="staticitem.ImageName"
                        style='height: 50px;  width:50px'>
                </span>
                <span class="counter-number " data-from="1" :data-target="staticitem.SNumber_Num" data-speed="1000"> 0
                </span>
                <!-- <span class="counter-number-text">@{{ staticitem.symbol }}</span>-->

                <p v-if="lang  == 'en_gb'" v-html='staticitem.title'> </p>
                <p v-if="lang  == 'ar '" v-html='staticitem.Ar_title'> </p>

            </div>
        </div>
    </div>
</div>
