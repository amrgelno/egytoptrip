@extends('layouts.FrontCDN.framework.react.sliderreact')

@section('Slider')

    <div class="slider col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="sliderimg col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <div id="theCarousel" class="carousel slide" item-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">


                        <div class ="slide1">{this.props.sliderMin.map(item=><img loading='lazy' class="Image"
                                src={Img+item.ImageName} />)}
                        </div>
                        <div class="carousel-caption">
                            {this.props.sliderMin.map(item=><h1> {item.title} </h1> )}
                        </div>

                    </div>

                    <div class='wrapped in an enclosing Tag  item'>


                        {this.props.sliderMax.map(item=>

                        <div class="item">

                            <div class="slide2"><img loading='fast' class="Image" src={Img+item.ImageName} /></div>
                            <div class="carousel-caption">
                                <h1>{item.title}</h1>
                            </div>
                        </div>


                        )}

                    </div>

                </div>

            </div>
        </div>

    </div>

@stop
