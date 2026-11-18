@foreach ($box as $boxitem)
    @if ($boxitem->cat_Name != null)
        <option value='{{ $boxitem->cat_Name }} '> {{ $boxitem->cat_Name }}

            @if (isset($_POST['MainM_ID']))
                @if ($boxitem->nav_id == $_POST['MainM_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @elseif(isset($_POST['box_ID']))
                @if ($boxitem->box_ID == $_POST['box_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @elseif(isset($_POST['Topic_ID']))
                @if ($boxitem->Topic_ID == $_POST['Topic_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @endif

        </option>
    @endif
@endforeach
