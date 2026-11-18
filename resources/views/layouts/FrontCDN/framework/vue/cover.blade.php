<section class="head-section  mt-2">
    <div class="row">
        <div class="col-12">
            <div class="about-header header-div position-relative" v-for="(cover_item,i) in cover" :key="i">
                <img :src="'Front/IMG/' + cover_item.Cover_Name" width='100%' Height='550px'
                    :alt="cover_item.Cover_Name" class="page-header-img about-header_figure ">
                @include('layouts.FrontCDN.framework.vue.page_Editor.cover')
            </div>
        </div>
    </div>
</section>
