<div class='Customize Appearance col-md-12' style='display:flex; row:1;'>

    <div class='setting col-md-8'>

        <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title" style='color:blue'>SEO & SAFETY Setting</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <hr>

                <form name='SEO Customize' action='{{ route('customize.store') }}' method='POST'
                    enctype="multipart/form-data">

                    @csrf

                    <B style='color:blue'> SEO Setting : </B> <br />

                    <label>Domain_site</label>


                    @foreach ($SEO as $seoitem)
                        <input type='text' name='Domainsite' value="{{ $seoitem->Domain_site }}"> <br />
                    @endforeach


                    <label>Display_website_Keywords on Search engine</label>
                    <select name='KEYWORDS'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select> <br />

                    <label>Breadcrumbs</label> <select name='Breadcrumbs'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select> <br />

                    <label>FAQS</label>
                    <select name='FAQS'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <label>schema</label>
                    <select name='schema'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>


                    <label>Auto-Meta</label>
                    <select name='AutoMeta'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>


                    <label>Footersitemap</label>
                    <select name='Footersitemap'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>Microformats_type</label>
                    <select name='Microformats'>
                        <option value="schemaorg"> schemaorg </option>
                        <option value="vcard"> vcard </option>
                    </select>

                    <br />

                    <B style='color:blue'> SAFETY Setting : </B> <br />

                    <label>INSPECT TOOL </label>
                    <select name='INSPECT'>
                        <option value="  Active   "> Active </option>
                        <option value=" DisActive"> DisActive </option>
                    </select>

                    <br />

                    <label>content of page </label>
                    <select name='contentpage'>
                        <option value="  Active   "> Hide </option>
                        <option value=" DisActive"> unhide </option>
                    </select>




                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="btn btn-primary"
                        value="ok" name="SEOCustomize" />


                </FORM>


            </div>

        </div>

    </div>

    <div class='input col-md-4'>

        <div class="card card-primary card-outline">
            <div class="card-body">


                @foreach ($SEO as $seoitem)
                    <B style='color:blue'> current Setting </B> <br />

                    <label>Domain_site : </labeL> {{ $seoitem->Domain_site }} <br />
                    <label>KEYWORDS : </labeL> {{ $seoitem->KEYWORDS }} <br />
                    <label> Breadcrumbs: </labeL> {{ $seoitem->Breadcrumbs }} <br />
                    <labeL>FAQS: </labeL> {{ $seoitem->FAQS }} <br />
                    <labeL>Autometa: </labeL> {{ $seoitem->Autometa }} <br />
                    <labeL>schema: </labeL> {{ $seoitem->schema }} <br />
                    <labeL>Microformats: </labeL> {{ $seoitem->Microformats }} <br />
                    <labeL>Footersitemap: </labeL> {{ $seoitem->Footersitemap }} <br />
                    <labeL>INSPECT TOOL: </labeL> {{ $seoitem->inspect }} <br />
                    <labeL>content of page: </labeL> {{ $seoitem->contentpage }}
                @endforeach


            </div>

        </div>

    </div>

</div>
