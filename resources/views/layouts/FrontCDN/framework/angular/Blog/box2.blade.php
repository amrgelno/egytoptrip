





@foreach($box as $boxitem)

  @if(!empty($boxitem -> cat_Name)  )


    <div class="headline col-sm-7 col-md-7  col-lg-7 ">
        <h2><div class="clear"></div>{{ $boxitem -> cat_Name}}    </h2> 
      
      
        @if (auth::guard('admin')->check())


<form action="{{route('box.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID) OR  empty($navID))


@if(empty($navID))
<input type="hidden"  name="MainM_ID"   value="1"/>

@else

<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>

@endif


<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  OR  empty($navID)  )
<INPUT TYPE='submit' name='updateBox'   title='Edit categeories' class='insert'  
style="margin: 5% 33%;
    width: 22px;
    background-size: cover;
    background-repeat: no-repeat;
    /* content: 'ewrerer'; */
    border: unset;
    /* background: yellow; */
    background-position: center;
    background-image: url(../../../Front/ICON/author.png);" value/>  

    @endif

    </form>

@endif
 
      </div>
    @endif

    @endforeach

    @foreach($box as $boxitem)

        
                <card class="categoriescard">
                <overlay><div class="FRAME" >
                <div class="imgb"><img src="Front/IMG/{{$boxitem -> ImageName}}" class="front"> 
                <div class="titleb"><a href="?box_ID={{ base64_encode($boxitem -> ID) }}" id="linker">
                  
                  
                @if(@$_GET['lang'] =='en_gb' OR empty ($_GET['lang']) ) 
                  

                  {{$boxitem -> title }}
                  

                  @elseif($_GET['lang'] =='ar')

                  {{$boxitem -> Ar_title }}


                  @endif</a>
              </div></div></div></overlay></card>
      
@endforeach


{{--  <script src="{{asset('Front/Js/jquery-3.6.0.min.js') }}"  type="text/javascript"  defer></script>  --}}
