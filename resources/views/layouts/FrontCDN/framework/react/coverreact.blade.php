class Cover extends React.Component{ // child class

render(){ //COMPONENT

const {covers}=this.props;

const Img='Front/IMG/';

const theitems=covers.map(item=>{

return(


@yield('cover')



)

})

return(
<div>

    {theitems}


</div>
)

}
}
