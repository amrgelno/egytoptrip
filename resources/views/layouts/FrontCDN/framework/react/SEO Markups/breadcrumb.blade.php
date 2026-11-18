class Breadcrumbs extends React.Component{

render(){ //COMPONENT

return(

<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="">{ this.props.cattype }</a></li>
        <li class="breadcrumb-item active">{ this.props.pagetitle }</li>
    </ol>
</div>


)

}
}
