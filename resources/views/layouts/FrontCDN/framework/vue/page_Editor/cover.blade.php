<div v-if="Admin_user  != '' " style="z-index:100;    position: relative;">
    <form action="./admin/Dashboard/cover" method="get">
        <input type="hidden" name="_token" value="KNVVlXWwgKVd2oKnPlLGcycIO3y2ZK908jkx5uRs">
        <input type="hidden" name="_method" value="PUT">
        <div v-if="box_ID  != ''  ">
            <input type="hidden" name="MainM_ID" :value="box_ID" />
            <input type="hidden" name="page_id" value="box_id" />
        </div>
        <div v-else-if="Topic_ID  != ''  ">
            <input type="hidden" name="MainM_ID" :value="Topic_ID" />
            <input type="hidden" name="page_id" value="relatedtopic_id" />
        </div>
        <div v-else>
            <input type="hidden" name="MainM_ID" :value="navID" required />
            <input type="hidden" name="page_id" value="nav_id" />
        </div>
        <INPUT TYPE='submit' name='Edit_cover' title='change cover' class='insert'
            style="margin: 8% 33%;
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
