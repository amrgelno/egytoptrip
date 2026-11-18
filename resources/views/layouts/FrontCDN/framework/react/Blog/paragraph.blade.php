    @extends('layouts.FrontCDN.framework.react.Blog.paragraphreact')

    @section('paragraph')

        <div class="paragraph" key={item.id}>

            <h1>
                @if (@$_GET['lang'] == 'en' or empty(@$_GET['lang']))
                    { item.Paragraph }
                @elseif($_GET['lang'] == 'Ar')
                    { item.Ar_paragraph }
                @endif

            </h1>
        </div>

    @stop
