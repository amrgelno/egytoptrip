function showResult() {


    document.querySelector('#app').style.display = 'block';


    function loadScript(src, onloadFunction) {
        let script = document.createElement('script');
        script.onload = onloadFunction;
        script.src = src;
        script.type = 'text/javascript';
        document.body.append(script);
    }

    loadScript('Front/JS/Axios.min.js');
    loadScript('Front/JS/indexcopy-min.js');
    loadScript('Front/JS/weather-app.js');
    loadScript('https://momentjs.com/downloads/moment.min.js');
    loadScript('Front/JS/SpryAccordion.js');
    loadScript('Front/JS/lightbox.min.js');
    loadScript('Front/JS/bootstrap.min.js');
    // loadScript('Front/JS/widget.js');


    // function loadStyle(src, onloadFunction) {
    //     let style = document.createElement('link');
    //     style.onload = onloadFunction;
    //     style.href = src;
    //     style.rel = 'stylesheet';
    //     document.head.append(style);
    // }


    // // loadStyle('Front/css/Autostyle.php');

    // loadStyle('Front/css/Herostyle.css');



}
