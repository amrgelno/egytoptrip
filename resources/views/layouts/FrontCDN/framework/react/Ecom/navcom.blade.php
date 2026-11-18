@extends('layouts.FrontCDN.framework.react.Ecom.Navreact')

@section('NavCom')

    <div id='NAVCSS' class="menu_v col-lg-12 col-xs-12 col-md-12 col-sm-12">

        <div itemscope>

            <button onClick="shownav()" type="button" class="menu"> ≡ Menu </button>

            <p v-if="BSModel=='commerce' ">
                @if (auth::guard('member')->user())

                    <div class='membersYs'>

                        <form action="{{ route('woocom') }}" method='post'>

                            @csrf


                            <li style="filter: brightness(2) invert(2);">
                                <button type="submit">
                                    <img src="Front/ICON/cart.png" class="soc_icon" />
                                </button>
                            </li>

                            <li>
                                <a href="{{ route('member.Dashboard') }}">
                                    {{ auth::guard('member')->user()->username }}
                                </a>

                                <input type='hidden' name='member' value="{{ auth::guard('member')->user()->id }}">

                                <div id='cart'>
                                    @if (auth()->guard('member')->user()->fav_product)
                                        {{ auth()->guard('member')->user()->fav_product->count('member_id') }}
                                    @endif
                                </div>
                        </form>
                    </div>
                @else
                    <div class="membersYs">

                        <li>

                            <a href="{{ route('member.Login') }}">تسجيل دخول </a>
                        </li>

                        <li>
                            <a href="{{ route('member.register') }}">الاشتراك بالموقع</a>
                        </li>


                    </div>

                @endif
            </p>


        </div>



        <ul class="nav">

            {this.props.nav.map(navitem=>


            <li class="Dropmenu">

                {navitem.submenuico==null? " " : (<img class="Micon" src={Img+navitem.submenuico} />)}

                {navitem.footer==null? (<a class="navlink" href={EnNavext+navitem.id}>

                    {navitem.sub1menu} </a>) :(<span> {navitem.sub1menu} </span>) }


                <ul id="submenu">

                    {this.props.nav_sub.map(itemsub=>

                    <span>

                        {itemsub.parent_id == navitem.id ?(

                        <li class="sub1">

                            {itemsub.submenuico==null? " " :(<img class="Micon" src={Img+itemsub.submenuico} />)}

                            {itemsub.footer==null? (<a class="navlink" href={EnNavext+itemsub.id}>

                                {itemsub.sub1menu} </a>) :(<span> {itemsub.sub1menu} </span>) }


                            <ul id="TREMENU">


                                {this.props.nav_subm.map(item_tree=>

                                <span>

                                    {item_tree.SUBMENUID == itemsub.id?(

                                    <li class="sub2">

                                        {item_tree.submenuico==null? " " :(<img class="Micon"
                                            src={Img+item_tree.submenuico} />)}



                                        <a class="navlink" href={EnNavext+item_tree.id}>

                                            <span> {item_tree.sub1menu} </span> </a>

                                    </li>

                                    ):""}
                                </span>
                                )}
                            </ul>


                        </li>):""}
                    </span>
                    )}

                </ul>

            </li>

            )}

            <li>
                <span>


                </span>

            </li>

        </ul>

    </div>


@stop
