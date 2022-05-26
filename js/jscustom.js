function ReadHistoric() {
    let dots = window.document.querySelector('#dots-historic')
    let btn = window.document.querySelector('#btn-historic')
    let text = window.document.querySelector('#more-historic')

    if(dots.style.display === 'none') {
        dots.style.display = 'inline'
        text.classList.add('d-none')
        btn.innerHTML = 'Leia mais'
    }
    else {
        dots.style.display = 'none'
        text.classList.remove('d-none')
        btn.innerHTML = 'Leia menos'
    }
    
}

function ReadSeminario() {
    let dots = window.document.querySelector('#dots-seminario')
    let btn = window.document.querySelector('#btn-seminario')
    let text = window.document.querySelector('#more-seminario')

    if(dots.style.display === 'none') {
        dots.style.display = 'inline'
        text.classList.add('d-none')
        btn.innerHTML = 'Leia mais'
    }
    else {
        dots.style.display = 'none'
        text.classList.remove('d-none')
        btn.innerHTML = 'Leia menos'
    }
}

function ReadSobre() {
    let dots = window.document.querySelector('#dots-sobre')
    let btn = window.document.querySelector('#btn-sobre')
    let text = window.document.querySelector('#more-sobre')

    if(dots.style.display === 'none') {
        dots.style.display = 'inline'
        text.classList.add('d-none')
        btn.innerHTML = 'Leia mais'
    }
    else {
        dots.style.display = 'none'
        text.classList.remove('d-none')
        btn.innerHTML = 'Leia menos'
    }
}