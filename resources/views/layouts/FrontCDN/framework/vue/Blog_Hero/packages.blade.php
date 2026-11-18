<div class="row">

    @include('layouts.FrontCDN.framework.vue.page_Editor.box6')

    <div class="cards  col-lg-9  col-12  text-center mx-auto">

        <span v-for="(boxitem,i) in  box" :key="i" v-if=" boxitem.BOX_STYLE == 'BoxModel6'  &&   i==0 ">

            <h2 style="font-weight: 900 !important; -webkit-text-stroke: 0.69px #e03b31;"class="mb-5"class="mb-5" v-if="lang  == 'en_gb'" v-html=' boxitem.cat_type'> </h2>


            {{-- <h2 class="mb-5" v-if="lang  == 'en_gb'" v-html=' boxitem.cat_Name'> </h2> --}}

            <h2 style="font-weight: 900 !important; -webkit-text-stroke: 0.69px #e03b31;" class="mb-5" v-if="lang  == 'ar'" v-html='boxitem.Ar_cat_Name'> </h2>
        </span>

        <div class="row" id="programs">


            @include('layouts.FrontCDN.framework.vue.Blog_Hero.paginatedpackages')



            <nav v-for="(boxitem,i) in  box" :key="i" v-if=" boxitem.BOX_STYLE == 'BoxModel6'  &&  i==0 "
                class="col-md-3" aria-label="Standard pagination example" style="margin: 20px 55%;">

                <ul class="pagination">

                    <li>
                        <button style='background:#feb251' @click="prevPage" :disabled="currentPage === 1">«</button>
                    </li>
                    <li v-for="page in totalPages" :key="page">
                        <button style='background:#feb251'  @click="goToPage(page)"
                            :class="{ active: currentPage === page }">@{{ page }}</button>
                    </li>
                    <li>
                        <button style='background:#feb251' @click="nextPage" :disabled="currentPage === totalPages">»</button>
                    </li>

                </ul>

            </nav>


        </div>
    </div>
    {{-- @if (@$_GET['box_ID'] && @$_GET['Destinations'])
        @include('layouts.FrontCDN.framework.vue.Blog_Hero.filter1')
    @endif --}}
</div>
