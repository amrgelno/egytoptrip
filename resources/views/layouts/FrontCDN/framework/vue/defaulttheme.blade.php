{{-- @include('layouts.FrontCDN.framework.vue.Blog_Hero.marque') --}}


    @include('layouts.FrontCDN.framework.vue.cover2')
    @include('layouts.FrontCDN.framework.vue.Blog_Hero.packagesDetails')

@include('layouts.FrontCDN.framework.vue.Blog_Hero.packages')





@include('layouts.FrontCDN.framework.vue.Blog_Hero.topic')

<div v-if="navID !='1'">

    @include('layouts.FrontCDN.framework.vue.Blog_Hero.paragraph')

</div>

@include('layouts.FrontCDN.framework.vue.Blog_Hero.cards')

<div v-if="navID == '1'">

    @include('layouts.FrontCDN.framework.vue.Blog_Hero.volunteer')

</div>


{{-- <img src="Front/IMG/shape5.png"
    width='70px' height='50px'> --}}

@include('layouts.FrontCDN.framework.vue.Blog_Hero.box2x1')


<img src="Front/IMG/silhouette-of-hot-air-balloon-air-transport-for-travel-isolated-on-white-background-vector.jpg"
    width='70px' height='50px'>


{{-- <template v-for="(item,i) in fpforms">


    <!--<div v-if="item.FormType == 'Contact_form'"> @include('layouts.FrontCDN.framework.vue.Form2') </div>-->


</template> --}}



@php

    if (!@$_GET['box_ID'] && !@$_GET['Topic_ID']) {
        $navID = $_GET['MainM_ID'] ?? '1';
    }

@endphp



{{-- @if (@$navID == '1')
    @include('layouts.FrontCDN.framework.vue.Blog_Hero.youtube')
@endif --}}




{{-- @include('layouts.FrontCDN.framework.vue.Blog_Hero.box') --}}


{{--
            @include('layouts.FrontCDN.framework.vue.Blog_Hero.volunteer') --}}

<div v-if="navID == '1'">


    @include('layouts.FrontCDN.framework.vue.Blog_Hero.tetimonialslider')

    {{-- @include('layouts.FrontCDN.framework.vue.Google_MapSection') --}}

</div>

&nbsp; @include('layouts.FrontCDN.framework.vue.scrollUp')<br />
