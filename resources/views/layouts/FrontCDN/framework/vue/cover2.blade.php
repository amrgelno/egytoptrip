<section class="head-section  mt-2">
    <div class="row">
        <div class="col-12">
            <div class="about-header header-div position-relative" v-for="(boxitem,i) in  packageDetails"
                :key="i"  :style="{ backgroundImage: 'url(' + Imgpath + boxitem.ImageName + ')' }"   style='background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center; width: 100%;  height: 554px;'>

            </div>
        </div>
    </div>
</section>
