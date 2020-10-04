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

function atualizaLarguraTela(){
    largura = window.innerWidth
    console.log(largura)
}

function ScreenResBack() {
    let mx = -((screen.width - 1000) / 2) - 48 + 8
    let footer1 = document.querySelector('.footer-5')
    let footer2 = (document.querySelector('.footer-5-2'))

    if(screen.width >= 992){
        footer1.style.margin = `0 ${mx}` + 'px'
        footer2.style.margin = `0 ${mx}` + 'px'
    }
}

atualizaLarguraTela()
ScreenResBack()