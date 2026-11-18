<div class="card card-primary" style='margin-left:15px; '>

    <div class="card-header">

        <h3 class="card-title">
            Edit box
        </h3>

        &nbsp; &nbsp; &nbsp;

        <select id="langOpt" style='color:black;  margin-left:75%'>
            <option value="en" style='color:black;'><span> أنجيلزي-EN </span> </option>
            <option value="ar" style='color:black;'><span> عربي-Ar </span> </option>
        </select>

        <script>
            document.querySelector('#langOpt').addEventListener('change', function(e) {
                document.querySelectorAll('.lang-option').forEach(element => {
                    if (element.dataset.lang === e.target.value) {
                        element.style.display = 'block';
                    } else {
                        element.style.display = 'none';
                    }
                });
            });
        </script>
    </div>

    <div style='padding-left:15px'>

        @foreach ($boxupdate as $boxitem)
            <form action="{{ route('box.update', $boxitem->ID) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <br />
                <h1> update categories </h1>
                <hr />
                <!-- <INPUT TYPE='hidden'  name='ID'   value='<?php echo $boxitem->ID; ?>'> -->

                <div id="EnLangoption" class="lang-option" data-lang="en">

                    &nbsp; &nbsp; <p><B>*Default box_lang: </B></p>
                    <input type="text" name="boxtitle" value="<?php echo $boxitem->title; ?>" /> <br> <br>
                    <textarea cols='60' row='30' name="boxDesc">  <?php echo $boxitem->Desc; ?>     </textarea> <br> <br>
                    <!--<input name="price1" placeholder="Maxprice" value="<?php echo $boxitem->price1; ?>"> <br> <br> -->

                    @if (($boxitem->BOX_STYLE == 'BoxModel6' ?? 'BoxModel5' )      )


                        -tour packages Setting :

                        <select name='Country' id='Country' onchange='changefx()'>

                            <option value="Egypt">
                                @if ($boxitem->Country == 'Egypt')
                                    &check;
                                @endif Egypt
                            </option>
                            <option value="Dubai">
                                @if ($boxitem->Country == 'Dubai')
                                    &check;
                                @endif Dubai
                            </option>
                            <option value="SaudiArabia">
                                @if ($boxitem->Country == 'SaudiArabia')
                                    &check;
                                @endif SaudiArabia
                            </option>


                            <option value="Turkey">
                                @if ($boxitem->Country == 'Turkey')
                                    &check;
                                @endif Turkey
                            </option>

                        </select>

                        <select name=' City' id='City' @if ($boxitem->Country != 'Egypt') disabled @endif>


                            <option value="Luxor">
                                @if ($boxitem->City == 'Luxor')
                                    &check;
                                @endif Luxor
                            </option>

                            <option value="Aswain">
                                @if ($boxitem->City == 'Aswain')
                                    &check;
                                @endif Aswain
                            </option>
                            <option value="ALex">
                                @if ($boxitem->City == 'ALex')
                                    &check;
                                @endif ALex
                            </option>
                            <option value="Swia">
                                @if ($boxitem->City == 'Swia')
                                    &check;
                                @endif Swia
                            </option>

                             <option value="Cairo">
                                @if ($boxitem->City == 'Cairo')
                                    &check;
                                @endif   Cairo
                            </option>


                           <!-- <option value="ModernCairo">
                                @if ($boxitem->City == 'ModernCairo')
                                    &check;
                                @endif ModernCairo
                            </option>-->


                            <option value="Redsea">
                                @if ($boxitem->City == 'Redsea')
                                    &check;
                                @endif Redsea
                            </option>
                            <option value="Redsea">
                                @if ($boxitem->City == 'HolyLand')
                                    &check;
                                @endif HolyLand
                            </option>

                        </select>





                        <select name=' GroupSize'>

                            <option value="GroupTour">
                                @if ($boxitem->GroupSize == 'GroupTour')
                                    &check;
                                @endif Group Tour
                            </option>
                            <option value="PrivateTour">
                                @if ($boxitem->GroupSize == 'PrivateTour')
                                    &check;
                                @endif
                                Private Tour
                            </option>
                            <option value="SmallGroupTour">
                                @if ($boxitem->GroupSize == 'SmallGroupTour')
                                    &check;
                                @endif

                                Small Group Tour
                            </option>


                           <!--<option value="Classic Tour">
                                @if ($boxitem->GroupSize == 'Classic Tour')
                                    &check;
                                @endif

                                Classic Tour
                            </option>-->


                        </select>



                        <label for ='Duration'>Duration:- </label> <input name="Duration" placeholder="Duration"
                            value="<?php echo $boxitem->Duration; ?>">
                    @endif


                    <label for='price'> price </label> <input name="price" placeholder="price"
                        value="<?php echo $boxitem->price; ?>"> <br> <br>

                </div>


                <div id="ArLangoption" class="lang-option" data-lang="ar" style="display:none;">

                    &nbsp; &nbsp;<p><B>*second box_lang: </B> </p>

                    <input type="text" placeholder='Ar_title' name="Ar_boxtitle" value="<?php echo $boxitem->Ar_title; ?>" /> <br>
                    <br>
                    <textarea cols='60' row='30' placeholder='Ar_Desc' name="Ar_boxDesc">  <?php echo $boxitem->Ar_Desc; ?>     </textarea>

                </div>

                &nbsp; &nbsp; <input type="file" name='boxshow' value="search for a file" />
                <INPUT TYPE='hidden' name='cat_type' value='<?php echo $boxitem->cat_type; ?>' />
                @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $boxitem->nav_id))
                    <input type="hidden" name="page_id" value="nav_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->nav_id; ?>' />
                @endif

                @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $boxitem->box_id))
                    <input type="hidden" name="page_id" value="box_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->box_id; ?>' />
                @endif

                @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $boxitem->relatedtopic_id))
                    <input type="hidden" name="page_id" value="topic_id" />
                    <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->relatedtopic_id; ?>' />
                @endif
                <br> <br>
                <input type='submit' value='update' name='updatecat' class="btn btn-primary">
            </form>
        @endforeach
    </div>
</div>




<script>
    function changefx() {

        const Country = document.querySelector('#Country').value;




        if (Country == 'Egypt') {


            document.querySelector('#City').disabled = false;

        } else {


            document.querySelector('#City').disabled = true;





        }

    }
</script>
