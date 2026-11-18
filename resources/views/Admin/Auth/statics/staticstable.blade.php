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
        <td>sel</td>
        <td>cod</td>
        <td>categories</td>
        <td> select</td>
        <td> update</td>
        <td><input type='submit' value='delete' name='delete' class="delete"></td>
    </tr>

    @php   $i=0;   @endphp

    @foreach ($static as $SNumbersitem)
        @if (!empty($SNumbersitem->SNumber_Name))
            @csrf
            @method('GET')

            <tr>

                <td> <INPUT TYPE='checkbox' name='checkstatic[]' value='<?php echo $SNumbersitem->id; ?>' /> </td>


                <!-- <td> <?php echo $SNumbersitem->id; ?></td> -->

                <td> {{ ++$i }}</td>

                <td>
                    <form action="{{ route('SNumbers.update', $SNumbersitem->id) }}" method="post"
                        id="update-form[{{ $SNumbersitem->id }}]">
                        @csrf
                        @method('PUT')
                        <div class="lang-option" data-lang="en">

                            <input type='text' name='cat_type' value='<?php echo $SNumbersitem->SNumber_Name; ?>'
                                form="update-form[{{ $SNumbersitem->id }}]">

                        </div>

                        <div class="lang-option" data-lang="ar" style="display:none;">
                            AR:<input type='text' name='Ar_SNumber_Name' style='width: fit-content;'
                                title='<?php echo $SNumbersitem->Ar_SNumber_Name; ?>' value='<?php echo $SNumbersitem->Ar_SNumber_Name; ?>'
                                form="update-form[{{ $SNumbersitem->id }}]" />
                        </div>

                </td>
                <td><input type='hidden' name='cat_typeprev' value='<?php echo $SNumbersitem->SNumber_Name; ?>'>
                    <!-- <INPUT TYPE='hidden' name='id'  value='<?php echo $SNumbersitem->id; ?>'/> -->

                    @if (($_POST['page_id'] = 'nav_id') and ($_POST['MainM_ID'] = $SNumbersitem->nav_id))
                        <input type="hidden" name="page_id" value="nav_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->nav_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'box_id') and ($_POST['MainM_ID'] = $SNumbersitem->box_id))
                        <input type="hidden" name="page_id" value="box_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->box_id; ?>' />
                    @endif

                    @if (($_POST['page_id'] = 'topic_id') and ($_POST['MainM_ID'] = $SNumbersitem->relatedtopic_id))
                        <input type="hidden" name="page_id" value="relatedtopic_id" />
                        <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->relatedtopic_id; ?>' />
                    @endif

                    <INPUT TYPE='submit' name='upcat' value='update' class='update' />
                    </form>
                </td>

                <td>
                    <form action="{{ route('SNumbers.show', $SNumbersitem->id) }}" method="post">

                        @csrf
                        @method('GET')

                        <INPUT TYPE='hidden' name='cat_type' value='<?php echo $SNumbersitem->SNumber_Name; ?>' />

                        @if (($_POST['page_id'] = 'nav_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->nav_id))
                            <input type="hidden" name="page_id" value="nav_id" />
                            <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->nav_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'static_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->box_id))
                            <input type="hidden" name="page_id" value="box_id" />
                            <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->box_id; ?>' />
                        @endif

                        @if (($_POST['page_id'] = 'topic_id') and ($_POST['FKStatic_ID'] = $SNumbersitem->relatedtopic_id))
                            <input type="hidden" name="page_id" value="relatedtopic_id" />
                            <INPUT TYPE='hidden' name='FKStatic_ID' value='<?php echo $SNumbersitem->relatedtopic_id; ?>' />
                        @endif

                        <INPUT TYPE='submit' name='selectcate' value='selectcate' class='insert' />
                    </form>
                </td>
            </tr>
        @endif
    @endforeach
