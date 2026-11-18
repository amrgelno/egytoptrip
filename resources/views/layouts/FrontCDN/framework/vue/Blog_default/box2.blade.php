<div class="headline col-sm-7 col-md-7  col-lg-7 " v-for="(data,i) in box" :key="i"
    v-if="data.cat_Name  != ''  &&  data.cat_Name  != Null   ">


    <h2 v-if="lang  == '' ">
        <div class="clear"></div> @{{ data.cat_Name }}
    </h2>

    <h2 v-else-if="lang  == 'Ar' ">
        <div class="clear"></div> @{{ data.Ar_cat_Name }}
    </h2>

</div>

<card class="categoriescard" v-for="(data,i) in box" :key="i">
    <overlay>

        <div class="FRAME">
            <div class="imgb"><img :src="'Front/IMG/' + data.ImageName" class="front">
                <div class="titleb"><a :href="'?box_ID=' + data.ID" id="linker">


                        <span v-if="lang  == '' "> @{{ data.title }} </span>


                        <span v-else-if="lang  == 'Ar' "> @{{ data.Ar_title }} </span>


                    </a>
                </div>
            </div>
        </div>
    </overlay>
</card>
{{--  <script src="{{asset('Front/Js/jquery-3.6.0.min.js') }}"  type="text/javascript"  defer></script>  --}}
