<div style='display:flex;  align-items: flex-end;'>
    <span class='arrow ' id='staticbt' onclick='staticbt();'>
        <i class="right fas fa-angle-left"></i> </span>
    <hr />
</div>

<img src="http://{{ $Domain_site }}/Front/ICON/dribbble-categories.png" class="Boxes-img" />
<div class="watch-video"><button id="statics&categeory-bt" STYLE="background:#000; font-size: 14px" />
    <a href="https://youtu.be/ePA0_tiMzIY?si=JYiNbzy98_hRDz7q" target="_blank" style="color:#FFF;"> HOW
        TO USE</a></button>
</div>
<h1 class="static-bt hint--right" onclick='staticbt();' aria-label="التحليلات"> Counter </h1>
<!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
<div class="staticV">

    <form name="staticScript" style='display: flex;'>

        <select id='statics' onchange="SelectSO()">

            <option value=''> select option</option>
            <option value='exsting'> An exsting static-Group</option>
            <option value='new'> New static </option>


        </select>

        <span id='selectstatic' style='display:none'>

            <select id='selectstaticcat' class="">

                @livewire('newtopic.static-group')

            </select>


        </span>

        <span id='inputstatictext' style='display:none'>

            <input type="text" name="static_Name" placeholder="static_Name" id="textstaticcat" class="" />

        </span>


        <script>
            function SelectSO() {

                var statics = $('#statics').val();

                if (statics == 'exsting') {


                    $("#selectstaticcat ").toggleClass("staticcat");

                    $("#textstaticcat").removeClass("staticcat");

                    $("#selectstatic").css({
                        display: "block"
                    });


                    $("#inputstatictext").css({
                        display: "none"
                    });


                } else {

                    $("#textstaticcat").toggleClass("staticcat");
                    $("#selectstaticcat").removeClass("staticcat");


                    $("#inputstatictext").css({
                        display: "block"
                    });

                    $("#selectstatic").css({
                        display: "none"
                    });

                }


            }
        </script>

        {{-- &nbsp; &nbsp; <label for='static counter'> static Number </label> <input type="number" name="staticcount"
            style="width:40px;" id="staticcount" placehoder="insert number static" /> --}}

        &nbsp;<label for='static counter'> static Number </label> <input type="button" id="increament" value="+"
            onclick="Adds();">
        <b id="staticcount" class="staticcount">0</b>
        <input type="button" id='sub' value="-" onclick="Subs();">

        <script>
            function Adds() {
                var increament = document.querySelector("#staticcount").innerHTML;

                if (increament < 10) {
                    increament = ++document.querySelector("#staticcount").innerHTML
                }
            }


            function Subs() {

                var sub = document.querySelector("#staticcount").innerHTML;
                if (sub > 1) {
                    sub = --document.querySelector("#staticcount").innerHTML
                }
            }
        </script>


        <input type="submit" name="addMORE" value="+AddCounter" onclick="Addstatic();" />
    </form>
    <form name="updatestatic" action="{{ route('SNumbers.index') }}" method="get">

        @csrf

        @method('PUT')

        @if (isset($navID))
            <input type="hidden" name="FKStatic_ID" value="{{ $navID }}" />
            <input type="hidden" name="page_id" value="nav_id" />
        @elseif(isset($box_ID))
            <input type="hidden" name="FKStatic_ID" value="{{ $box_ID }}" />
            <input type="hidden" name="page_id" value="box_id" />
        @elseif(isset($Topic_ID))
            <input type="hidden" name="FKStatic_ID" value="{{ $Topic_ID }}" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        @endif

        <input type="submit" name="EDIT_static" value="updatestatic" class="EDIT_TOPIC" />
    </form>
</div>
<script>
    function staticbt() {

        $(".staticV").slideToggle(2000);
        $("#staticbt ").toggleClass("active");

    }
</script>
<script>
    function Addstatic() {

        var xl = document.querySelector('#staticcount').innerHTML;
        var sl = $('.staticcat').val();
        var csrf = '@csrf';
        var Fl =
            "<form action='{{ route('SNumbers.store') }}' name='form' method='post' enctype='multipart/form-data'>";
        var ml = "<input type='text' name='statictitle[]' placeholder='statictitle' required/>";
        var nl = "<input type='text'  name='staticNum[]'  placeholder='static_num'/><hr/>";
        var sy = "<input type='text'  name='staticsymbol[]'  placeholder='static_symbol eg:$,%,LE'/>";
        var yl = "<input type='file'  name='staticshow[]'  value='search for a file' required />";
        for (i = 1; i <= xl; i++) {
            document.write(+i + ' ' + Fl + csrf + yl + ml + sy + nl);
            document.write('<br />');
            document.write('<br />');
            document.write('<br />');
        }

        @if (isset($navID))
            document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $navID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='nav_id'/>");
        @elseif (isset($box_ID))

            document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $box_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='box_ID'/>");
        @elseif (isset($Topic_ID))

            document.write("<input type='hidden'  name='FKStatic_ID'   value='{{ $Topic_ID }}'/>");
            document.write("<input type='hidden'  name='page_id'   value='relatedtopic_id'/>");
        @endif
        document.write("<input type='hidden'  name='counter'>");
        document.form.counter.value = xl;
        document.write("<input type='text'  name='staticcat'>");
        document.form.staticcat.value = sl;
        document.write("<input type='submit'  name='Addstatic'  value='Addstatic'/>");
        document.write('<form/>');
    }
</script>
