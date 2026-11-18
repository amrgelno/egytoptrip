
<div class="row">

<div class="GalleryItem  wow bounceInUp  col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" v-for="(data,i) in  gallery"
        :key="i"    data-wow-duration="1s" data-wow-delay="0.3s">

  <div class="  custom-block-wrap gallery  col-lg-11  col-xs-6 " style='margin:20px;'>

         <a :href="'Front/IMG/' + data.pic" data-lightbox="image-1" :data-title="data.title +'<br/>'+data.Description">
         
          <div class="imgG1"   :style="{ backgroundImage: 'url(' + Imgpath + data.pic + ')' }">
    

            </div></a>


            <div class="backface  ms-1" style='display:flex;  flex-direction:column;  flex-wrap: nowrap  left:unset; '>
                <div class="d-block col-12 ">
                    <p class="featured-block-text  col-12"   style="font-size:14px;  text-align: center;   width:fit-content">
                    
                        <br />

                    </p>


                </div>


                </div>
            </div>

        </div>


                </div>

                    



