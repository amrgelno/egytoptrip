@extends('layouts.FrontCDN.framework.react.Blog.Staticreact')

@section('Staticreact')

    <article class="static_box">

        <div class="headline col-sm-7 col-md-7  col-lg-7 ">

            {this.props.static.map(item=>

            <div>

                { item.SNumber_Name != ' ' ? (<h2>{ item.SNumber_Name }</h2>) : " " }


            </div>


            )}

        </div>



        {this.props.static.map(item=>
        <div class="FRAME_static">
            <div class="img1_static">
                <img src={ Img+item.ImageName } loading='lazy' title='Asphallt.png' alt={item.ImageName}
                    class="front_static" />

                <div class="title_static">
                    <span class="title_s">{item.title }</span> <br />
                    <span class="counter" data-target={item.SNumber_Num}> 0 </span>

                </div>
            </div>
        </div>

        )}









    </article>




@stop
