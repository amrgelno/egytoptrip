<header class="site-header ">
    <div class="row">

        <div class="col-lg-8 col-12 d-flex flex-wrap" v-for="(data,i) in Maxcompanyid" :key="i">
            <p class="d-flex  me-5 ms-1  mb-0">

                <i class="bi-geo-alt me-2"></i>
                @{{ data.Address }}<span>,</span>@{{ data.city }} <span>,</span>@{{ data.country }}
            </p>
            <p class="d-flex mb-0">
                <i class="bi-envelope me-2"></i>

                <a :href="'mailto:' + data.Email">

                    @{{ data.Email }}
                </a>
            </p>
        </div>

        <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
            <ul class="social-icon">
                <li class="social-icon-item" v-for="(data,i) in social" :key="i">
                    <a :href="data.links" :class="data.social_icon"></a>
                </li>
            </ul>
        </div>

    </div>
</header>
