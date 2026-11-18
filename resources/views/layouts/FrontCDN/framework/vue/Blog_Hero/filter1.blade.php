<div class="left_filter_all  col-md-3" id="Filter_nav"
    style="display:block; background:rgb(255, 255, 255);  border:1px solid #90bee7;">


    <form method='Get' action=''>

        <button style='border:unset; width:100%'> filter your packages </button>

        <input type="hidden" id="lang" value="{{ $_GET['lang'] }}">

        <input type="hidden" id="box_ID" value="{{ $_GET['box_ID'] }}">


        @if (!empty(@$_GET['Destinations']))
            <input type="hidden" id="Destination" value="{{ $_GET['Destinations'] }}">
        @elseif(!empty(@$_GET['City']))
            <input type="hidden" id="Destination" value="{{ $_GET['Destinations'] }}">
            <input type="hidden" id="City" value="{{ $_GET['City'] }}">
        @endif





        <div style="display:none;"></div>

        <div class="left_filter_all_box">
            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#SingleCountry" aria-expanded="true">
                Destinations (outside)</div>
            <div class="left_filter_all_box_data collapse show" id="SingleCountry">
                <div class="row">


                    <div class="radio">

                        <a href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Any">
                            <input class="form-check-input
                            flex-shrink-0" name="Country"
                                type="radio" value="Any" id="5"
                                @if (@$_GET['Destinations'] == 'Any') checked @endif disabled> </a><span class="check">Any
                        </span>


                    </div>




                    <div class="radio">

                        <a href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt">
                            <input class="form-check-input flex-shrink-0" name="Country" type="radio" value="Egypt"
                                id="5" @if (@$_GET['Destinations'] == 'Egypt' or @$_GET['City']) checked @endif disabled> </a><span
                            class="check">Egypt </span>

                    </div>



                    <div class="radio">

                        <a href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Dubai">
                            <input class="form-check-input flex-shrink-0" name="Country" type="radio" value="Dubai"
                                id="5" @if (@$_GET['Destinations'] == 'Dubai') checked @endif disabled> </a><span
                            class="check">Dubai </span>

                    </div>




                    <div class="radio">

                        <a href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=SaudiArabia">
                            <input class="form-check-input flex-shrink-0" name="Country" type="radio"
                                value="SaudiArabia" id="5" @if (@$_GET['Destinations'] == 'SaudiArabia') checked @endif
                                disabled> </a><span class="check"> Saudi Arabia </span>

                    </div>





                    <div class="radio">
                        <a href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Turkey">

                            <input class="form-check-input flex-shrink-0" name="Country" type="radio"
                                value="{{ $_GET['lang'] }}" id=" Destination8"
                                @if (@$_GET['Destinations'] == 'Turkey') checked @endif disabled></a>
                        <span class="check">Turkey</span>


                    </div>

                </div>
            </div>
        </div>


        <div class="left_filter_all_box">
            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#SingleCountry" aria-expanded="true">
                City (inside Egypt)</div>
            <div class="left_filter_all_box_data collapse show" id="SingleCountry">
                <div class="row">

                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=Luxor">

                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="Luxor" id="5" @if (@$_GET['City'] == 'Luxor') checked @endif
                                    disabled /> </a>

                            <span class="check"></span> Luxor </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=Aswain">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="Aswain" id="5" @if (@$_GET['City'] == 'Aswain') checked @endif
                                    disabled> </a> <span class="check">Aswain</span>



                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=ALex">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="ALex" id="5" @if (@$_GET['City'] == 'ALex') checked @endif
                                    disabled></a>
                            <span class="check">ALex</span>

                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=Swia">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="Swia" id="5" @if (@$_GET['City'] == 'Swia') checked @endif
                                    disabled></a>
                            <span class="check">Swia</span>


                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=ModernCairo">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="Modern Cairo" id="5"
                                    @if (@$_GET['City'] == 'ModernCairo') checked @endif disabled></a>
                            <span class="check">Modern Cairo</span>


                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=Redsea">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="5" id="5" @if (@$_GET['City'] == 'Redsea') checked @endif
                                    disabled></a>
                            <span class="check">Redsea</span>

                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="radio">

                            <a
                                href="?box_ID={{ $_GET['box_ID'] }}&lang={{ $_GET['lang'] }}&Destinations=Egypt&City=HolyLand">
                                <input class="form-check-input flex-shrink-0" name="City" type="radio"
                                    value="5" id="5" @if (@$_GET['City'] == 'HolyLand') checked @endif
                                    disabled> </a>


                            <span class="check">HolyLand</span>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="left_filter_all_box">
            <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Price" aria-expanded="true">
                Price
            </div>
            <div class="left_filter_all_box_data collapse show" id="Price">
                <!--<div class="radio">
                    <label>
                        <input class="form-check-input flex-shrink-0" name="price" type="radio" value="0"
                            id="0" onchange="filter(' ')" checked=""><span class="check"></span> Any
                    </label>
                </div>-->

                <div class="radio">
                    <label>

                        <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                            value="" id="price160" onchange="filter160();">

                        <span class="check"></span> Less than $1500 </label>
                </div>



                <div class="radio">
                    <label>

                        <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                            value="" id="price161" onchange="filter161();">

                        <span class="check"></span> $1500 - $3000 </label>
                </div>


                <div class="radio">
                    <label>

                        <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                            value="" id="price162" onchange="filter162();">

                        <span class="check"></span> More than $3000</label>
                </div>

            </div>



            <div class="left_filter_all_box">
                <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Duration"
                    aria-expanded="true">
                    Duration</div>
                <div class="left_filter_all_box_data collapse show" id="Duration">

                    <!-- <div class="radio">
                        <label>
                            <input class="form-check-input flex-shrink-0" name="Duration" type="radio"
                                value="0" id="0" onchange="filter(' ')" checked=""><span
                                class="check"></span> Any
                        </label>
                    </div>-->

                    <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="Less than 10 days" id="Duration154" onchange="filter154();"><span
                                class="circle">

                            </span>
                            <span class="check">Less than 10 days</span>

                        </label>


                    </div>



                    <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="" id="Duration149" onchange="filter149();"><span class="circle">

                            </span>
                            <span class="check"></span> 10-20 days </label>
                    </div>




                    <!-- <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="5-10 days" id="Duration150" onchange="filter150();">
                            <span class="check"> 5-10 days </span>

                        </label>


                    </div>-->



                    <!-- <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="10-15 days" id="Duration151" onchange="filter151();">
                            <span class="check"> 10-15 days </span>

                        </label>


                    </div>-->



                    <!--<div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="15-20 days" id="Duration152" onchange="filter152();">
                            <span class="check">15-20 days </span>


                        </label>


                    </div>-->



                    <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="" id="Duration153" onchange="filter153();">
                            <span class="check"> More than 20 days </span>

                        </label>


                    </div>






                </div>
            </div>

            <div class="left_filter_all_box">
                <div class="left_filter_all_box_title" data-bs-toggle="collapse" href="#Group"
                    aria-expanded="true">
                    Group Size</div>

                <div class="left_filter_all_box_data collapse show" id="Group">

                    <!-- <div class="radio">
                        <label>
                            <input class="form-check-input flex-shrink-0" name="Group" type="radio"
                                value="0" id="0" onchange="filter(' ')" checked=""><span
                                class="check">Any</span>
                        </label>
                    </div> -->



                    <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="" id="GroupSize145" onchange="filter21();">
                            <span class="check"> Group Tour</span>

                        </label>


                    </div>



                    <div class="radio">

                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="" id="GroupSize146" onchange="filter23();">
                            <span class="check"> Private Tour</span>




                        </label>


                    </div>












                    <div class="radio">
                        <label>

                            <input class="form-check-input flex-shrink-0" name="rootCategory" type="radio"
                                value="" id="GroupSize147" onchange="filter24();">
                            <span class="check"> Small Group Tour </span>







                        </label>


                    </div>




                </div>
            </div>
        </div>
    </form>
</div>
