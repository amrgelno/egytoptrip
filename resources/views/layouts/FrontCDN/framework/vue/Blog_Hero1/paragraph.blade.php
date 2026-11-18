    <div class="content" v-for="(paragraphitem,i) in paragraph" :key="i">


        @include('layouts.FrontCDN.framework.vue.page_Editor.paragraph')


        <p class="about-desc mt-4  ms-5">

            <span v-if="lang  == 'en_gb'" v-html='paragraphitem.Paragraph'> </span>
            <span v-if="lang  == 'ar '" v-html='paragraphitem.Ar_paragraph'> </span>
        </p>

    </div>
