    <div id='NAVCSS' class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12" v-if="lang  == '' "
        :style="{ background: menucolor }">


        @include('layouts.FrontCDN.framework.vue.page_Editor.nav')

        <div id='navmassage'> </div>

        <div itemscope>

            <button type="button" class="menu"> ≡ Menu </button>
            <span v-if="BSModel=='E-commerce' ">

                <div class='membersYs' v-if="member_user  != '' ">

                    <form action="{{ route('woocom') }}" method='post' style='display:flex;'>

                        @csrf

                        <li style="filter: brightness(2) invert(2);">
                            <button type="submit" style="background:none; border:none;">
                                <img src="Front/ICON/cart.png" class="soc_icon" />
                            </button>
                        </li>

                        <li>
                            <a href="{{ route('member.Dashboard') }}">
                                @{{ member_user }}
                            </a>

                            <input type='hidden' name='member' style="background:unset;  border:unset"
                                :value="member_id">

                            <div id='cart'>

                                @{{ count_fav_product }}

                            </div>
                    </form>

                </div>

                <div class="membersYs" v-else-if="member_user  == '' ">

                    <li>

                        <a href="{{ route('member.Login') }}">
                            تسجيل دخول </a>
                    </li>

                    <li>
                        <a href="{{ route('member.register') }}">الاشتراك بالموقع</a>
                    </li>


                </div>

            </span>


        </div>

        <ul class="nav">

            @include('layouts.FrontCDN.framework.vue.page_Editor.color_Editor.navsubmenu')

            <li class="Dropmenu" v-for="(navitem,i) in nav" :key="i"> <!-- str Nav dev -->

                <img :src="'Front/IMG/' + navitem.submenuico" v-if="navitem.submenuico  != Null " class="Micon" />

                <a itemprop="url" :style="{ color: menufontcolor }" class='navlink' v-if="navitem.footer  == Null "
                    :href="'?MainM_ID=' + navitem.id">

                    <span itemprop="name"> @{{ navitem.sub1menu }} </span> </a>

                <span v-if="navitem.footer  != Null"> @{{ navitem.sub1menu }} </span>

                <ul id="submenu">

                    <li :style="{ background: submenucolor }" class="sub1" v-for="(itemsub,i) in nav_sub"
                        :key="i" v-if="itemsub.parent_id  ==   navitem.id ">

                        <img v-if="itemsub.submenuico  == Null" :src="'Front/IMG/' + itemsub.submenuico"
                            class="Micon" />


                        <a :style="{ color: submenufontcolor }" itemprop="url" v-if="itemsub.footer  == Null"
                            :href="'?MainM_ID=' + itemsub.id">

                            <span itemprop="name"> @{{ itemsub.sub1menu }} </span> </a>



                        <span v-if="itemsub.footer   != Null"> @{{ itemsub.sub1menu }} </span>

                        <ul id="TREMENU">

                            <li class="sub2" v-for="(item_tree,i) in  nav_subm" :key="i">
                                <!-- str nav_subm -->

                                <treemenu v-if="item_tree.SUBMENUID  ==   itemsub.id ">

                                    <img v-if="item_tree.submenuico  == Null"
                                        :src="'Front/IMG/' + item_tree.submenuico" class="Micon" />
                                    <a itemprop="url" v-if="item_tree.footer  == Null"
                                        :href="'?MainM_ID=' + item_tree.id + '&lang=' + lang">
                                        <span itemprop="name"> @{{ item_tree.sub1menu }}
                                        </span> </a>
                                </treemenu>
                            </li> <!-- end nav_subm -->

                        </ul>

                    </li> <!-- end nav_sub -->
                </ul>
            </li> <!-- end nav -->
            <li>

                <form action="{{ route('index') }}" method="get" v-if="SearchBar=='Active' ">

                    @csrf
                    @Method('GET')


                    <input type="text" size="25" name="search_input" class="searcher" style="color: black;" />


                    <input type="submit" size="25" name="search_bt" VALUE="search" class="searchbt"
                        style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

                </form>
            </li>

        </ul>



        @include('layouts.FrontCDN.framework.vue.page_Editor.color_Editor.Mainmenucolor')


    </div>


    <div id='NAVCSS' class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12" v-else-if="lang  == 'Ar' ">

        <div id='navmassage'> </div>

        <div itemscope>

            <button type="button" class="menu"> ≡ Menu </button>


            <span v-if="BSModel=='E-commerce' ">

                <div class='membersYs' v-if="member_user  != '' ">

                    <form action="{{ route('woocom') }}" method='post' style='display:flex;'>

                        @csrf

                        <li style="filter: brightness(2) invert(2);">
                            <button type="submit" style="background:none; border:none;">
                                <img src="Front/ICON/cart.png" class="soc_icon" />
                            </button>
                        </li>

                        <li>
                            <a href="{{ route('member.Dashboard') }}">
                                @{{ member_user }}
                            </a>

                            <input type='hidden' name='member' style="background:unset;  border:unset"
                                :value="member_id">

                            <div id='cart'>

                                @{{ count_fav_product }}

                            </div>
                    </form>

                </div>

                <div class="membersYs" v-else-if="member_user  == '' ">

                    <li>

                        <a href="{{ route('member.Login') }}">
                            تسجيل دخول </a>
                    </li>

                    <li>
                        <a href="{{ route('member.register') }}">الاشتراك بالموقع</a>
                    </li>


                </div>

            </span>

        </div>

        <ul class="nav">

            <li class="Dropmenu" v-for="(navitem,i) in nav" :key="i">

                <img :src="'Front/IMG/' + navitem.submenuico" v-if="navitem.submenuico  != Null " class="Micon" />

                <a itemprop="url" class='navlink' v-if="navitem.footer  == Null "
                    :href="'?MainM_ID=' + navitem.id + '&lang=' + lang">

                    <span itemprop="name"> @{{ navitem.Ar_sub1menu }} </span> </a>

                <span v-if="navitem.footer  != Null"> @{{ navitem.Ar_sub1menu }} </span>

                <ul id="submenu">
                    <li class="sub1" v-for="(itemsub,i) in nav_sub" :key="i"
                        v-if="itemsub.parent_id  ==   navitem.id ">

                        <img v-if="itemsub.submenuico  == Null" :src="'Front/IMG/' + itemsub.submenuico"
                            class="Micon" />


                        <a itemprop="url" v-if="itemsub.footer  == Null"
                            :href="'?MainM_ID=' + itemsub.id + '&lang=' + lang">

                            <span itemprop="name"> @{{ itemsub.Ar_sub1menu }} </span> </a>



                        <span v-if="itemsub.footer   != Null"> @{{ itemsub.Ar_sub1menu }} </span>




                        <ul id="TREMENU">

                            <li class="sub2" v-for="(item_tree,i) in  nav_subm" :key="i">

                                <treemenu v-if="item_tree.SUBMENUID  ==   itemsub.id ">

                                    <img v-if="item_tree.submenuico  == Null"
                                        :src="'Front/IMG/' + item_tree.submenuico" class="Micon" />

                                    <a itemprop="url" v-if="item_tree.footer  == Null"
                                        :href="'?MainM_ID=' + item_tree.id + '&lang=' + lang">
                                        <span itemprop="name"> @{{ item_tree.Ar_sub1menu }}
                                        </span> </a>
                                </treemenu>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>
            <li>

                <form action="{{ route('index') }}" method="get" v-if="SearchBar=='Active' ">

                    @csrf
                    @Method('GET')


                    <input type="text" size="25" name="search_input" class="searcher"
                        style="color: black;" />


                    <input type="submit" size="25" name="search_bt" VALUE="search" class="searchbt"
                        style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

                </form>
            </li>

        </ul>

    </div>

    </div>

    </div>




    <script v-if="Admin_user  != '' ">
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
