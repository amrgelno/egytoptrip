@extends('layouts.FrontCDN.framework.react.Footerreact')

@section('Footer')

    <footer class="footer">

        <div class="info">
            {this.props.Maxcompanyid.map(item=>

            <div class='wrapped in an enclosing Tag'>
                <div class="einfo">
                    <div class="soicon"><img src="Front/IMG/ame.png" class="socicon" /></div>
                    <div class="email"> <a href={EmailLink+item.Tele_Number}>{ item.Email } </a> </div>
                </div>


                <div class="einfo">
                    <div class="soicon"><img src="Front/IMG/phone-icon-line-telephone-symbol-vector-21084486.png"
                            class="socicon" /></div>
                    <div class="mobile"> <a href={wpLink+item.Tele_Number}>{ item.Tele_Number } </a> </div>
                </div>



                <div class="einfo">
                    <div class="soicon"><img src="Front/IMG/Address.png" class="socicon" /></div>
                    <div class="email"> { item.country } </div>
                </div>

            </div>
            )}

        </div>




        <ul id="menu">

            {this.props.navNullfooter.map(item=>

            <li class="Link_M"><a href={NavLink+item.id}>
                    { this.props.Footersitemap == 'Active' ? item.sub1menu : " " }
                </a></li>

            )}

        </ul>




        <br /> <br />
        <br />
        <br /> <br />
        <br />
        <br /> <br />
        <br />
        <br /> <br />
        <br />

        <div class="copyright">
            <br />&nbsp; tiktuk_2023
        </div>


        <div class="logo">

            {this.props.Maxcompanyid.map(item=>


            <img src={Img+item.path_pic} class="logo" />


            )}

        </div>





        <div class="socialposition">

            {this.props.social.map(item=>

            <div class="icon">

                <a href={item.links}>

                    <img src={Img+item.social_icon} class="soc_icon" />

                </a>

            </div>
            )}


        </div>


    </footer>







@stop
