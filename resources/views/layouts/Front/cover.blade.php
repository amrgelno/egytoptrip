@foreach ($cover as $cover_item)
    @include('layouts.Front.page_Editor.cover')

    <section class="head-section  mt-2">
        <div class="row">
            <div class="col-12">
                <div class="about-header header-div position-relative">
                    <img src="Front/IMG/{{ $cover_item->Cover_Name }}" width='100%' Height='10%'
                        alt="{{ $cover_item->Cover_Name }}" class=" img-fluid page-header-img about-header_figure ">
                </div>
            </div>
        </div>
    </section>
@endforeach
