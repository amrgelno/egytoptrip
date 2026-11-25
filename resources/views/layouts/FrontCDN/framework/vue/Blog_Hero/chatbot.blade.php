<div class="all-ioc" :class='{ active: isdisplay }'>
    <div class="show-icons" @click='isdisplay =  !isdisplay'>
        <Img src='Front/IMG/male-call-centre-operator.png' width='80%' height='40px'>
        <div class="sonar-wave"></div>
        <div class="sonar-wave2"></div>
    </div>
<template v-for="(data,i) in Maxcompanyid" :key="data.id">
    <div class="whats-icon" data-target="html">
        <a :href="'//wa.me/+20'+data.Tele_Number"><Img src='Front/IMG/whatsapp.jpg' width='50%' height='40px'> </a>
    </div>

    <div class="messenger-icon" data-target="html">
        <a :href="'//t.me/+20'+data.Tele_Number"><Img src='Front/IMG/telegram.png' width='50%' height='40px'> </a>

    </div>
</template>

</div>




