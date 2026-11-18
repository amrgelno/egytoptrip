    <div class="content" v-for="(paragraphitem,i) in paragraph" :key="paragraphitem.id">


        @include('layouts.FrontCDN.framework.vue.page_Editor.paragraph')

            <img src="Front/IMG/EgyptTopTrip_AfterEffect.png" width='150px' height='50px'>

        <p class="about-desc mt-4  ms-5" v-if="lang  == 'en_gb'" v-html='paragraphitem.Paragraph'> </p>

        <p  v-if="lang  == 'ar '" v-html='paragraphitem.Ar_paragraph'> </p>

    </div>
