let scroll = 0;

window.addEventListener('scroll',() => {
    const body = document.body;

    if (!body.classList.contains('bounce')) {

        setTimeout(() => {
            body.classList.remove('bounce');
        },600);
    }
})