<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='Boxbt' onclick='Boxbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/dribbble-categories.png" class="Boxes-img" />
<div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;  font-size: 14px" />
    <a href="https://youtu.be/8NejrDpzKMI?si=COdOgVHuj9POfS6J" target="_blank" style="color:#FFF;"> HOW
        TO USE</a></button>
</div>
<h1 class="Box-bt hint--right" onclick='Boxbt();' aria-label="الفئات"> categeories </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
<div class="Boxes">
    <form name="BOXScript" style='display: flex;'>

        <select id='boxes' onchange="SelectBO()">
            <option value=''> select option</option>
            <option value='exsting'> An exsting boxGroup</option>
            <option value='new'> New box </option>


        </select>

        <span id='selectcard' style='display:none'>

            <select id='selectboxcat' class="" wire:change='Change'>


                @livewire('newtopic.box-group')

            </select>


        </span>



        <span id='inputtext' style='display:none'>

            <input type="text" name="cat_Name" placeholder="Add categeories,Excursions,Cards_Name" size="40"
                id="textboxcat" class="" required />

        </span>




        <script>
            function SelectBO() {

                var boxes = $('#boxes').val();

                if (boxes == 'exsting') {

                    console.log(boxes);

                    $("#selectboxcat").toggleClass("boxcat");

                     $("#textboxcat ").removeClass("boxcat");


                    $("#selectcard").css({
                        display: "block"
                    });


                    $("#inputtext").css({
                        display: "none"
                    });


                } else {

                    console.log(boxes);

                    $("#textboxcat ").toggleClass("boxcat");
                    $("#selectboxcat ").removeClass("boxcat");


                    $("#inputtext").css({
                        display: "block"
                    });

                    $("#selectcard").css({
                        display: "none"
                    });

                }


            }
        </script>



        {{-- &nbsp;<label> box Number:-</label>
        <input type="number" name="count" id="boxcounter" title='Card counter' placehoder="insert number image"
            style="width:40px;" required /> --}}

        &nbsp;<label> box Number:-</label> <input type="button" id="increament" value="+" onclick="Add();">
        <b id="boxcounter" class="boxcounter">0</b>
        <input type="button" id='sub' value="-" onclick="Sub();">

        <script>
            function Add() {
                var increament = document.querySelector("#boxcounter").innerHTML;

                if (increament < 10) {
                    increament = ++document.querySelector("#boxcounter").innerHTML
                }
            }


            function Sub() {

                var sub = document.querySelector("#boxcounter").innerHTML;
                if (sub > 1) {
                    sub = --document.querySelector("#boxcounter").innerHTML
                }
            }
        </script>





        <input type="submit" name="addMORE" value="+Add_categeories" onclick="addval();" />
    </form>
    <form name="updatebox" action="{{ route('box.index') }}" method="get">
        <!--   get -> @method('PUT')         -->
        <!--   POST -> @method('GET, HEAD, POST')         -->

        @csrf

        @method('PUT')

        @if (isset($navID))
            <input type="hidden" name="MainM_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_id" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="MainM_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        @endif


        <input type="submit" name="updateBox" value="updatecategeories" class="EDIT_TOPIC" />

    </form>
</div>
<script>
    function Boxbt() {
        $(".Boxes").slideToggle(2000);
        $("#Boxbt ").toggleClass("active");

    }
</script>

<script>
    function addval() {

        var x = document.querySelector('.boxcounter').innerHTML;
        var s = $('.boxcat').val();
        var F =
            "<br/><br/><form action='{{ route('box.store') }}' name='form' method='post' enctype='multipart/form-data' style='display:flex;flex-wrap: wrap;flex-direction: column;align-items: baseline;align-content: flex-start;justify-content: center;'>";
        var csrf = '@csrf';
        var m = "<input type='text' name='boxtitle[]' placeholder='boxshow caption'    size='40'  required/><br>";
        var y = "<input type='file'  name='boxshow[]'  value='search for a file'  /><br>";
        var N =
            "<textarea type='text' name='boxDesc[]'   placeholder='box_Description' required/>box_Description </textarea><hr/>";

        var p = "<INPUT TYPE='text' name='price[]'  placeholder='price' ><hr/>";
        var D = "<INPUT TYPE='text' name='DayTime[]'  placeholder='DayTime' ><hr/>";



        for (i = 1; i <= x; i++) {
            document.write('card_Number');
            document.write(i + ' ' + F + csrf + y + m + p + D + ' ' + N);
            document.write('<br />');
            document.write('<br />');
            document.write('<br />');
            document.write('<br />');
        }

        @if (isset($navID))

            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $navID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");
        @elseif (isset($box_ID))

            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='box_id'/>");
        @elseif (isset($Topic_ID))

            document.write("<input type='hidden'  name='MainM_ID'   value='{{ $Topic_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");
        @endif

        document.write("<input type='hidden'  name='counter'>");
        document.form.counter.value = x;
        document.write("<input type='text'  name='cat'>");
        document.form.cat.value = s;

        document.write("<input type='submit'  name='Adder'  value='+Add_Categories'/>");
        document.write('<form/>');
    }
</script>
