
    <div    v-for="(data,i) in faqs"    :key="i">

        <div id="Accordion1" class="Accordion"   style='width: 80%;  margin: 0 auto'>

            <div class="AccordionPanel">
                <div class="AccordionPanelTab"   align="center">

                    <button align='center' style='background:none;  border:unset;    text-align:center'
                        class='Accordine-bt'    @click="data.show = !data.show">

                        <span v-if="lang  == 'en_gb' " v-html='data.Question'></span>
                        <span v-if="lang  == 'Ar'" v-html='data.Ar_Question'></span>

                        </button>

                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;"   v-show='data.show'
                    v-if="lang  == 'en_gb' " v-html='data.Answer'>
                </div>

                <div class="AccordionPanelContent" style="height: FIT-CONTENT;"   v-show='data.show'   v-if="lang  == 'Ar' "
                    v-html='data.Ar_Answer'>
                </div>

            </div>
        </div>


    </div>




