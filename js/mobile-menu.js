const mobileMenuSearch = document.querySelector('.search')
const mobileMenuUser = document.querySelector('.user')
const mobileMenuNavbarMenu = document.querySelector('.navbar-menu')
const mobileMenuButton = document.querySelector('.menu-button')

document.addEventListener("click", (event) => { 
  console.log('event.target: ', event.target);
  if (event.target.classList.contains('menu-button') || event.target.classList.contains('menu-button__line')) {
    mobileMenuSearch.classList.toggle('hidden')
    mobileMenuUser.classList.toggle('hidden')
    mobileMenuNavbarMenu.classList.toggle('hidden')
    document.body.classList.toggle('lock')
  }
});