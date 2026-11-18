@php

    $compaines = 'select * from companies where  id = (select max(id)from companies)';

    include 'Front/css/con_db2.php';

    $exe = mysqli_query($connect, $compaines);

    if ($row = mysqli_fetch_array($exe)) {
        $logo = $row['path_pic'];
        $alt= $row['Comp_Name'];
    }

@endphp



<div>
    <div style='display:grid;  justify-content: center;  '>

<picture>
  <source media="(min-width: 1200px)" :srcset="'Front/IMG/@php echo   $logo; @endphp" type="image/webp">
  <source media="(min-width: 800px)" :srcset="'Front/IMG/@php echo   $logo; @endphp"  type="image/webp">
  <source media="(min-width: 400px)" :srcset="'Front/IMG/@php echo   $logo; @endphp"  type="image/webp">


<embed  decoding="async"  loading='eager' src="Front/IMG/@php echo   $logo; @endphp" alt='@php echo    $alt; @endphp' width='250px' Height='250px' class="img-fluid"
style='margin-top:50%' >


 </picture>






    <link rel="preload"   fetchpriority="high" as="image" href="Front/IMG/@php echo   $logo; @endphp"  type="image/webp">





    </div>


    <div  class='point-All' style='display: flex; margin: 0px 50;align-items: center; /*padding:20px;*/ justify-content: center;'>
        <div class="point">
            <div class="poin"></div>
        </div>
        <div class="point2"></div>
        <div class="point3"></div>
    </div>

</div>



{{-- <div width='350px' Height='450px'  style="background-Image:url('Front/IMG/@php echo   $logo; @endphp'); background-size: cover;
   background-size: contain;
    background-repeat: no-repeat;
    width: 119px;
    height: 50px;">  </div> --}}
