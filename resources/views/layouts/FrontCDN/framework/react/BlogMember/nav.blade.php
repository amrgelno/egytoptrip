<!--<div itemscope itemtype="https://schema.org/Person">   </div>
    -->

<div class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12">


    @if (auth::guard('admin')->check())



        <a href="{{ route('nav.index') }}"> <INPUT TYPE='submit' name='instopic' title='boxfeatures' class='insert'
                style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);"
                value /> </a>

    @endif

    <div itemscope>

        <button type="button" class="menu"> ≡ Menu </button>


        <div class='allnav'>


            <ul class="nav">

                <li class="Dropmenu" v-for="(navitem,i) in nav" :key="i">

                    <img :src="'Front/IMG/' + navitem.submenuico" v-if="navitem.submenuico  != Null " class="Micon" />

                    <a itemprop="url" class='navlink' v-if="navitem.footer  == Null " :href="'?MainM_ID=' + navitem.id">

                        <span itemprop="name"> @{{ navitem.sub1menu }} </span> </a>

                    <span v-if="navitem.footer  != Null"> @{{ navitem.sub1menu }} </span>

                    <ul id="submenu">
                        <li class="sub1" v-for="(itemsub,i) in nav_sub" :key="i"
                            v-if="itemsub.parent_id  ==   navitem.id ">

                            <img v-if="itemsub.submenuico  == Null" :src="'Front/IMG/' + itemsub.submenuico"
                                class="Micon" />


                            <a itemprop="url" v-if="itemsub.footer  == Null" :href="'?MainM_ID=' + itemsub.id">

                                <span itemprop="name"> @{{ itemsub.sub1menu }} </span> </a>



                            <span v-if="itemsub.footer   != Null"> @{{ itemsub.sub1menu }} </span>




                            <ul id="TREMENU">

                                <li class="sub2" v-for="(item_tree,i) in  nav_subm" :key="i">

                                    <treemenu v-if="item_tree.SUBMENUID  ==   itemsub.id ">

                                        <img v-if="item_tree.submenuico  == Null"
                                            :src="'Front/IMG/' + item_tree.submenuico" class="Micon" />

                                        <a itemprop="url" v-if="item_tree.footer  == Null"
                                            :href="'?MainM_ID=' + item_tree.id">
                                            <span itemprop="name"> @{{ item_tree.sub1menu }}
                                            </span> </a>
                                    </treemenu>
                                </li>

                            </ul>

                        </li>
                    </ul>


                </li>
                <li>
                    @if ($SearchBar == 'Active')

                        <form action="{{ route('index') }}" method="get">

                            @csrf
                            @Method('GET')


                            <input type="text" size="25" name="search_input" class="searcher"
                                style="color: black;" />


                            <input type="submit" size="25" name="search_bt" VALUE="search" class="searchbt"
                                style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

                        </form>


                    @endif
                </li>



            </ul>

        </div>

        @if (auth::guard('admin')->check())


            <input type="color" name="bgcolor">



            <a href="{{ route('nav.index') }}"> <INPUT TYPE='submit' name='instopic' title='Editnav' class='insert'
                    style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);"
                    value /> </a>

        @endif

    </div>
</div>


<!-- @foreach ($nav as $navitem)

    <script>
        const links = document.querySelector('.navlink{{ $navitem->id }}');

        if (links.length) {
            links.forEach((link) => {
                link.addEventListener('load', (e) => {
                    links.forEach((link) => {
                        link.classList.remove('active');
                    });
                    //   e.preventDefault();
                    link.classList.add('active');
                });
            });
        }
    </script>
@endforeach -->
