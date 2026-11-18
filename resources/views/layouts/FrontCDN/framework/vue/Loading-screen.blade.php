@php

    $compaines = 'select * from companies where  id = (select max(id)from companies)';

    include 'Front/css/con_db2.php';

    $exe = mysqli_query($connect, $compaines);

    if ($row = mysqli_fetch_array($exe)) {
        $logo = $row['path_pic'];
    }

@endphp



 <div class="loadingscreen col-12"
     style='position:fixed;      /*overflow: hidden;*/   background:white; width:100%; height: 100%;     opacity: 1.0;  z-index:50'>

     <div class='Loading-icon'>

   @include('layouts.FrontCDN.framework.vue.preloader')

     </div>


 </div>

