
@foreach($paragraph  as    $paragraphitem     )

<div class="content" v-show='writer'>

@if (auth::guard('admin')->check())


<form action="{{route('paragraph.index')}}" method="get">

@csrf

@method('PUT')  

@if(isset($navID))
<input type="hidden"  name="MainM_ID"   value="{{ $navID  }}"/>
<input type="hidden"  name="page_id"   value="nav_id"/>


@elseif(isset($box_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $box_ID  }}"/>
<input type="hidden"  name="page_id"   value="box_id"/>

@elseif(isset($Topic_ID))

<input type="hidden"  name="MainM_ID"   value="{{ $Topic_ID  }}"/>
<input type="hidden"  name="page_id"   value="relatedtopic_id"/>

@endif


@if( isset($navID) OR isset($box_ID) OR  isset($Topic_ID)  )
<INPUT TYPE='submit' name='Editparagraph'   title='Editparagraph' class='insert'  
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


    {!! $paragraphitem -> Paragraph  !!}   </div>


    @endforeach




