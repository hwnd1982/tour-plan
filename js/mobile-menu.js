const mobileMenuSearch = document.querySelector('.search')
const mobileMenuUser = document.querySelector('.user')
const mobileMenuNavbarMenu = document.querySelector('.navbar-menu')
const mobileMenuButton = document.querySelector('.menu-button')

document.addEventListener("click", (event) => { 
  if (event.target.classList.contains('menu-button') || event.target.classList.contains('menu-button__line')) {
    mobileMenuSearch.classList.toggle('hidden')
    mobileMenuUser.classList.toggle('hidden')
    mobileMenuNavbarMenu.classList.toggle('hidden')
    mobileMenuButton.classList.toggle('active')
    let scrollBarWidth = window.visualViewport.width
    document.body.classList.toggle('lock')
    scrollBarWidth = window.visualViewport.width - scrollBarWidth
    const navbarTop = document.querySelector('.navbar-top')
    if (scrollBarWidth > 0 ) {
      document.body.style.setProperty('margin-right', scrollBarWidth + 'px')
      navbarTop.style.setProperty('padding-right', scrollBarWidth + 'px')
      mobileMenuNavbarMenu.style.setProperty('padding-right', scrollBarWidth + 'px')
    }
    else {
      document.body.style.setProperty('margin-right', 0)
      navbarTop.style.setProperty('padding-right', 0)
      mobileMenuNavbarMenu.setProperty('padding-right', 0)
    }
  }
});