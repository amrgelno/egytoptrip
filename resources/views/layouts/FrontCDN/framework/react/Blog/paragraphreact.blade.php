class Paragraph extends React.Component{ // child class

render(){ //COMPONENT

const {paragraphs}=this.props;

const theparagraph=paragraphs.map(item=>{

return(


@yield('paragraph')


)

})

return(
<div>

    {theparagraph}


</div>
)

}
}
