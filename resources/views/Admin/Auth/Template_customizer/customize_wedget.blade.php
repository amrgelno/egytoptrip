<div class='Customize Appearance col-md-12' style='display:flex; row:1;'>

    <div class='setting col-md-8'>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title" style='color:blue'> Website Widgets Customize </h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <hr>

                <form name='Widget Customize' action='{{ route('customize.store') }}' method='POST'
                    enctype="multipart/form-data">

                    @csrf

                    <label>Social Media </label> <br />
                    <select name='SocialMedia'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select> <br />

                    <label>share Media </label> <select name='shareMedia'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select> <br />

                    <label>Location on Map</label>
                    <select name='Map'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>photo Gallery</label>
                    <select name='photoGallery'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>chatbot</label>
                    <select name='chatBot'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>clock</label>
                    <select name='clock'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>


                    <br />


                    <label>BrandIcon (favicon)</label>
                    <select name='BrandIcon'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />


                    <label>contactus</label>
                    <select name='contactus'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>Logo</label>
                    <select name='logo'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>search Bar</label>
                    <select name='SearchBar'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>



                    <br />


                    <label>lang section</label>
                    <select name='langsection'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>



                    <input type="submit" class="btn btn-primary" value="ok" name="WidgetCustomize" />


                </FORM>
            </div>

        </div>

    </div>

    <div class='input col-md-4'>

        <div class="card card-primary card-outline">


            <div class="card-body">

                @foreach ($widget as $widgetitem)
                    <B style='color:blue'> current Setting </B> <br />

                    <label>socialMediapanel : </labeL> {{ $widgetitem->socialMediapanel }} <br />
                    <label>share panel : </labeL> {{ $widgetitem->sharepanel }} <br />
                    <label> clock: </labeL> {{ $widgetitem->clock }} <br />
                    <labeL>photo Gallery: </labeL> {{ $widgetitem->photoGallery }} <br />
                    <labeL>chatBot: </labeL> {{ $widgetitem->chatBot }} <br />
                    <labeL>Map: </labeL> {{ $widgetitem->Map }} <br />
                    <labeL>contactus:</labeL> {{ $widgetitem->contactus }} <br />
                    <labeL>logo:</labeL> {{ $widgetitem->logo }} <br />
                    <labeL>Brand icon:</labeL> {{ $widgetitem->BrandIcon }} <br />
                    <labeL>Search Bar: </labeL> {{ $widgetitem->SearchBar }} <br />
                    <labeL>lang section: </labeL> {{ $widgetitem->langsection }}
                @endforeach

            </div>

        </div>

    </div>

</div>
