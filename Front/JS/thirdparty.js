
export function jsonlayoutfx() {


    const page = window.location.search;

    //const endpoint='api/json';

    const endpoint = 'jsonlayoutfx';

    //const domain = window.location.origin;

    const origin = window.location.origin;

    const pathname = window.location.pathname;

    const link = origin + pathname + endpoint + page;


    new Vue({
        el: "#app",
        data: {

            "map_location": "Sunrise_Balloon",
            "latitude": "25.689119",
            "longitude": "32.638538",
            "menucolor": null,
            "menufontcolor": null,
            "submenucolor": null,
            "submenufontcolor": null,
            "Footercolor": null,
            "isdisplay": false,
            "displayblock": true,
            "displaynone": false,
            "themes": "themes",
            "navID": "navID",
            "box_ID": "box_ID",
            "Topic_ID": "Topic_ID",
            "Footersitemap": "Footersitemap",
            "bgimage": "bgimage",
            "container": "container",
            "Breadcrumbs": "Breadcrumbs",
            "cat_type": "cat_type",
            "page_title": "page_title",
            "langsection": "langsection",
            "BSModel": "BSModel",
            "SearchBar": "SearchBar",
            "Domain_site": "Domain_site",
            "Microformats": "Microformats",
            "pg_dir": "pg_dir",
            "boxMinID": "boxMinID",
            "testimonial-carousel": "#testimonial-carousel",
            "client_commentMax": [],
            "client_commentMin": [],
            "lang": "lang",
            "Keywords": [],
            "nav": [],
            "nav2": [],
            "nav_sub": [],
            "nav_subm": [],
            "navNullfooter": [],
            "marque": [],
            "faqs":[],
            "topic": [],
            "paragraph": [],
            "static": [],
            "packageDetails": [],
            "box": [],
            "boxMax": [],
            "boxMin": [],
            "member_pr": [],
            "member": "member",
            "member_user": "member_user",
            "member_id": "member_id",
            "fav_product": "fav_product",
            "count_fav_product": "count_fav_product",
            "Admin_user": "Admin_user",
            "fpforms": [],
            "cover": [],
            "slider": [],
            "sliderMin": [],
            "sliderMax": [],
            "social": [],
            "Maxcompanyid": [],
            "gallery": [],
            "Imgpath": "Imgpath",
            "boxurl": "?box_ID=",
            "slide": 0,
            "sliding": null,
            "currentPage": 1,
            "itemsPerPage": 1
        },
        computed: {

            totalPages() {
                return Math.ceil(this.box.length / this.itemsPerPage);
            },
            paginatedData() {
                const start = (this.currentPage - 1) * this.itemsPerPage;
                return this.box.slice(start, start + this.itemsPerPage);
            },
            MaxboxId() {

                return Math.ceil(this.box.length);
            }
        },
        methods: {
            goToPage(page) {
                this.currentPage = page;
            },
            nextPage() {
                if (this.currentPage < this.totalPages) {
                    this.currentPage++;
                }
            },
            prevPage() {
                if (this.currentPage > 1) {
                    this.currentPage--;
                }
            },
            getUser() {
                const URL = link;
                axios.
                    get(URL).
                    then(res => {

                        this.navID = res.data.navID,
                            this.themes = res.data.themes,
                            this.box_ID = res.data.box_ID,
                            this.Topic_ID = res.data.Topic_ID,
                            this.Imgpath = "./Front/IMG/",
                            this.bgimage = res.data.bgimage,
                            this.SearchBar = res.data.SearchBar,
                            this.container = res.data.container,
                            this.Microformats = res.data.Microformats,
                            this.Keywords = res.data.Keywords,
                            this.Domain_site = res.data.Domain_site,
                            this.Breadcrumbs = res.data.Breadcrumbs,
                            this.lang = res.data.lang,
                            this.cat_type = res.data.cat_type,
                            this.page_title = res.data.page_title,
                            this.langsection = res.data.langsection,
                            this.BSModel = res.data.BSModel,
                            this.navNullfooter = res.data.navNullfooter,
                            this.pg_dir = res.data.pg_dir,
                            this.nav = res.data.nav,
                            this.nav2 = res.data.nav2,
                            this.nav_sub = res.data.nav_sub,
                            this.nav_subm = res.data.nav_subm,
                            this.cover = res.data.cover,
                            this.slider = res.data.slider,
                            this.sliderMin = res.data.sliderMin,
                            this.sliderMax = res.data.sliderMax,
                            this.social = res.data.social,
                            this.member_pr = res.data.member_pr,
                            this.box = res.data.box,
                            this.packageDetails = res.data.packageDetails,
                            this.boxMax = res.data.boxMax,
                            this.boxMin = res.data.boxMin,
                            this.boxMinID = res.data.boxMinID,
                            this.client_commentMax = res.data.client_commentMax,
                            this.client_commentMin = res.data.client_commentMin,
                            this.paragraph = res.data.paragraph,
                            this.member = res.data.member,
                            this.Admin_user = res.data.Admin_user,
                            this.member_pr = res.data.member_pr,
                            this.member_user = res.data.member_user,
                            this.member_id = res.data.member_id,
                            this.fav_product = res.data.fav_product,
                            this.count_fav_product = res.data.count_fav_product,
                            this.topic = res.data.topic,
                            this.static = res.data.static,
                            this.marque = res.data.marque,
                            this.fpforms = res.data.fpforms,
                            this.Footersitemap = res.data.Footersitemap,
                            this.gallery = res.data.gallery,
                            this.faqs = res.data.faqs,
                            this.Maxcompanyid = res.data.Maxcompanyid;

                    })
            }
        },
        mounted() {
            this.getUser();









        },
    })


}
