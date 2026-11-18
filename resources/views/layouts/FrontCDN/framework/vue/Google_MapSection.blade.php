<br />

<div class="program_itinerary_all" style="display: block; overflow-x: hidden;" loading="lazy">
    <div class="row">
        <div class="col-md-12" id="map" style="width:70%; height:280px;     margin: 0 auto;"></div>

        {{-- <div v-for="(data,i) in Maxcompanyid" :key="data.id">

            <input type="hidden" id="latitude" :value="data.GM_latitdue">
            <input type="hidden" id="longitude" :value="data.GM_longitude">
            <input type="hidden" id="complocation" :value="data.Address">


        </div> --}}

        @php

            $compaines = 'select * from companies where  id = (select max(id)from companies)';

            include 'Front/css/con_db2.php';

            $exe = mysqli_query($connect, $compaines);

            if ($row = mysqli_fetch_array($exe)) {
                $Comp_Name = $row['Comp_Name'];
                $GM_latitdue = $row['GM_latitdue'];
                $GM_longitude = $row['GM_longitude'];
            }

        @endphp



        <input type="hidden" id="latitude" value=@php echo $GM_latitdue; @endphp>
        <input type="hidden" id="longitude" value=@php echo $GM_longitude; @endphp>
        <input type="hidden" id="complocation" value=@php echo $Comp_Name; @endphp>


    </div>
</div>


<!--<embed src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></embed>-->
