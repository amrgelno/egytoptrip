<section id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;" dir='ltr' v-if="lang == 'en_gb' ">


    <nav id="navCss" class="navbar navbar-expand-lg shadow-lg" :style="{ background: navcolor }">

        &nbsp;
        &nbsp;
        &nbsp;
        <div class='lang' dir='ltr'>
            <i class="bi bi-globe">
            </i>
            <a href='?lang=ar'>
                العربية
                Ar</a>
        </div>


        <div v-if="Admin_user  != '' ">
            <input type="color" name="navcolor" class="hint--left" id='navcolor' aria-label="navcolor"
                v-model='navcolor' onchange='changenavcolor();'>
        </div>


        <div class="container">

            <template v-for="(data,i) in Maxcompanyid" :key="i">

                <a class="navbar-brand" href="{{ route('index') }}">


                    <img :src="'Front/IMG/' + data.path_pic" class="logo img-fluid" :alt="data.Comp_Name">

                    <span>
                        @{{ data.Comp_Name }}
                        <small>@{{ data.Business }}</small>
                    </span>

                </a>

            </template>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNav">
                <ul class="navbar-nav ms-auto">


                    @include('layouts.FrontCDN.framework.vue.page_Editor.nav')



                    <div v-for="(navitem,i) in nav" :key="i">

                        <li class="nav-item" v-if="navitem.footer  == Null  && navitem.Active == 'nav'">
                            <a class="nav-link click-scroll "
                                :href="'?MainM_ID=' + navitem.id +
                                    '&lang=' + lang">@{{ navitem.sub1menu }}</a>
                                                                                                                                                                                                                                                                                                                            </li>


                                                                                                                                                                                                                                                                                                                            <li class="nav-item dropdown"
                                                                                                                                                                                                                                                                                                                                                                                                            v-else>

                                                                                                                                                                                                                                                                                                                                                                                                            <a class="nav-link click-scroll dropdown-toggle" id="top" href="#top" role="button"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            data-bs-toggle="dropdown"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            aria-expanded="false"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            v-if="  navitem.Active == 'nav '">
                                @{{ navitem.sub1menu }}
                            </a>


                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">

                                <li v-for="(itemsub,i) in nav_sub" :key="i"
                                    v-if="itemsub.parent_id  ==   navitem.id ">


                                    <a class="dropdown-item" itemprop="url" v-if="itemsub.footer  == Null"
                                        :href="'?MainM_ID=' + itemsub.id">

                                        @{{ itemsub.Ar_sub1menu }}
                                    </a>

                                </li>

                            </ul>

                        </li>
                    </div>


                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn inactive" href="?Donate='Donate '">
                            Donate
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>












<section id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;" dir='rtl' v-if="lang == 'ar' ">



    <nav id="navCss" class="navbar navbar-expand-lg   shadow-lg" :style="{ background: navcolor }">

        &nbsp;
        &nbsp;
        &nbsp;
        <div class='lang' dir='ltr'>
            <i class="bi bi-globe">
            </i>
            <a href='?lang=en_gb'>
                الأنجيليزية
                EN</a>
        </div>


        <div v-if="Admin_user  != '' ">
            <input type="color" name="navcolor" class="hint--left" id='navcolor' aria-label="navcolor"
                v-model='navcolor' onchange='changenavcolor();'>
        </div>


        <div class="container">

            <template v-for="(data,i) in Maxcompanyid" :key="i">

                <a class="navbar-brand" href="{{ route('index') }}">


                    <img :src="'Front/IMG/' + data.path_pic" class="logo img-fluid" :alt="data.Comp_Name">

                    <span>
                        @{{ data.Comp_Name }}
                        <small>@{{ data.Business }}</small>
                    </span>

                </a>

            </template>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  me-sm-5  ms-auto">


                    @include('layouts.FrontCDN.framework.vue.page_Editor.nav')



                    <div v-for="(navitem,i) in nav" :key="i">

                        <li class="nav-item" v-if="navitem.footer  == Null  && navitem.Active == 'nav'">
                            <a class="nav-link click-scroll "
                                :href="'?MainM_ID=' + navitem.id +
                                    '&lang=' + lang">@{{ navitem.Ar_sub1menu }}</a>




                                                                                                                                                                                                                                                                                                                            </li>


                                                                                                                                                                                                                                                                                                                            <li class="nav-item dropdown"
                                                                                                                                                                                                                                                                                                                                                                                                            v-else>

                                                                                                                                                                                                                                                                                                                                                                                                            <a class="nav-link click-scroll dropdown-toggle" id="top" href="#top" role="button"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            data-bs-toggle="dropdown"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            aria-expanded="false"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            v-if="  navitem.Active == 'nav '">
                                @{{ navitem.Ar_sub1menu }}
                            </a>


                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">

                                <li v-for="(itemsub,i) in nav_sub" :key="i"
                                    v-if="itemsub.parent_id  ==   navitem.id ">


                                    <a class="dropdown-item" itemprop="url" v-if="itemsub.footer  == Null"
                                        :href="'?MainM_ID=' + itemsub.id">

                                        @{{ itemsub.Ar_sub1menu }}
                                    </a>

                                </li>

                            </ul>

                        </li>
                    </div>


                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn inactive" href="?Donate='Donate '">
                            Donate
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>


















@if (auth::guard('admin')->check())
    <script type="text/javascript">
        //DOM  AND OBJECT data


        new Vue({

            el: "#navCss",

            data: {

                navcolor: null,


            }

        })
    </script>





    <script type="text/javascript">
        function changenavcolor(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    ulcolor: $('#navcolor').val(),


                },



                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data, status) {
                    console.log(
                        data
                    );
                    console.log(
                        status
                    );
                    console.log(
                        xhr
                    );
                }

            });


        }
        @endif
    </script>


    <script>
        function loading() {



            document.querySelector('#top').click();

        }
    </script>
