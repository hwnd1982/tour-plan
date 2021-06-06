const modalDialog = document.querySelector('.modal');

document.addEventListener("click", (event) => {
  if (event.target.classList.contains('book-now')) {
    modalDialog.classList.remove('hidden')
    let scrollBarWidth = window.visualViewport.width
    document.body.classList.add('lock')
    scrollBarWidth = window.visualViewport.width - scrollBarWidth
    if (scrollBarWidth > 0 )
      document.body.style.setProperty('margin-right', scrollBarWidth + 'px')
    else 
      document.body.style.setProperty('margin-right', 0)
    if (window.innerWidth <= 767) {
      const navbarTop = document.querySelector('.navbar-top')
      navbarTop.style.setProperty('padding-right', scrollBarWidth + 'px')
    }
  }
  if (childOf(event.target, 'modal__button-close') ||
      event.target.classList.contains('modal-form__button') ||
      event.target.classList.contains('modal__overlay')) {
    modalDialog.classList.add('hidden')
    document.body.classList.remove('lock')
    document.body.style.setProperty('margin-right', 0)
    if (window.innerWidth <= 767) {
      const navbarTop = document.querySelector('.navbar-top')
      navbarTop.style.setProperty('padding-right', 0)
    }
  }
});