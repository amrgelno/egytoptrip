<div class="content" v-for="(data,i) in paragraph" :key="i">



    @include('layouts.FrontCDN.framework.vue.page_Editor.paragraph')


    <p v-if="lang  == '' " v-html="data.Paragraph"> </p>


    <p v-else-if="lang  == 'Ar' " v-html="data.Ar_paragraph"> </p>

</div>
