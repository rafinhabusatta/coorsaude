function ReadMoreLess() {
    let more = window.document.querySelector('#more')
    let btn = window.document.querySelector('#btnLeia')

    if(btn.innerHTML == "Leia mais...") {
        more.classList.remove('d-none')
    }
}