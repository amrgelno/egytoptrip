    <div class='topic-FRAME' v-for="(data,i) in topic" :key="i">


        @include('layouts.FrontCDN.framework.vue.page_Editor.topic')


        <div class="img">
            <img :src="'Front/IMG/' + data.ImageName" class="img" />
        </div>

        <div class="text">

            <span v-if="lang  == '' "> <a :href="'?Topic_ID=' + data.id+'&lang='+lang"> @{{ data.subject }} </a> </span>


            <span v-else-if="lang  == 'Ar' "> <a :href="'?Topic_ID=' + data.id+'&lang='+lang"> @{{ data.Ar_subject }} </a> </span>

            <br>
            <span>


                <span v-if="lang  == '' "   v-html=" data.content "> </span>


                <span v-else-if="lang  == 'Ar' "   v-html=" data.Ar_content"> </span>



            </span>
        </div>




    </div>
