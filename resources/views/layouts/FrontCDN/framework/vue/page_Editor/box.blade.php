<div v-if="Admin_user  != '' ">

    <form action="./admin/Dashboard/box" method="get">

        <input type="hidden" name="MainM_ID" :value="navID" required />
        <input type="hidden" name="page_id" value="nav_id" />

        <div v-if='box_ID  !=""  '>

            <input type="hidden" name="MainM_ID" :value="box_ID" />
            <input type="hidden" name="page_id" value="box_id" />

        </div>

        <div v-else-if='Topic_ID  !=""  '>

            <input type="hidden" name="MainM_ID" :value="Topic_ID" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        </div>


        <div v-else>

            <input type="hidden" name="MainM_ID" :value="navID" required />
            <input type="hidden" name="page_id" value="nav_id" />

        </div>


        <div class="col-lg-12 col-12 text-center mb-4" v-for="(boxitem,i) in  box" :key="i"
            v-if=" boxitem.BOX_STYLE == 'BoxModel4'  &&   boxitem.cat_Name  !=Null ">

            <input type="hidden" name="cat_Name" :value="boxitem.cat_Name" />

        </div>



        <INPUT TYPE='submit' name='updateBox' title='Edit categeories' class='insert'
            style="margin: 5% 33%;
        width: 22px;
        background-size: cover;
        background-repeat: no-repeat;
        /* content: 'ewrerer'; */
        border: unset;
        /* background: yellow; */
        background-position: center;
        background-image: url(Front/ICON/author.png);"
            value />


    </form>


</div>
