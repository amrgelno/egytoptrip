
let started = false;
// Function Started ? No window.onscroll = function ()
$(window).scroll(function () {

    let nums = document.querySelectorAll(".counter-number,counter-num");

    if ($(window).scrollTop() >= $('.navbar').offset().top) {

        if (!started) { nums.forEach((num) => startCount(num)); } started = true;
    }
});


function startCount(el) {
    let target = el.dataset.target;
    let ourcounter = setInterval(() => { el.textContent++; if (el.textContent == target) { clearInterval(ourcounter); } }, 4000 / target);
}



/* filterGroupSize */


function filter23() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();

    var lang = $('#lang').val();

    var box_ID = $('#box_ID').val();

    var colsel = 'GroupSize';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "PrivateTour",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}




function filter21() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();

    var lang = $('#lang').val();


    var colsel = 'GroupSize';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "GroupTour",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}









function filter24() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();

    var box_ID = $('#box_ID').val();

    var colsel = 'GroupSize';

    var lang = $('#lang').val();



    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "SmallGroupTour",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}




/* filter Price */



function filter160() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();

    var lang = $('#lang').val();


    var colsel = 'price';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "1500",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}




function filter161() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();

    var box_ID = $('#box_ID').val();

    var lang = $('#lang').val();


    var colsel = 'price';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}




function filter162() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();


    var lang = $('#lang').val();


    var colsel = 'price';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "3000",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}


/* filter Duration */


function filter154() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();


    var lang = $('#lang').val();


    var colsel = 'Duration';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "10",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}





function filter149() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();


    var lang = $('#lang').val();


    var colsel = 'Duration';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}




function filter153() {

    var Destination = $('#Destination').val();

    var City = $('#City').val();


    var box_ID = $('#box_ID').val();


    var lang = $('#lang').val();


    var colsel = 'Duration';

    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#programs').load('http://localhost/DMOTOURS/Findtours', {

        box_id: box_ID,
        Destintion: Destination,
        City: City,
        colsel: colsel,
        lang: lang,
        filter: "20",
        token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
        Method: "POST"
    });


}



















/* filter Destinations */


// function filter6() {

//     var Destination6 = $('#Destination6').val();

//     var colsel = 'Country';

//     $.ajaxSetup({

//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });


//     $('#programs').load('http://localhost/DMOTOURS/Findtours', {

//         box_id: '',
//         colsel: colsel,
//         lang: Destination6,
//         filter: "Egypt",
//         token: "ybzxKqEigwC4mqqEW5jJxJzH0u9uW01ChtA7y4o3",
//         Method: "POST"
//     });


// }







