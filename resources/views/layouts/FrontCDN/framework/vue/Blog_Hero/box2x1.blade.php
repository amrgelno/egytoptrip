<section id="Features" class="features section" dir='ltr' style="margin-top: 50px;">


@include('layouts.FrontCDN.framework.vue.page_Editor.box1')

<div class="container">
<div class="row">


<div class="col-lg-12 col-12 text-center mb-4" v-for="(boxitem,i) in  box" :key="i"
v-if=" boxitem.BOX_STYLE =='BOXModel1'  &&   boxitem.cat_Name  !=Null ">
<img src="Front/IMG/copyright_decor.webp"
width='170px' height='50px'>
<h2 style="font-weight: 900 !important; -webkit-text-stroke: 0.69px #e03b31;">

<B v-if="lang  =='en_gb'" v-html='boxitem.cat_Name'> </B>
<B v-if="lang  =='ar'" v-html='boxitem.Ar_cat_Name'> </B>

</h2>

</div>


<section class="swipercard_aria home_2">


<div class="swiperpricecard col-md-12" style='overflow-x:hidden;'>

<div slides-per-view="4" class="swiper-wrapper">

<div class="swiper-slide    col-lg-3  col-md-3 " v-for="(boxitem,i) in  box"
:key="i" v-if="boxitem.BOX_STYLE =='BOXModel1'">


<div class="custom-block-wrap box  col-lg-11  col-xs-6"
style='margin:20px; border-radius: 50px; height:440px;'>

<img :src="'Front/IMG/' + boxitem.ImageName" class="featured-block-image img-fluid "
:alt="boxitem.title" style='object-fit:cover;  width:-webkit-fill-available; position: relative; height:440px;'>


<div class="backface  ms-1" loading='lazy'
style='display: flex;flex-direction: column;
top: 60%;
left: 50%;
transform: translate(-50%, -50%);
margin: 0;'>
<span class="d-block col-12 ">

<p class="featured-block-text  col-10 "
style="font-size:14px;  text-align: center;   /*visibility: visible;*/  MARGIN-LEFT: 0in !important; width:fit-content">

<span v-if="lang  =='en_gb'"  style='font-weight: 900 !important; color: white !important;  -webkit-text-stroke: 0.3px black;' v-html='boxitem.title'> </span>
<span v-if="lang  =='ar'"  style='font-weight: 900 !important;  color: white !important;   -webkit-text-stroke: 0.3px black;'  v-html='boxitem.Ar_title'> </span>


<br /> <br /> <br />


{{--
<a
:href="'?PURCHASE=PURCHASE' +
'&lang='+lang+' & price ='+boxitem.price" style='color:#82cae6 !important; font-weight: 600!important;  -webkit-text-stroke: 0.3px black;'>PURCHASE
</a> --}}
<br /> <br />

<template v-for="(data,i) in Maxcompanyid" :key="data.id">

<span class="social-icon"
style="border-radius: 100px;  padding:10px; margin-left:10px;  border:1px solid #000; width:100px;"
title="whatsapp">

<a
:href="'//wa.me/+20'+data.Tele_Number+'text=I`mlooking20%to20%book'+ boxitem.title">WA
</a>

</span>

&nbsp;

<span class="social-icon"
style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
title="whatsapp">
<a
:href="'//t.me/+20'+data.Tele_Number+'text=I`mlooking20%to20%book' + boxitem
.title">TA
</a> </span>

<!-- <span class="social-icon"
style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
title="whatsapp">
<a :href="'//wechat.me/+201005385533?' +'text=I`mlooking20%to20%book' + boxitem.title">Wechat
</a> </span>-->


&nbsp;
<span class="social-icon"
style="border-radius: 100px;  padding:10px;  border:1px solid #000; width:100px;"
title="whatsapp">
<a :href="'tel:+20'+data.Tele_Number"> call </a> </span>

</p>




</template>
</span>


<!-- <p v-if="lang  =='en_gb
'"
v-html='boxitem.Desc'>
</p>
<p v-if="lang  =='ar'" v-html='boxitem.Desc'> </p> -->




</span>

</div>
</div>










</div>

</div>

</div>
</section>
</div>
</div>

</section>
