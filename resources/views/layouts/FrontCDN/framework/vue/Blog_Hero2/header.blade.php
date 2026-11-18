<header class="site-header ">

    <div class="row" style='display:grid;  justify-content: center; '>

        <template v-for="(data,i) in Maxcompanyid">

            <a class="navbar-brand" href="{{ route('index') }}">


                <img :src="'Front/IMG/' + data.path_pic" class="logo img-fluid" :alt="data.Comp_Name">


                <span style='color:black'>
                    @{{ data.Comp_Name }}
                </span>


            </a>

        </template>

    </div>
</header>
