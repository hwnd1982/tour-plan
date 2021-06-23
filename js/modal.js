const modalDialog = document.querySelector('.modal');

const childOf = (childElem, className) => {
  if (childElem === document.documentElement) return false
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
        errorLabelContainer: $('.mailing__invalid-container'),
        element: "form",
        validClass: "input_required",
        errorClass: "invalid",
        rules: {
          email: {
            required: true,
            email: true
          }
        },
        messages: {
          email: {
            required: "*Please, enter your email address",
            email: "*Format must be name@domain.com"
          }
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass(errorClass).addClass(validClass);
      }
      })
    else 
      $(this).validate({
      element: "form",
      validClass: "input_required",
      errorClass: "invalid",

      rules: {
        email: {
          required: true,
          email: true
        }
      },

      messages: {
        name: {
          required: "*Please, specify your name",
          minlength: "*Name must be more than 2 letters"
        },
        phone: {
          required: "*Please, enter your phone number",
          minlength: "*Format must be +7 (999) 999-99-99"
        },
        email: {
          required: "*Please, enter your email address",
          email: "*Format must be name@domain.com"
        }
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
      }
    })

    
    const subscribeForm = document.querySelector(".subscribe")
    if (childOf(event.target, 'subscribe'))
      if (!subscribeForm.firstElementChild.checkValidity())
        subscribeForm.lastElementChild.classList.add("invalid")
  })
  
  

  $(document).ready(function(){
    $('.phone').mask('+7 (000) 000-00-00');
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