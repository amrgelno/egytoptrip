@foreach ($paragraph as $paragraphitem)
    <div class="content">

        @include('layouts.Front.page_Editor.paragraph')

        <p class="about-desc mt-4  ms-5">


            @if (@$_GET['lang'] == 'en_gb' or empty($_GET['lang']))
                {!! $paragraphitem->Paragraph !!}
            @elseif($_GET['lang'] == 'ar')
                {!! $paragraphitem->Ar_paragraph !!}
            @endif


        </p>

    </div>
@endforeach
