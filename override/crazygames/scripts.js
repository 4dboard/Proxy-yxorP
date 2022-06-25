window.addEventListener('load', function () {
    let linksArray = document.querySelectorAll('header a');

    for (let i = 0; i < linksArray.length; i++) {
        linksArray[i].replaceWith(linksArray[i].cloneNode(true));
    }
});
