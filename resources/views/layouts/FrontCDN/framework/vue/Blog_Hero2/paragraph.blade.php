    <div class="content" v-for="(paragraphitem,i) in paragraph" :key="paragraphitem.id">


        @include('layouts.FrontCDN.framework.vue.page_Editor.paragraph')


        <p class="about-desc mt-4  ms-5">

            <img src="Front/IMG/HotAirBalloon-vector_LoadingScreen.svg" width='550px' height='50px'>
            <span v-if="lang  == 'en_gb'" v-html='paragraphitem.Paragraph'> </span>
            <span v-if="lang  == 'ar '" v-html='paragraphitem.Ar_paragraph'> </span>
        </p>

    </div>
