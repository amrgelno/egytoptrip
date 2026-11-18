<div class='topic-FRAME' v-for="(data,i) in topic" :key="i">


    @include('layouts.FrontCDN.framework.vue.page_Editor.topic')

    <div v-if= "data.Topic_style =='Article' ">

        <div class="img">
            <img :src="'Front/IMG/' + data.ImageName" class="img" />
        </div>

        <div class="text">

            <span v-if="lang  == 'en_gb' "> <a
                    :href="'?Topic_ID=' + data.id +
                        '&lang=' + lang"> @{{ data.subject }} </a> </span>


        <span v-else-if="lang  == 'Ar '">
                    <a :href="'?Topic_ID=' + data.id +
                        '&lang=' + lang"> @{{ data.Ar_subject }} </a>
        </span>

        <br>
        <span>


            <span v-if="lang  == 'en_gb '"
                        style='color:black' v-html=" data.content"> </span>


            <span v-else-if="lang  == 'Ar' " v-html=" data.Ar_content"> </span>


            </span>
        </div>

    </div>



    <div v-else-if= "data.Topic_style=='AccordionPanel' ">

        <div id="Accordion1" class="Accordion" style='width: 80%;  margin: 0 auto'>

            <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="center">

                    <button align='center' style='background:none;    border:unset;     text-align:center'
                        class='Accordine-bt' v-if='i==0' @click="displayblock = !displayblock">
                        <!--<span><img :src="'Front/IMG/' + data.ImageName"
                                class="soc_icon"> </span>-->

                        <span v-if="lang  == 'en_gb' " v-html='data.subject'></span>
                        <span v-else-if="lang  == 'Ar'" v-html='data.Ar_subject'></span> </button>




                    <button align='center' style='background:none;  border:unset;    text-align:center'
                        class='Accordine-bt' v-if='i > 0' @click="data.show = !data.show">
                        <!--<span>
                          <img :src="'Front/IMG/' + data.ImageName"
                                class="soc_icon"> </span>-->



                        <span v-if="lang  == 'en_gb' " v-html='data.subject'></span>
                        <span v-else-if="lang  == 'Ar'" v-html='data.Ar_subject'></span> </button>

                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;" v-if='i==0' v-show='displayblock'
                    v-if="lang  == 'en_gb' " v-html='data.content'>
                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;" v-if='i==0' v-show='displayblock'
                    v-else-if="lang  == 'Ar' " v-html='data.Ar_content'>
                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;" v-if='i > 0' v-show='data.show'
                    v-if="lang  == 'en_gb' " v-html='data.content'>
                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;" v-if='i > 0' v-show='data.show'
                    v-if="lang  == 'Ar' " v-html='data.Ar_content'>
                </div>

            </div>
        </div>



    </div>



</div>
