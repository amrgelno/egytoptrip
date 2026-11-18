<!--<div itemscope itemtype="https://schema.org/Person">   </div>
    -->

<div class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12">


    <div itemscope>

        <button type="button" class="menu"> ≡ Menu </button>


        <div class='socialmedia'>
            @foreach ($social as $allitem)
                <li class="icon" style="filter: brightness(2) invert(2);">

                    <a href="{{ $allitem->links }}">

                        <img src="Front/IMG/{{ $allitem->social_icon }} " class="soc_icon" />

                    </a>

                </li>
            @endforeach

        </div>


        <div id="headerlogo" class='img-responsive'>
            @foreach ($Maxcompanyid as $Maxid)
                <img src="Front/IMG/{{ $Maxid->path_pic }}" id="logo" />
            @endforeach
        </div>


        <ul class="nav">

            @foreach ($nav as $item)
                <li class="Dropmenu">

                    @if (!empty($item->submenuico))
                        <img src="Front/IMG/{{ $item->submenuico }}" class="Micon" />
                    @endif

                    @if (empty($item->footer))
                        <a itemprop="url" class='navlink' href="index.php?MainM_ID={{ $item->id }}">
                            <span itemprop="name"> {{ $item->sub1menu }} </span> </a>
                    @elseif(!empty($item->footer))
                        {{ $item->sub1menu }}


                        <ul id="submenu">

                            @foreach ($nav_sub as $item_sub)
                                <li class="sub1">

                                    @if ($item_sub->parent_id == $item->id)
                                        @if (!empty($item_sub->submenuico))
                                            <img src="Front/IMG/{{ $item_sub->submenuico }}" class="Micon" />
                                        @endif

                                        @if (empty($item_sub->footer))
                                            <a itemprop="url" href="index.php?MainM_ID={{ $item_sub->id }}">
                                                <span itemprop="name"> {{ $item_sub->sub1menu }} </span> </a>
                                        @endif
                                    @endif

                                    @if (!empty($item_sub->footer))
                                        {{ $item_sub->sub1menu }}


                                        <ul id="TREMENU">

                                            @foreach ($nav_subm as $item_tree)
                                                @if ($item_tree->SUBMENUID == $item_sub->id)
                                                    <li class="sub2">

                                                        @if (!empty($item_tree->submenuico))
                                                            <img src="Front/IMG/{{ $item_tree->submenuico }}"
                                                                class="Micon" />
                                                        @endif

                                                        @if (empty($item_tree->footer))
                                                            <a itemprop="url"
                                                                href="index.php?MainM_ID={{ $item_tree->id }}">
                                                                <span itemprop="name"> {{ $item_tree->sub1menu }}
                                                                </span> </a>
                                                        @endif
                                                @endif
                                            @endforeach

                                </li>

                        </ul>
                    @endif
            @endforeach




            </li>





        </ul>
        @endif
        @endforeach
        </li>
        <li>
            <form action="Blog" method="get">

                <input type="search" size="25" name="search" class="searcher" style="color: black;" />


                <input type="submit" size="25" name="search" VALUE="بحث" class="searchbt"
                    style="color: black;  background:url(IMG/seach.png); background-size:cover; background-position:center; background-repeat:no-repeat;" />

            </form>
        </li>



        </ul>


    </div>
</div>



<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h4>SEO Dream <img src="Front\IMG\logo-icon.png" alt=""></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#features">Features</a></li>
                        <li class="scroll-to-section"><a href="#about">About Us</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                        <li class="scroll-to-section">
                            <div class="main-blue-button"><a href="#contact">Get Your Quote</a></div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
