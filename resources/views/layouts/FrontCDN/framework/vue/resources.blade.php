@include('csstheme')


@php

include '../resources/views/layouts/FrontCDN/framework/vue/connect.php';

class MetaTag extends condb
{
    public function sql()
    {

        $selector = 'select * From  companies';

        $boxquery = $this->connectF()->query($selector);

        while ($column = mysqli_fetch_object($boxquery)) {
            include '../resources/views/layouts/FrontCDN/framework/vue/SEO Markups/Seomarkupmetatag.blade.php';
        }
    }
}
$use = new MetaTag();
$use->connectF();
$use->sql();

@endphp





