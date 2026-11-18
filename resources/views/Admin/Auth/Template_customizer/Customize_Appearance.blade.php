<div class='Customize Appearance col-md-12' style='display:flex; row:1;'>



    <div class='setting col-md-8'>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title" style='color:blue'>Customize Appearance & Layout</h5>
                <p class="card-text">
                    you can using this features in dashboard to custmize css setting
                </p>
                <hr>

                <B> typography </B> <br /> <br /> <br />

                <B style='color:blue'> General css(style) Setting : </B> <br />

                <form name='Typography' action='{{ route('customize.store') }}' method='POST'
                    enctype="multipart/form-data">

                    @csrf

                    <Label> Add Font type </Label>
                    <select name="FontType">
                        <option value="Verdana, Geneva, sans-serif"> Verdana, Geneva, sans-serif </option>
                        <option value="Georgia, Times New Roman, Times, serif"> Georgia, Times New Roman, Times,
                            serif </option>
                        <option value="Courier New, Courier, monospace"> Courier New, Courier, monospace
                        </option>
                        <option value="Arial, Helvetica, sans-serif"> Arial, Helvetica, sans-serif </option>
                        <option value="Tahoma, Geneva, sans-serif"> Tahoma, Geneva, sans-serif </option>
                        <option value="Times New Roman, Times, serif"> Times New Roman, Times, serif </option>
                        <option value="Palatino Linotype, Book Antiqua, Palatino, serif"> Palatino Linotype,
                            Book Antiqua, Palatino, serif </option>
                        <option value="Lucida Sans Unicode, Lucida Grande, sans-serif"> Lucida Sans Unicode,
                            Lucida Grande, sans-serif </option>
                        <option value="MS Serif, New York, serif"> MS Serif, New York, serif </option>
                        <option value="Comic Sans MS, cursive"> Comic Sans MS, cursive </option>
                    </select> <br />

                    <Label> Add Font size</Label>
                    <select name="Fontsize">
                        <option value="medium "> medium </option>
                        <option value="small"> small </option>
                        <option value="large"> large </option>
                    </select> &nbsp; &nbsp; &nbsp;

                    <Label> Add Font style </Label>
                    <select name="Fontstyle">
                        <option value="normal"> normal </option>
                        <option value="italic"> italic </option>
                        <option value="oblique "> oblique </option>
                    </select>

                    &nbsp; <Label> Add Fontcolor</Label><input type="color" name="Fontcolor" />

                    <br />


                    <Label> Add Footer color </Label><input type="color" name="Footercolor" />


                    <B>container : </B>

                    <select name='container'>
                        <option value=" container"> FullWidth </option>
                        <option value=" container-fluid"> Boxed </option>
                    </select><br />

                    <B style='color:blue'> Menu : </B> <br />
                    <Label> Add font color </Label><input type="color" name="ulcolor" /> <br />
                    <!-- menu width:<input type="text" placeholder="set a pixel value" name="width" required />
                    px &nbsp; &nbsp; &nbsp;
                    menu height:<input type="text" placeholder="set a pixel value" name="height" required />
                    px <br /> <br />-->
                    <Label> Add sub menu color </Label><input type="color" name="subcolor" /> &nbsp; &nbsp;
                    &nbsp;
                    <Label> Add Dropmenu color </Label><input type="color" name="Dropmenu" />
                    <br />


                    <B style='color:blue'> Headline : </B>

                    <br /> <Label>(H1) Colour </Label> <input type="color" name="H1_Colour" />
                    <Label> (H2) Color </Label> <input type="color" name="H2_Colour" />
                    <Label> (H3) Color </Label> <input type="color" name="H3_Colour" />
                    <Label> (H4) Color </Label> <input type="color" name="H4_Colour" />
                    <Label> (H5) Color </Label> <input type="color" name="H5_Colour" /><br />
                    <Label> (H6) Color </Label> <input type="color" name="H6_Colour" />


                    <br /><Label> Add Font type </Label>
                    <select name="headlinefont">
                        <option value="Verdana, Geneva, sans-serif"> Verdana, Geneva, sans-serif </option>
                        <option value="Georgia, Times New Roman, Times, serif"> Georgia, Times New Roman, Times,
                            serif </option>
                        <option value="Courier New, Courier, monospace"> Courier New, Courier, monospace
                        </option>
                        <option value="Arial, Helvetica, sans-serif"> Arial, Helvetica, sans-serif </option>
                        <option value="Tahoma, Geneva, sans-serif"> Tahoma, Geneva, sans-serif </option>
                        <option value="Times New Roman, Times, serif"> Times New Roman, Times, serif </option>
                        <option value="Palatino Linotype, Book Antiqua, Palatino, serif"> Palatino Linotype,
                            Book Antiqua, Palatino, serif </option>
                        <option value="Lucida Sans Unicode, Lucida Grande, sans-serif"> Lucida Sans Unicode,
                            Lucida Grande, sans-serif </option>
                        <option value="MS Serif, New York, serif"> MS Serif, New York, serif </option>
                        <option value="Comic Sans MS, cursive"> Comic Sans MS, cursive </option>
                    </select>

                    <br />


                    <B style='color:blue'> paragraph : </B>

                    <Label> paragraph_color </Label> <input type="color" name="paragraph_color" /> <br />
                    <Label> paragraph_FontType </Label> <select name="paragraph_FontType">
                        <option value="Verdana, Geneva, sans-serif"> Verdana, Geneva, sans-serif </option>
                        <option value="Georgia, Times New Roman, Times, serif"> Georgia, Times New Roman, Times,
                            serif </option>
                        <option value="Courier New, Courier, monospace"> Courier New, Courier, monospace
                        </option>
                        <option value="Arial, Helvetica, sans-serif"> Arial, Helvetica, sans-serif </option>
                        <option value="Tahoma, Geneva, sans-serif"> Tahoma, Geneva, sans-serif </option>
                        <option value="Times New Roman, Times, serif"> Times New Roman, Times, serif </option>
                        <option value="Palatino Linotype, Book Antiqua, Palatino, serif"> Palatino Linotype,
                            Book Antiqua, Palatino, serif </option>
                        <option value="Lucida Sans Unicode, Lucida Grande, sans-serif"> Lucida Sans Unicode,
                            Lucida Grande, sans-serif </option>
                        <option value="MS Serif, New York, serif"> MS Serif, New York, serif </option>
                        <option value="Comic Sans MS, cursive"> Comic Sans MS, cursive </option>
                    </select> <br />

                    <B style='color:blue'> Page Layout: </B>

                    <Label> Background color </Label><input type="color" name="bgcolor" /> <br />

                    <Label> Background Image </Label><input type="file" name="bgImage" />

                    &nbsp; &nbsp; &nbsp;


                    <br />
                    <B style='color:blue'>Links(hrefs): </B> <br />

                    <Label> Link Main color </Label> <input type="color" name="LinkMaincolor" /> <br />
                    <Label> Link Colour on Hover</Label> <input type="color" name="LinkHovercolor" /> <br />

                    <Label> Link Font type </Label>
                    <select name="LinkFonttype">
                        <option value="Verdana, Geneva, sans-serif"> Verdana, Geneva, sans-serif </option>
                        <option value="Georgia, Times New Roman, Times, serif"> Georgia, Times New Roman, Times,
                            serif </option>
                        <option value="Courier New, Courier, monospace"> Courier New, Courier, monospace
                        </option>
                        <option value="Arial, Helvetica, sans-serif"> Arial, Helvetica, sans-serif </option>
                        <option value="Tahoma, Geneva, sans-serif"> Tahoma, Geneva, sans-serif </option>
                        <option value="Times New Roman, Times, serif"> Times New Roman, Times, serif </option>
                        <option value="Palatino Linotype, Book Antiqua, Palatino, serif"> Palatino Linotype,
                            Book Antiqua, Palatino, serif </option>
                        <option value="Lucida Sans Unicode, Lucida Grande, sans-serif"> Lucida Sans Unicode,
                            Lucida Grande, sans-serif </option>
                        <option value="MS Serif, New York, serif"> MS Serif, New York, serif </option>
                        <option value="Comic Sans MS, cursive"> Comic Sans MS, cursive </option>
                    </select>


                    <br>


                    <Label> Business Model (Select App type) </Label>
                    <select name='BusinessModel' required>
                        @foreach ($view as $viewitem)
                            @if (isset($viewitem->BusinessModel))
                                <option value="{{ $viewitem->BusinessModel }}" align='center'> Select
                                    TOPIC_STYLE </option>
                                <option value="landing_page">
                                    @if ($viewitem->BusinessModel == 'landing_page')
                                        &RightTriangleBar; landing_page (onepage)
                                    @else
                                        landing_page (onepage)
                                    @endif
                                </option>
                                <option value="Blog">
                                    @if ($viewitem->BusinessModel == 'Blog')
                                        <span style='color:red;'>
                                            &RightTriangleBar; Blog (Multi pages)
                                        @else
                                            Blog (Multi pages)
                                    @endif
                                </option>
                                <option value="Blog with member">
                                    @if ($viewitem->BusinessModel == 'Blog with member')
                                        &RightTriangleBar; Blog with member (Multi pages)
                                    @else
                                        Blog with member (Multi pages)
                                    @endif
                                </option>
                                <option value="E-commerce">
                                    @if ($viewitem->BusinessModel == 'E-commerce')
                                        &RightTriangleBar; E-commerce
                                    @else
                                        E-commerce
                                    @endif
                                </option>
                                <option value="Booking">
                                    @if ($viewitem->BusinessModel == 'Booking')
                                        <span style='color:red;'>
                                            &RightTriangleBar; Booking
                                        @else
                                            Booking
                                    @endif
                                </option>
                            @else
                                <option value="Blog" align='center'> Select TOPIC_STYLE </option>
                                <option value="landing_page"> landing_page (onepage) </option>
                                <option value="Blog"> Blog </option>
                                <option value="Blog with member"> Blog with member </option>
                                <option value="E-commerce"> E-commerce </option>
                                <option value="Booking"> Booking </option>
                            @endif
                        @endforeach

                    </select><br />


                    <input type="submit" class="btn btn-primary" value="ok" name="CustomizeAppearance" />

                </form>


            </div>

        </div>

    </div>



    <div class='input col-md-4'>


        <div class="card card-primary card-outline">
            <div class="card-body">

                @foreach ($view as $viewitem)
                    <B style='color:blue'> current Setting </B> <br />
                    <label>Fontstyle : </labeL> {{ $viewitem->Fontstyle }} <br />
                    <label> Fontsize: </labeL> {{ $viewitem->Fontsize }} <br />
                    <labeL>ulcolor: </labeL> {{ $viewitem->ulcolor }} <br />
                    <labeL>Fontcolor: </labeL> {{ $viewitem->Fontcolor }} <br />
                    <labeL>FontType: </labeL> {{ $viewitem->FontType }} <br />
                    <labeL>sub1color: </labeL> {{ $viewitem->sub1color }} <br />
                    <labeL>pagecolor: </labeL> {{ $viewitem->bgcolor }} <br />
                    <labeL>bgImage: </labeL> {{ $viewitem->bg_Image }} <br />
                    <labeL style='color:blue'>headline: </labeL>
                    <label> HEADLINE (H1) Colour :-</label> {{ $viewitem->H1_Colour }}
                    <label> HEADLINE (H2) Colour :- </label> {{ $viewitem->H2_Colour }}
                    <label> HEADLINE (H3) Colour :- </label> {{ $viewitem->H3_Colour }}
                    <label> HEADLINE (H4) Colour :-</label> {{ $viewitem->H4_Colour }}
                    <label> HEADLINE (H5) Colour :-</label> {{ $viewitem->H5_Colour }}
                    <label> HEADLINE (H6) Colour :-</label> {{ $viewitem->H6_Colour }}<br />
                    <label>Headline Font type :</label> {{ $viewitem->headline_FontType }}<br />

                    <labeL style='color:blue'>paragraph: </labeL>

                    <label> paragraph_colour :-</label> {{ $viewitem->paragraph_colour }}

                    <label> paragraph_FontType :-</label> {{ $viewitem->paragraph_FontTyper }} <br />>


                    <labeL>container: </labeL> {{ $viewitem->container }} <br />
                    <labeL>lang: </labeL> {{ $viewitem->lang }} <br />
                    <labeL>BusinessModel: </labeL> {{ $viewitem->BusinessModel }}
                @endforeach


            </div>

        </div>

    </div>

</div>
