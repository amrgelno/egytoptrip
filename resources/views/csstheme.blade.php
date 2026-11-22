<style>

.swiper-slide {display:grid !important;}
.swiper-wrapper{min-width:0 !important;}

     :root {
            --bgimage: Front/IMG/
        }

        [v-cloak]>* {

            display: none;

        }

#app{
display:none;
direction: ltr;
}

        .container-fluid {
            padding-right: unset;
            padding-left: unset;
            overflow-x: hidden;
        }


        .gt_switcher-popup:active .gt_white_content{

            display:block;
        }

.featured-block {

    height: auto;
  padding-bottom: 11px;

}

.topic-FRAME #Accordion1{


    border-top: 0.2px solid #000;

}


.topic-FRAME .AccordionPanelContent{
 border-left: 0.2px solid #000;
 background: #feb251;
}




.topic-FRAME .AccordionPanel {
    display: flex;
    flex-direction: row;

    flex-direction: row;
    /* align-content: center; */
    justify-content: center;
    align-items: center;
}


.topic-FRAME .AccordionPanelTab {
    border-radius: 87px;
background-color: unset;
border-top:unset;
border-bottom: unset;
width: 200px;

}

.topic-FRAME .AccordionPanelTab:focus-within {
    background: unset!important;
}


.topic-FRAME .Accordine-bt:active{ width: 100px;
background-color: unset;
 }





</style>









@if (@$_GET['MainM_ID'])

     <link href='Front/css/navlinks-min.css' rel="preload" fetchpriority="high" as='style' onload='this.rel="stylesheet"'>

        <link href='Front/css/bootstrap-icons.woff2?30af91bf14e37666a085fb8a161ff36d' rel="preload" fetchpriority="high" type="font/woff2" crossorigin>
          <link href='https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.pgV-E-68K-A.L.W.O/am=AMA/d=0/rs=AN8SPfo2HeflihKMbfgwV84pq3lzEm8ziw/m=el_main_css
' rel="preconnect"  as='style' onload='this.rel="stylesheet"'   crossorigin>
   <link href='https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.pgV-E-68K-A.L.W.O/am=AMA/d=0/rs=AN8SPfo2HeflihKMbfgwV84pq3lzEm8ziw/m=el_main_css' rel="preconnect"  as='style' onload='this.rel="stylesheet"'   crossorigin>
        <link href='https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.pgV-E-68K-A.L.W.O/am=gMA/d=0/rs=AN8SPfpszKJssl6IA0boGClFdsaAZGtXEQ/m=el_main_css' rel="preconnect"  as='style' onload='this.rel="stylesheet"'   crossorigin>
          <link href='https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.pgV-E-68K-A.L.W.O/am=AMA/d=0/rs=AN8SPfo2HeflihKMbfgwV84pq3lzEm8ziw/m=el_main_css'
 rel="preconnect"  as='style' onload='this.rel="stylesheet"'   crossorigin>


@ELSEIF (@$_GET['box_ID'])
    @if (@$_GET['Destinations'])

        <link href='Front/css/boxlinks-min.css' rel="preload"  as='style' fetchpriority="high" onload='this.rel="stylesheet"'>

    @elseif (@$_GET['PURCHASE'])

         <link href="Front/css/boxlinks3-min.css" rel="preload"  as='style' fetchpriority="high" onload='this.rel="stylesheet"'>
    @else
    <link href="Front/css/boxlinks2-min.css" rel="preload"  fetchpriority="high" as='style' onload='this.rel="stylesheet"'>

    @endif
@ELSEIF (@$_GET['Topic_ID '])


     <link href='Front/css/topiclinks-min.css' rel="preload" fetchpriority="high" as='style' onload='this.rel="stylesheet"'>

    @ELSEIF (@$_GET['Reviews'])


      <link href='Front/css/ReviewForm.css' rel="preload" fetchpriority="high"  as='style' onload='this.rel="stylesheet"'>

        <link href="Front/css/boxlinks3-min.css" rel="preload"  fetchpriority="high" as='style' onload='this.rel="stylesheet"'>


@else
    <link href='Front/css/navlinks-min.css' rel="preload"  fetchpriority="high" as='style' onload='this.rel="stylesheet"'>
@endif
