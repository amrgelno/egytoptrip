class Topic extends React.Component{ // child class

render(){ //COMPONENT

const {topics}=this.props;
const Img='Front/IMG/';
const ArTopicext='?Topic_ID=';
const EnTopicext='?lang=ar&Topic_ID=';

const thetopic=topics.map(item=>{

return(


@yield('topic')


)

})

return(
<div>

    {thetopic}


</div>
)

}
}
