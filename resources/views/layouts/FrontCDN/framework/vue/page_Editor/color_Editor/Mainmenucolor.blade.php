<div v-if="Admin_user  != '' ">

    <input type="color" name="Menucolor" id='ulcolor' class="hint--left" aria-label="Menucolor" v-model='menucolor'
        onchange='changeulcolor();'>


    <input type="color" name="fontcolor" id='Fontcolor' class="hint--left" aria-label="menufontcolor"
        v-model='menufontcolor' onchange='changeFontcolor();'>

</div>
