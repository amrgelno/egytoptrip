@foreach ($SNumbers as $SNumbersitem)
    @if ($SNumbersitem->SNumber_Name != null)
        <option value='{{ $SNumbersitem->SNumber_Name }}'> {{ $SNumbersitem->SNumber_Name }}

            @if (isset($_POST['MainM_ID']))
                @if ($SNumbersitem->nav_id == $_POST['MainM_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @elseif(isset($_POST['box_ID']))
                @if ($SNumbersitem->box_ID == $_POST['box_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @elseif(isset($_POST['Topic_ID']))
                @if ($SNumbersitem->Topic_ID == $_POST['Topic_ID'])
                    (on page)
                @else
                    (Other pages)
                @endif
            @endif


        </option>
    @endif
@endforeach
