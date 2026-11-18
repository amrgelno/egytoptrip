<footer class="site-footer" id='FooterCss' :style="{ background: Footercolor }"  dir='ltr'>
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12 mb-4" v-for="(data,i) in Maxcompanyid" :key="i">
                <img :src="'Front/IMG/' + data.path_pic" class="logo img-fluid" :alt="data.path_pic">
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>
                @include('layouts.FrontCDN.framework.vue.page_Editor.nav')

                <ul class="footer-menu">


                    <li class="footer-menu-item" v-for="(navitem,i) in nav" :key="i"
                        v-if="navitem.Active == 'footer'">

                        <a class="footer-menu-link"
                            :href="'index.php?MainM_ID=' + navitem.id +
                                '&lang=' + lang">

<span    v-if="lang  == 'en_gb'">@{{ navitem.sub1menu }}
                            </span>
                            <span v-if="lang  == 'ar'">@{{ navitem.Ar_sub1menu }} </span>

                        </a>


                    </li>


                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Infomation</h5>


                @include('layouts.FrontCDN.framework.vue.page_Editor.company')


                <p class="text-white d-flex mb-2">

                <div v-for="(data,i) in Maxcompanyid" :key="i">

                    <i class="bi-telephone me-2"></i>

                    <a href="tel: 120-240-9600" class="site-footer-link">
                        @{{ data.Tele_Number }}
                    </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="'mailto:'+data.Email" class="site-footer-link">
                            @{{ data.Email }}
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        @{{ data.Address }}
                    </p>

                    </template>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">

                        <p v-for="(data,i) in Maxcompanyid" :key="i" class="copyright-text mb-0">Copyright
                            ©
                            2036 <a href="#"> @{{ data.Comp_Name }}</a>
                            Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">



                        <ul class="social-icon">



                            <li class="social-icon-item" v-for="(data,i) in social" :key="i">
                                <a :href="data.links" :class="data.social_icon"></a>
                            </li>


                        </ul>
                    </div>

                </div>
            </div>

            <div v-if="Admin_user  != '' ">

                <input type="color" name="Footercolor" class="hint--left" id='Footercolor' aria-label="Footercolor"
                    v-model='Footercolor' onchange='changeFootercolor();'>
            </div>

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






<script type="text/javascript" v-if="Admin_user  != '' ">
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
