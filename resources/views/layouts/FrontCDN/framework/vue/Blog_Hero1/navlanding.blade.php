<section id="sticky-wrapper" :style="{ direction: pg_dir }" class="sticky-wrapper" style="height: 90px;">


    <nav class="navbar navbar-expand-lg shadow-lg" :style="{ background: menucolor }">

        &nbsp; &nbsp; &nbsp; <div class='col-lg-1 lang' :style="{ direction: pg_dir }">

            <i class="bi bi-globe"> </i> <a
                @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang'])) href='?lang=ar'  @else   href='?lang=en_gb' @endif>

                <span v-if="lang == 'en_gb'"> العربية-Ar</span>

                <span v-if="lang == 'ar' "> الأنجيليزية
                    EN</a></span>

        </div>


        @include('layouts.FrontCDN.framework.vue.page_Editor.color_Editor.Mainmenucolor')



        <div class="container">

            <template v-for="(data,i) in Maxcompanyid" >

                <a class="navbar-brand" href="{{ route('index') }}">


                    <img :src="'Front/IMG/' + data.path_pic" class="logo img-fluid" :alt="data.Comp_Name">

                    <span>
                        @{{ data.Comp_Name }}
                        <small>@{{ data.Business }}</small>
                    </span>

                </a>

            </template>

            <button class="navbar-toggler" type="button" @click='isdisplay =  !isdisplay'>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id='navbarNav' class='row  d-none d-lg-block' :class="{ displaynav: isdisplay }">
                <ul class="navbar-nav ms-auto">


                    @include('layouts.FrontCDN.framework.vue.page_Editor.nav')



                    <template v-for="(navitem,i) in nav" >

                        <li class="nav-item" v-if="navitem.footer  == Null  && navitem.Active == 'nav'">
                            <a class="nav-link click-scroll "
                                :href="'?MainM_ID=' + navitem.id +
                                    '&lang=' + lang">

                                    <span v-if="lang == 'en_gb'">
                                @{{ navitem.sub1menu }}</span>

                                <span v-if="lang == 'ar' "> @{{ navitem.Ar_sub1menu }}</span></a>
                        </li>


                        <li class="nav-item dropdown" v-else>

                            <a class="nav-link click-scroll dropdown-toggle" id="top" href="#top"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                v-if="  navitem.Active == 'nav'">
                                <span v-if="lang == 'en_gb'"> @{{ navitem.sub1menu }}</span>

                                <span v-if="lang == 'ar' "> @{{ navitem.Ar_sub1menu }}</span>
                            </a>


                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <template v-for="(itemsub,i) in nav_sub" 
                                    v-if="itemsub.parent_id  ==   navitem.id ">

                                    <li v-if="itemsub.footer  == Null  &&  itemsub.Active == 'nav'">

                                        <a class="dropdown-item" itemprop="url" :href="'?MainM_ID=' + itemsub.id">


                                            <span v-if="lang == 'en_gb'"> @{{ itemsub.sub1menu }}</span>

                                            <span v-if="lang == 'ar' "> @{{ itemsub.Ar_sub1menu }}</span></a>



                                    <li class="dropdown-item dropdown" v-else>

                                        <a class="dropdown-item" id="top" href="#top" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            v-if=" itemsub.Active == 'nav'">
                                            <span v-if="lang == 'en_gb'"> @{{ itemsub.sub1menu }} <span>»</span> </span>

                                            <span v-if="lang == 'ar' "> @{{ itemsub.Ar_sub1menu }} <span>»</span> </span>
                                        </a>



                                        <ul class="submenu dropdown-menu" aria-labelledby="navbarLightDropdownMenuLink">


                                            <li v-for="(item_tree,i) in  nav_subm" :key="item_tree.id"
                                                v-if="item_tree.SUBMENUID  ==   itemsub.id ">


                                                <a class="dropdown-item" itemprop="url" v-if="item_tree.footer  == Null"
                                                    :href="'?MainM_ID=' + item_tree.id">

                                                    <span v-if="lang == 'en_gb'"> @{{ item_tree.sub1menu }}</span>

                                                    <span v-if="lang == 'ar' "> @{{ item_tree.Ar_sub1menu }}</span></a>


                                            </li>

                                        </ul>

                                    </li>
                                </template>
                            </ul>

                        </li>
                    </template>


                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn inactive"
                            href="{{ route('member.Login') }}">
                            <span v-if="lang == 'en_gb'"> login</span>

                            <span v-if="lang == 'ar' "> أشترك الان</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

@if (auth::guard('admin')->check())


<script>

 function changeulcolor(e) {


        $.ajax({

            method: "GET",

            url: "{{ route('QuikEditstyle') }}",

            data: {

                ulcolor: $('#ulcolor').val(),


            },



            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function(data, status) {
                console.log(data);
                console.log(status);
                console.log(xhr);
            }

        });


    }


    function changeFontcolor(e) {


        $.ajax({

            method: "GET",

            url: "{{ route('QuikEditstyle') }}",

            data: {

                Fontcolor: $('#Fontcolor').val(),

            },



            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function(data, status) {
                console.log(data);
                console.log(status);
                console.log(xhr);
            }

        });


    }


    function changesub1color(e) {


        $.ajax({

            method: "GET",

            url: "{{ route('QuikEditstyle') }}",

            data: {

                sub1color: $('#sub1color').val(),


            },



            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            success: function(data, status) {
                console.log(data);
                console.log(status);
                console.log(xhr);
            }

        });


    }




    

</script>



@endif
