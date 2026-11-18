@include('layouts.FrontCDN.framework.vue.headtag')



<body>


    {{-- @livewireStyles()


    @livewire('indexvue')

//for Design

    @livewireScripts() --}}


    <div id="app" v-cloak>


        <div :class="container">

            <template v-for="(data,i) in themes" :key="i">

                <template v-if="data.Theme_Name=='default'  &&  data.status=='Active' ">

                    @include('layouts.FrontCDN.framework.vue.defaulttheme')

                </template>


                <template v-else-if="data.Theme_Name=='Blog'  &&  data.status=='Active' ">

                    <h1> Your template</h1>

                </template>


            </template>


        </div>

        <!--  End  Footer  Component-->

    </div>

</body>

<script src="{{ asset('Front/JS/thirdparty.js') }}" type="text/javascript"></script>

</html>
