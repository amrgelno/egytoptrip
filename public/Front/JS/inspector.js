// Disable Right click

document.addEventListener("contextmenu", (e) => {
    e.preventDefault();
}, false);

// Disable shortcut

document.addEventListener("keydown", (e) => {
    if (e.ctrlkey || e.keycode == 123) {

        e.preventDefault();
        e.stopPropagation();
    }

});