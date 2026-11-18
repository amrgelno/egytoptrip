@extends('layouts.FrontCDN.framework.react.Blog.box2react')

@section('box2')
    <article class="categorie">

        <div class="headline col-sm-7 col-md-7  col-lg-7 ">

            {this.props.boxes.map(item=>

            <div>

                { item.cat_Name != ' ' ? (<h2>{ item.cat_Name }</h2>) : " " }


            </div>


            )}

        </div>



        <card class="categoriescard">

            {this.props.boxes.map(item=>

            <overlay>
                <div class="FRAME">
                    <div class="imgb"><img class="front" src={Img+item.ImageName} />
                        <div class="titleb">
                            @if (@$_GET['lang'] == 'en' or empty(@$_GET['lang']))
                                <a id="linker" href={Arboxext + item.ID}> { item.title } </a>
                            @elseif($_GET['lang'] == 'Ar')
                                <a href={Enboxext + item.ID}> { item.Ar_title } </a>
                            @endif

                        </div>
                    </div>
                </div>
            </overlay>
            )}

        </card>






    </article>








@stop
