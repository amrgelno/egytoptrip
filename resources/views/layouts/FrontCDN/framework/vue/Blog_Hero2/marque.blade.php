<section class="marque" style='display:flex;'>
    <div class="news col-3" style='font-size:15px;  text-align: center'> Balloon flights throw the week </div>
    <marquee direction="up" behavior="scroll" loading='lazy' bgcolor="#CCCCCC" scrollamount="1" font-size="25px"
        class='col-9' height="20px">
        <div align="center" v-for="(marqitem,i) in  marque" :key="i">

            <a>@{{ marqitem.NEWS }}</a>

            <br />
            <br />
            <br />

        </div>
    </marquee>
</section>
