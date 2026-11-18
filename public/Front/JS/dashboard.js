
    function loading() {



        document.querySelector('.userinfo').click();
        $("#loader").delay(800).fadeOut("fast");

    }


    const links = document.querySelectorAll('.nav-treeview  .nav-item  .nav-link');

    if (links.length) {
        links.forEach((link) => {
            link.addEventListener('click', (e) => {
                links.forEach((link) => {
                    link.classList.remove('active');
                });
                // e.preventDefault();
                link.classList.add('active');
            });
        });
    }


    function goback() {
        window.history.go(-1);
    }



    function gonext() {
        window.history.go(+1);
    }



    const reloadtButton = document.querySelector("#reload");
    // Reload everything:
    function reload() {
        reload = location.reload();
    }
    // Event listeners for reload
    reloadButton.addEventListener("click", reload, false);

