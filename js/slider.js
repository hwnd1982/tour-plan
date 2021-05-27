// Получаем кнопки
const btnHotelPrev = document.querySelector('.hotel-button-prev');
const btnHotelNext = document.querySelector('.hotel-button-next');
// Получаем список слайдов
const hotelSlidesList = document.querySelectorAll('.hotel-slide');
// Создаем index активные слайдов и присваем им стартовое значение
var activeHotelSlideIndex = {
  current: {
    prev: hotelSlidesList.length-1,
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
const initializeScroll = (activeSlideIndex, slidesList) => {
  slidesList[activeSlideIndex.current.prev].classList.add('prev')
  slidesList[activeSlideIndex.current.displayed].classList.add('displayed')
  slidesList[activeSlideIndex.current.next].classList.add('next')
};

initializeScroll(activeHotelSlideIndex, hotelSlidesList);

const slideScroll = (activeSlideIndex, slidesList) => {
  slidesList[activeSlideIndex.new.prev].classList.add('prev');
  slidesList[activeSlideIndex.new.displayed].classList.add('displayed');
  slidesList[activeSlideIndex.new.next].classList.add('next');
  slidesList[activeSlideIndex.current.prev].classList.remove('prev');
  slidesList[activeSlideIndex.current.displayed].classList.remove('displayed');
  slidesList[activeSlideIndex.current.next].classList.remove('next');

  activeSlideIndex.current.prev = activeSlideIndex.new.prev;
  activeSlideIndex.current.displayed = activeSlideIndex.new.displayed;
  activeSlideIndex.current.next = activeSlideIndex.new.next;
}

const scrollLeft = (activeSlideIndex, slidesList) => {

  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      activeSlideIndex.new.prev = index - 2;
      activeSlideIndex.new.displayed = index - 1;
      activeSlideIndex.new.next = index;
      
      if (activeSlideIndex.new.displayed < 0) activeSlideIndex.new.displayed = slidesList.length-1;
      if (activeSlideIndex.new.prev < 0) activeSlideIndex.new.prev = slidesList.length + activeSlideIndex.new.prev; 
    }
  });

  slideScroll(activeSlideIndex, slidesList);

};

const scrollRight = (activeSlideIndex, slidesList) => {
  
  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      activeSlideIndex.new.prev = index;
      activeSlideIndex.new.displayed = index + 1;
      activeSlideIndex.new.next = index + 2;

      if (activeSlideIndex.new.displayed > slidesList.length-1) activeSlideIndex.new.displayed = 0;
      if (activeSlideIndex.new.next > slidesList.length-1) activeSlideIndex.new.next = activeSlideIndex.new.next - slidesList.length; 
    }
  });

  slideScroll(activeSlideIndex, slidesList);

};

btnHotelPrev.addEventListener('click', () => {
  scrollLeft(activeHotelSlideIndex, hotelSlidesList); 
});
btnHotelNext.addEventListener('click', () => {
  scrollRight(activeHotelSlideIndex, hotelSlidesList);
});

document.addEventListener('keydown', (event) => {
  if ((event.code == 'ArrowRight') || (event.code == 'ArrowLeft')) {
    const hotelSliderPosition = document.querySelector('.hotel-slider').getBoundingClientRect();

    const hotelSliderTop = hotelSliderPosition.top;
    const hotelSliderHeight = hotelSliderPosition.height;
  
    
    if ((hotelSliderTop >= 0) && (window.innerHeight-hotelSliderTop >= hotelSliderHeight)) {
      if (event.code == 'ArrowRight') {
        scrollRight(activeHotelSlideIndex, hotelSlidesList);
      }
      if (event.code == 'ArrowLeft') {
        scrollLeft(activeHotelSlideIndex, hotelSlidesList);
      }
    }
  }
});
