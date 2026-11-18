@if (isset($box_ID))
    <div style='display:flex;  align-items: flex-end;'>
        <span class='arrow ' id='productbt' onclick='productbt();'>
            <i class="right fas fa-angle-left"></i>
        </span>
        <hr />
    </div>
    @if ($BusinessModel == 'E-commerce')
        <img src="http://{{ $Domain_site }}/Front/ICON/dribbble-categories.png" class="Boxes-img" />
        <div class="watch-video"><button id="Boxes&categeory-bt" STYLE="background:#000;" />
            <a href="http://{{ $Domain_site }}/Front/CMS_VIDEO/categories.mp4" target="_blank" style="color:#FFF;"> HOW
                TO
                USE</a></button>
        </div>
        <h1 class="Box-bt hint--right" aria-label="المنتجات" onclick='productbt();'> product </h1>
        <!--<div class="categeoryOpen-buttor">>></div> <div class="categeoryClose-buttor">  <<  </div>-->
        <div class="product">
            <form name="productScript">
                <input type="number" name="count" id="prodcount" placehoder="insert number image" required />
                <input type="submit" name="addMORE" value="+Addproduct" onclick="addprod();" />
            </form>
            <form name="updatebox" action="{{ route('product.index') }}" method="get">
                <!--   get -> @method('PUT')         -->
                <!--   POST -> @method('GET, HEAD, POST')         -->
                @csrf

                @method('PUT')
                <input type="hidden" name="MainM_ID" value="{{ $box_ID }}" />
                <input type="hidden" name="page_id" value="Box_ID" />

                <input type="submit" name="Edit_product" value="updateBox" class="EDIT_TOPIC" />
            </form>
        </div>
        <script>
            function productbt() {
                $(".product").slideToggle(2000);
                $("#productbt ").toggleClass("active");

            }
        </script>

        <script>
            function addprod() {

                var x = document.getElementById('prodcount').value; //counter_Number

                var F =
                    "<form action='{{ route('product.store') }}' name='form'  method='post' enctype='multipart/form-data'>";
                var csrf = '@csrf';
                var m = "<input type='text' name='prodModel[]'   placeholder='product_Model caption' required/>";
                var N = "<input type='text' name='prodver[]'   placeholder='product_ver caption' required/>";
                var s = "<input type='text' name='prodcost[]'   placeholder='product_cost caption' required/>";
                var f = "<input type='text' name='prodprice[]'   placeholder='product_price caption' required/>";
                var K = "<input type='text' name='prodDiscount[]'   placeholder='Discount' required/>";
                var z = "<input type='text' name='prodsupplier[]'   placeholder='supplier' required/><br/><br/><br/>";
                var w = "<input type='text' name='prodQR[]'   placeholder='QR' required/><br/><br/><br/>";
                var X =
                    "<textarea type='text' name='proddisc[]'   placeholder='product_Description'/>product_Description </textarea><hr/>";
                var e = "<input type='file'  name='uploadimage1[]'  value='search for a file'  required/>";
                var p = "<input type='file'  name='uploadimage2[]'  value='search for a file' required />";
                var l = "<input type='file'  name='uploadimage3[]'  value='search for a file'  required />";

                for (i = 1; i <= x; i++) {
                    document.write(+i + '    ' + F + csrf + ' ' + m + ' ' + N + '  ' + s + ' ' + K + '  ' + z + '    ' + f +
                        ' ' + w + ' ' + e + '' + p + '' + l + ' ' + X);
                    document.write('<br />');
                    document.write('<br />');
                    document.write('<br />');
                }

                document.write("<input type='hidden'  name='MainM_ID'   value='{{ $box_ID }}'/>");
                document.write("<input type='hidden'  name='page_id'   value='Box_ID'/>");

                document.write("<input type='hidden'  name='countnum' >");
                document.form.countnum.value = x;
                document.write("<input type='submit'  name='Add'  value='+addCard'/>");
                document.write('<form/>');
            }
        </script>
    @endif
@endif
