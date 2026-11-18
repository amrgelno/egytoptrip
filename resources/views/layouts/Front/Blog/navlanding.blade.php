@if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))

    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;">
        <nav id='navCss' class=" navbar navbar-expand-lg  shadow-lg " :style="{ background: navcolor }">

            &nbsp; &nbsp; &nbsp; <div class='lang col-lg-1'><i class="bi bi-globe"> </i> <a href='?lang=ar'> العربية AR</a>
            </div>


            @if (auth::guard('admin')->check())
                <input type="color" name="navcolor" class="hint--left" id='navcolor' aria-label="navcolor"
                    v-model='navcolor' onchange='changenavcolor();'>
            @endif

            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">

                    @foreach ($Maxcompanyid as $Maxid)
                        <img src="Front/IMG/{{ $Maxid->path_pic }}" class="logo img-fluid"
                            alt="{{ $Maxid->Comp_Name }}">

                        <span>
                            {{ $Maxid->Comp_Name }}
                            <small>{{ $Maxid->Business }}</small>
                        </span>
                    @endforeach

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">


                        @include('layouts.Front.page_Editor.nav')


                        @foreach ($nav as $item)
                            @if (empty($item->footer))
                                @if ($item->Active == 'nav')
                                    <li class="nav-item ">
                                        <a class="nav-link click-scroll  "
                                            href="index.php?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>">{{ $item->sub1menu }}</a>

                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link click-scroll dropdown-toggle" id="top" href="#top"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        @if ($item->Active == 'nav')
                                            {{ $item->sub1menu }}
                                        @endif
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-light"
                                        aria-labelledby="navbarLightDropdownMenuLink">

                                        @foreach ($nav_sub as $item_sub)
                                            @if ($item_sub->parent_id == $item->id)
                                                @if (empty($item_sub->footer))
                                                    @if ($item_sub->Active == 'nav')
                                                        <li><a class="dropdown-item"
                                                                href="index.php?MainM_ID={{ $item_sub->id }}&lang=<?php echo @$_GET['lang']; ?>">
                                                                {{ $item_sub->sub1menu }}</a></li>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach

                                    </ul>

                                </li>
                            @endif
                        @endforeach


                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn inactive"
                                href="?Donate='Donate'">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@elseif($_GET['lang'] == 'ar')
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;">
        <nav class="navbar navbar-expand-lg bg-light shadow-lg" :style="{ background: navcolor }">



            @if (auth::guard('admin')->check())
                <input type="color" name="navcolor" class="hint--left" id='navcolor' aria-label="navcolor"
                    v-model='navcolor' onchange='changenavcolor();'>
            @endif

            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">

                    @foreach ($Maxcompanyid as $Maxid)
                        <img src="Front/IMG/{{ $Maxid->path_pic }}" class="logo img-fluid"
                            alt="{{ $Maxid->Comp_Name }}">



                        <span>
                            {{ $Maxid->Comp_Name }}
                            <small>{{ $Maxid->Business }}</small>
                        </span>
                    @endforeach

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav  ms-auto" dir='rtl'>


                        @include('layouts.Front.page_Editor.nav')

                        @foreach ($nav as $item)
                            @if (empty($item->footer))
                                @if ($item->Active == 'nav')
                                    <li class="nav-item ">
                                        <a class="nav-link click-scroll "
                                            href="?MainM_ID={{ $item->id }}&lang=<?php echo @$_GET['lang']; ?>">{{ $item->Ar_sub1menu }}</a>

                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link click-scroll dropdown-toggle" id="top" href="#top"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        @if ($item->Active == 'nav')
                                            {{ $item->Ar_sub1menu }}
                                        @endif


                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-light"
                                        aria-labelledby="navbarLightDropdownMenuLink">

                                        @foreach ($nav_sub as $item_sub)
                                            @if ($item_sub->parent_id == $item->id)
                                                @if (empty($item_sub->footer))
                                                    @if ($item->Active == 'nav')
                                                        <li><a class="dropdown-item"
                                                                href="?MainM_ID={{ $item_sub->id }}&lang=<?php echo @$_GET['lang']; ?>">
                                                                {{ $item_sub->Ar_sub1menu }}</a></li>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach

                                    </ul>

                                </li>
                            @endif
                        @endforeach



                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn inactive" href="?Donate='Donate">أتبرع
                                الأن</a>
                        </li>
                    </ul>
                </div>
                <div class='lang' dir='ltr'> <i class="bi bi-globe"> </i> <a href='?lang=en_gb'> الأنجيليزية
                        EN</a> </div>

            </div>
        </nav>


    </div>



@endif





@if (auth::guard('admin')->check())
    <script type="text/javascript">
        //DOM  AND OBJECT data


        new Vue({

            el: "#navCss",

            data: {

                navcolor: null,


            }

        })
    </script>





    <script type="text/javascript">
        function changenavcolor(e) {


            $.ajax({

                method: "GET",

                url: "{{ route('QuikEditstyle') }}",

                data: {

                    ulcolor: $('#navcolor').val(),


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
        @endif
    </script>


    <script>
        function loading() {



            document.querySelector('#top').click();

        }
    </script>
