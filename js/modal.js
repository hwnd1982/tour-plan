const modalDialog = document.querySelector('.modal');

const childOf = (childElem, className) => {
  while(!childElem.classList.contains(className)) {
    childElem = childElem.parentNode 
    if (childElem === document.body) return false
  }
  return childElem; 
}

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
      event.target.classList.contains('modal__overlay')) {
    modalDialog.classList.add('hidden')
    document.body.classList.remove('lock')
    document.body.style.setProperty('margin-right', 0)
    if (window.innerWidth <= 767) {
      const navbarTop = document.querySelector('.navbar-top')
      navbarTop.style.setProperty('padding-right', 0)
    }
  }
  // Обработка форм
  $('.form').each( function () {
    if ($(this).hasClass("subscribe"))
      $(this).validate({
        errorLabelContainer: $('.subscribe__invalid-container'),
        errorClass: "invalid",
        rules: {
          email: {
            required: true,
            email: true
          }
        },
        messages: {
          search: "Please enter your requestd",
          email: {
            required: "We need your email address to contact you",
            email: "Your email address must be in the format of name@domain.com"
          }
        }
      })
    else 
      $(this).validate({
      errorClass: "invalid",
      
      rules: {
        email: {
          required: true,
          email: true
        }
      },

      messages: {
        name: {
          required: "Please specify your name",
          minlength: "Name length cannot be less than 2 letters"
        },
        phone: {
          required: "We need your phone number to contact you",
          minlength: "Your phone number must be in the format of +7 (999) 999-99-99"
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        }
      }
    })
  })

  $(document).ready(function(){
    $('.phone_us').mask('+7 (000) 000-00-00');
  })

});

document.addEventListener('keydown', (event) => {
  if (event.code == 'Escape') {
    modalDialog.classList.add('hidden')
    document.body.classList.remove('lock')
    document.body.style.setProperty('margin-right', 0)
    if (window.innerWidth <= 767) {
      const navbarTop = document.querySelector('.navbar-top')
      navbarTop.style.setProperty('padding-right', 0)
    }
  }
});