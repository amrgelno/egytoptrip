<footer class="site-footer" id='FooterCss' :style="{ background: Footercolor }">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-4">
                @foreach ($Maxcompanyid as $Maxid)
                    <img src="Front/IMG/{{ $Maxid->path_pic }}" class="logo img-fluid" alt="">
                @endforeach
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>

                <ul class="footer-menu">


                    @include('layouts.Front.page_Editor.nav')


                    @foreach ($nav as $item)
                        @if ($item->Active == 'footer')
                            <li class="footer-menu-item"><a
                                    href="index.php?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>"
                                    class="footer-menu-link">

                                    @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                                        {{ $item->sub1menu }}
                                    @elseif($_GET['lang'] == 'ar')
                                        {{ $item->Ar_sub1menu }}
                                    @endif

                                </a></li>
                        @endif
                    @endforeach

                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>



                @include('layouts.Front.page_Editor.company')




                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>

                    @foreach ($Maxcompanyid as $Maxid)
                        <a href="tel: 120-240-9600" class="site-footer-link">
                            {{ $Maxid->Tele_Number }}
                        </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope me-2"></i>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        {{ $Maxid->Email }}
                    </a>
                </p>

                <p class="text-white d-flex mt-3">
                    <i class="bi-geo-alt me-2"></i>
                    {{ $Maxid->Address }}
                </p>
                @endforeach
                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-7 col-12">

                    @foreach ($Maxcompanyid as $Maxid)
                        <p class="mb-0 Black--text">Copyright © 2036 <a href="#">{{ $Maxid->Comp_Name }} </a>
                            Design: <a href="https://Designstore.online" target="_blank">Designstore</a></p>
                </div>
                @endforeach

                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">



                    <ul class="social-icon">



                        @foreach ($social as $allitem)
                            <li class="social-icon-item">
                                <a href="#{{ $allitem->links }}" class="{{ $allitem->social_icon }}"></a>
                            </li>
                        @endforeach


                    </ul>
                </div>

            </div>
        </div>

        @if (auth::guard('admin')->check())
            <input type="color" name="Footercolor" class="hint--left" id='Footercolor' aria-label="Footercolor"
                v-model='Footercolor' onchange='changeFootercolor();'>
        @ENDIF
    </div>
    <label> Language: </label>

    <!--<form name='Typography'  action='{{ route('index') }}'  method='get' >

@csrf

<select name="lang"   class="autosubmit"   lang="en"  dir="ltr" id="sel-lang">

<option value="ar">العربية - Arabic</option>
<option value="en_gb">English (United Kingdom)</option>




  </select>


  <input type='submit' value='ok'>

</form>

-->


    @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
        <a href='?lang=ar'> العربية AR</a>
    @elseif($_GET['lang'] == 'ar')
        <a href='?lang=en_gb'> الأنجيليزية EN</a>
    @endif




</footer>








@if (auth::guard('admin')->check())
    <script type="text/javascript">
        //DOM  AND OBJECT data


        new Vue({

            el: "#FooterCss",

            data: {

                Footercolor: null,


            }

        })
    </script>





    <script type="text/javascript">
        function changeFootercolor(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    Footercolor: $('#Footercolor').val(),


                },



                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(data, status) {
                    console.log(data);
                    console.log(status);
                    console.log(xhr);
                }

            });


        }
    </script>
@endif
