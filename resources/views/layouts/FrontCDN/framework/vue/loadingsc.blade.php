 <div class="loadingscreen col-12"
     style='position:fixed;    background:white;  height: 100%;     opacity: 1.0;  z-index:50'>

     <div class='Loading-icon row '>


         @if (empty($_GET['MainM_ID']) & empty($_GET['box_ID']) & empty($_GET['Topic_ID']) & empty($_GET['PURCHASE']))
             @include('layouts.FrontCDN.framework.vue.preloader')
         @elseif (@$_GET['MainM_ID'])
             <img src='Front/IMG/loading.gif' width='5px' Height='5px' />

             <img src='Front/IMG/SunriseBalloon2 Logo.svg' width='350px' Height='450px' />
         @elseif(@$_GET['box_ID'] && @$_GET['Destinations'])
             <img src='Front/IMG/loading.gif' width='5px' Height='5px' />

             <img src='Front/IMG/box_id.svg' width='350px' Height='450px' />
         @elseif(@$_GET['box_ID'] && @!$_GET['Destinations'])
             <img src='Front/IMG/loading.gif' width='5px' Height='5px' />

             <img src='Front/IMG/topic_id.svg' width='350px' Height='450px' />
         @elseif(@$_GET['PURCHASE'])
             <img src='Front/IMG/loading.gif' width='5px' Height='5px' />

             <img src='Front/IMG/invoice.svg' width='350px' Height='450px' />
         @endif
     </div>


 </div>
