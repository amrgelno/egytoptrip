<section class="marque row" style='display:flex;'>
    <div class="news col-lg-3 col-xs- 7" style='font-size:15px;  text-align: center'> Balloon flights throw the week
    </div>
    <marquee direction="up" behavior="scroll" loading='lazy' bgcolor="#CCCCCC" scrollamount="1" font-size="25px"
        class='col-lg-9 col-xs-5' height="20px">
        <div align="center" v-for="(marqitem,i) in  marque" :key="i">

            <a>@{{ marqitem.NEWS }}</a>

            <br />
            <br />
            <br />

        </div>
    </marquee>
</section>
