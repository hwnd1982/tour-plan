const otherActivitiesElems = document.querySelectorAll('.other-activities__card')
const logoVerticalElem = document.querySelector('.logo-vertical__img')

const animationInitialization = (elem, type, delay) => {
  elem.classList.add('animated')
  elem.setAttribute('animation-type', type)
  elem.setAttribute('animation-data', type)
  elem.setAttribute('animation-delay', delay)
}

otherActivitiesElems.forEach((elem) => {
  animationInitialization(elem, "fade-up", "10")
});
animationInitialization(logoVerticalElem, "scale", "0")

document.addEventListener("scroll", (event) => { 

const animatedElems = document.querySelectorAll('.animated');

var count = 0;
animatedElems.forEach((animatedElem, index) => {
    var animatedElemPosition = animatedElem.getBoundingClientRect();
    if (animatedElemPosition.top - window.innerHeight - 100 < 0) {

      if (index > 0)
        if (animatedElems[index-1].className == animatedElems[index].className)
          count++
        else count = 0

      animatedElem.setAttribute('animation-delay', 100+count*200)
      animatedElem.setAttribute('animation-data', 'played')
    } else {
      animatedElem.setAttribute('animation-delay', 0)
      animatedElem.setAttribute('animation-data', animatedElem.getAttribute('animation-type'))
    }
  });
});