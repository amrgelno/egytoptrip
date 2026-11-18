@include('layouts.FrontCDN.framework.vue.loadingsc')

<!-- Nav component -->


<div v-if="BSModel=='E-commerce' ">

    @include('layouts.FrontCDN.framework.vue.Ecom.navcom')

</div>


<div v-else-if="BSModel=='landing_page'">

    @include('layouts.FrontCDN.framework.vue.landingpage.nav')


</div>

<div v-else-if="BSModel=='Blog with member'">

    @include('layouts.FrontCDN.framework.vue.BlogMember.nav')

</div>

<div v-else>

    @include('layouts.FrontCDN.framework.vue.Blog.nav')

</div>





<!--End  Nav component -->

<!-- header component -->

@if (isset($_GET['search_bt']))
    <br /> <br />

    <div v-if="Breadcrumbs=='Active' ">

        @include('layouts.FrontCDN.framework.vue.SEO Markups.breadcrumb')


    </div>





    <div v-if="BSModel=='E-commerce' ">

        @include('layouts.FrontCDN.framework.vue.Ecom.searchbarresults')
    </div>


    <div v-else>
        @include('layouts.FrontCDN.framework.vue.Blog.searchbarresults')
    </div>
@else
    <div class="clear"> </div>


    <br />
    <br />


    @include('layouts.FrontCDN.framework.vue.slider')


    @include('layouts.FrontCDN.framework.vue.cover')


    <!--End  header component -->

    <div id="Gallery" :class="{ displayGallery: isdisplay }">



        <h1> Gallery </h1>


        @include('layouts.FrontCDN.framework.vue.Gallery')



    </div>


    <section class="fultopic" style='background:unset;' :class="{ displayfultopic: isdisplay }">

        <div v-if="Breadcrumbs=='Active' ">

            <!--  breadcrumb  component -->

            @include('layouts.FrontCDN.framework.vue.SEO Markups.breadcrumb')

            <!-- End  breadcrumb  component -->


        </div>


        <!--  Content   Component-->
        <div v-if="BSModel=='E-commerce' ">


            @include('layouts.FrontCDN.framework.vue.Ecom.ECOM')

            <article class="paragraph">@include('layouts.FrontCDN.framework.vue.Blog.paragraph')</article>
            <article class="topic">@include('layouts.FrontCDN.framework.vue.Blog.topic')</article>
            <article class="static_box">@include('layouts.FrontCDN.framework.vue.Blog.static')</article>
            <article class="categories" style="opacity: 50;">@include('layouts.FrontCDN.framework.vue.Blog.box2')</article>

        </div>


        <div v-else>

            <article class="paragraph">@include('layouts.FrontCDN.framework.vue.Blog.paragraph')</article>
            <article class="topic">@include('layouts.FrontCDN.framework.vue.Blog.topic')</article>
            <article class="static_box">@include('layouts.FrontCDN.framework.vue.Blog.static')</article>
            <article class="categories" style="opacity: 50;">@include('layouts.FrontCDN.framework.vue.Blog.box2')</article>

        </div>




        <!--  End  Content   Component-->
@endif
<!-- end favicon  and  apple touch   -->


<!--  Footer Component-->


</section>


<div class="clear"></div>
<Br />
<Br />
@include('layouts.FrontCDN.framework.vue.footer')
