<select id="langOpt">
    <option value="en"> أنجيلزي-EN </option>
    <option value="ar"> عربي-Ar </option>
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

<B> *current_page:{{ $pagename }}
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    *page_id:{{ $MainM_ID }} </B>

<table width="500px" border="1">
    <tr class="trc">
        <td><span> sel </span></td>
        <td><span> Num </span></td>
        <td><span> categories </span></td>
        <td><span> Box_style <span></td>
        <td> <span> update </span></td>
        <td> <span> select </span></td>
        <td><span><input type='submit' value='delete' name='delete' class="delete"><span></td>
    </tr>


    @php   $i=0;   @endphp

    @foreach ($box as $boxitem)
        @if (!empty($boxitem->cat_Name))
            @csrf
            @method('GET')

            <tr>


                <td> <span><INPUT TYPE='checkbox' name='checkboxes[]' value='<?php echo $boxitem->ID; ?>' /> </span>
                </td>
                <input type='hidden' name='MainM_ID' value='<?php echo $boxitem->Box_id; ?>'>
                <input type='hidden' name='cat_type' value='<?php echo $boxitem->cat_type; ?>'>
                <!-- <td> <?php echo $boxitem->ID; ?></td> -->
                <td> {{ ++$i }}</td>

                <form action="{{ route('box.update', $boxitem->ID) }}" method="post"
                    id="update-form[{{ $boxitem->ID }}]">

                    <td> <span>
                            @csrf
                            @method('PUT')

                            <div class="lang-option" data-lang="en">
                                EN:-<input type='text' name='cat_type' style='width: fit-content;'
                                    title='<?php echo $boxitem->cat_Name; ?>' value='<?php echo $boxitem->cat_Name; ?>'
                                    form="update-form[{{ $boxitem->ID }}]" />
                            </div>

                            <div class="lang-option" data-lang="ar" style="display:none;">
                                AR:<input type='text' name='Ar_cat_Name' style='width: fit-content;'
                                    title='<?php echo $boxitem->Ar_cat_Name; ?>' value='<?php echo $boxitem->Ar_cat_Name; ?>'
                                    form="update-form[{{ $boxitem->ID }}]" />
                            </div>

                            <input type='hidden' name='cat_typeprev' value='<?php echo $boxitem->cat_Name; ?>'>
                            <!-- <INPUT TYPE='hidden' name='ID'  value='<?php echo $boxitem->ID; ?>'/> -->

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

                        </span>
                    </td>


                    <td>
                        <span>
                            <select name='BOX_STYLE'>

                                @if (isset($boxitem->BOX_STYLE))
                                    <option value="{{ $boxitem->BOX_STYLE }}" align='center'> Select BOX_STYLE
                                    </option>
                                    <option value="BOXModel1">
                                        @if ($boxitem->BOX_STYLE == 'BOXModel1')
                                            &checkmark; Multi cards slider1
                                        @else
                                            Multi cards slider1
                                        @endif
                                    </option>
                                    <option value="BOXModel2">
                                        @if ($boxitem->BOX_STYLE == 'BOXModel2')
                                            &checkmark; Multi cards slider2
                                        @else
                                            Multi cards slider2
                                        @endif
                                    </option>
                                    <option value="BoxModel3">
                                        @if ($boxitem->BOX_STYLE == 'BoxModel3')
                                            &checkmark; testimoials slider style
                                        @else
                                            testimoials slider
                                        @endif
                                    </option>

                                    <option value="BoxModel4">
                                        @if ($boxitem->BOX_STYLE == 'BoxModel4')
                                            &checkmark; FlipCards
                                        @else
                                            FlipCards
                                        @endif
                                    </option>


                                    <option value="BoxModel5">
                                        @if ($boxitem->BOX_STYLE == 'BoxModel5')
                                            &checkmark; Cards
                                        @else
                                            Cards
                                        @endif
                                    </option>


                                    <option value="BoxModel6">
                                        @if ($boxitem->BOX_STYLE == 'BoxModel6')
                                            &checkmark; packages
                                        @else
                                            packages
                                        @endif
                                    </option>
                                @else
                                    <option align='center'> Select BOX_STYLE </option>
                                    <option value="BOXModel1"> Multi cards slider1 </option>
                                    <option value="BOXModel2"> Multi cards slider2 </option>
                                    <option value="BOXModel3"> testimoials slider </option>
                                    <option value="BOXModel4"> FlipCards </option>
                                    <option value="BoxModel5"> Cards </option>
                                    <option value="BoxModel6"> packages </option>
                                @endif

                            </select>
                        </span>
                    </td>

                    <td> <span>
                            <INPUT TYPE='submit' name='upcat' value='update' class='update' />
                        </span></td>

                </form>

                <td><span>
                        <form action="{{ route('box.show', $boxitem->ID) }}" method="post">
                            @csrf
                            @method('GET')
                            <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->nav_id; ?>' />
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
                                <input type="hidden" name="page_id" value="relatedtopic_id" />
                                <INPUT TYPE='hidden' name='MainM_ID' value='<?php echo $boxitem->relatedtopic_id; ?>' />
                            @endif

                            @if (@$_GET['cat_Name'] == $boxitem->cat_type)
                                <INPUT TYPE='submit' name='selectcate' value='selected_categories' class='insert'
                                    style='background:red; color:white;' />
                            @else
                                <INPUT TYPE='submit' name='selectcate' value='selectcategories' class='insert' />
                            @endif
                        </form><span></td>
            </tr>
        @endif
    @endforeach
