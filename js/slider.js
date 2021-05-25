// Получаем кнопки
const btnPrev = document.querySelector('.button-prev');
const btnNext = document.querySelector('.button-next');
// Получаем список слайдов
const slidesList = document.querySelectorAll('.slide');
// Создаем index активные слайдов и присваем им стартовое значение
var activeSlideIndex = {
  current: {
    prev: slidesList.length-1,
    displayed: 0,
    next: 1
  },
  new: {
    prev: 0,
    displayed: 0,
    next: 0
  }
};
// Инициализация слайдера scroll
const initializeScroll = () => {
  slidesList[activeSlideIndex.current.prev].classList.add('prev')
  slidesList[activeSlideIndex.current.displayed].classList.add('displayed')
  slidesList[activeSlideIndex.current.next].classList.add('next')
};

initializeScroll();

const scrollLeft = () => {

  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      activeSlideIndex.new.prev = index - 2;
      activeSlideIndex.new.displayed = index - 1;
      activeSlideIndex.new.next = index;
      
      if (activeSlideIndex.new.displayed < 0) activeSlideIndex.new.displayed = slidesList.length-1;
      if (activeSlideIndex.new.prev < 0) activeSlideIndex.new.prev = slidesList.length + activeSlideIndex.new.prev; 
    }
  });

  slidesList[activeSlideIndex.new.prev].classList.add('prev')
  slidesList[activeSlideIndex.new.displayed].classList.add('displayed')
  slidesList[activeSlideIndex.new.next].classList.add('next')
  slidesList[activeSlideIndex.current.prev].classList.remove('prev')
  slidesList[activeSlideIndex.current.displayed].classList.remove('displayed')
  slidesList[activeSlideIndex.current.next].classList.remove('next')
  
  activeSlideIndex.current.prev = activeSlideIndex.new.prev;
  activeSlideIndex.current.displayed = activeSlideIndex.new.displayed;
  activeSlideIndex.current.next = activeSlideIndex.new.next;
};

const scrollRight = () => {
  
  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      activeSlideIndex.new.prev = index;
      activeSlideIndex.new.displayed = index + 1;
      activeSlideIndex.new.next = index + 2;

      if (activeSlideIndex.new.displayed > slidesList.length-1) activeSlideIndex.new.displayed = 0;
      if (activeSlideIndex.new.next > slidesList.length-1) activeSlideIndex.new.next = activeSlideIndex.new.next - slidesList.length; 
    }
  });

  slidesList[activeSlideIndex.new.prev].classList.add('prev');
  slidesList[activeSlideIndex.new.displayed].classList.add('displayed');
  slidesList[activeSlideIndex.new.next].classList.add('next');
  slidesList[activeSlideIndex.current.prev].classList.remove('prev');
  slidesList[activeSlideIndex.current.displayed].classList.remove('displayed');
  slidesList[activeSlideIndex.current.next].classList.remove('next');
  
  activeSlideIndex.current.prev = activeSlideIndex.new.prev;
  activeSlideIndex.current.displayed = activeSlideIndex.new.displayed;
  activeSlideIndex.current.next = activeSlideIndex.new.next;
};

btnPrev.addEventListener('click', scrollLeft)
btnNext.addEventListener('click', scrollRight)

document.addEventListener('keydown', (event) => {
  if ((event.code == 'ArrowRight') || (event.code == 'ArrowLeft')) {
    const sliderPosition = document.querySelector('.slider').getBoundingClientRect();

    const sliderTop = sliderPosition.top;
    const sliderHeight = sliderPosition.height;
    const windowHeight = window.innerHeight;
    
    if ((sliderTop >= 0) && (windowHeight-sliderTop >= sliderHeight)) {
      if (event.code == 'ArrowRight') scrollRight();
      if (event.code == 'ArrowLeft') scrollLeft();
    }
  }
});
