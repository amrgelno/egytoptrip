<section class="fultopic" style='background:unset;'>
    <div class="card-body" v-for="(data,i) in nav2" :key="i">
        <h5 class="card-title"><a :href="'index.php?MainM_ID=' + data.id"> @{{ data.sub1menu }} </a></h5>

        <p class="card-text"> @{{ data.description }}</p>

    </div>



    <div class="card-body" v-for="(data,i) in box" :key="i">

        <h5 class="card-title"><a :href="'index.php?box_ID=' + data.id"> @{{ data.title }} </a></h5>

        <p class="card-text">
            @{{ data.description }}
        </p>

    </div>

    <div class="card-body" v-for="(data,i) in topic" :key="i">
        <h5 class="card-title"><a :href="'index.php?Topic_ID=' + data.ID"> @{{ data.title }} </a></h5>

        <p class="card-text">
            @{{ data.description }}
        </p>

    </div>


</section>
