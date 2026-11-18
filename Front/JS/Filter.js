export function filter() {

    var GroupSize145 = $('#GroupSize145').val();

    var GroupSize146 = $('#GroupSize146').val();

    var GroupSize147 = $('#GroupSize147').val();

    var colsel = 'GroupSize';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        ID: '',
        colsel: colsel,
        filter: GroupSize146,
        token: "{{ csrf_token() }}",
        Method: "POST"
    });


}
