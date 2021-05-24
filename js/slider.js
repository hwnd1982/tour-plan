// Получаем кнопки
const btnPrev = document.querySelector('.button-prev');
const btnNext = document.querySelector('.button-next');
// Получаем список слайдов
const slidesList = document.querySelectorAll('.slide');
console.log('slidesList: ', slidesList);
// Создаем index активные слайдов и присваем им стартовое значение
var indexDisplayed = 0;
var indexPrev = slidesList.length-1;
var indexNext = 1;
// Создаем переменные для вычисления index следюющего поллжения слайдов
var indexNewDisplayed;
var indexNewPrev;
var indexNewNext;

const scrollLeft = () => {

  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      indexNewDisplayed = index - 1;
      indexNewNext = index;
      indexNewPrev = index - 2;
    
      if (indexNewDisplayed < 0) indexNewDisplayed = slidesList.length-1;
      if (indexNewPrev < 0) indexNewPrev = slidesList.length + indexNewPrev; 
    }
  });

  // console.log('prev: ',indexPrev, ' -> ', indexNewPrev );  
  // console.log('displated: ', indexDisplayed, ' -> ', indexNewDisplayed);
  // console.log('next: ' ,indexNext, ' -> ', indexNewNext);

  slidesList[indexNewDisplayed].classList.add('displayed')
  slidesList[indexNewNext].classList.add('next')
  slidesList[indexNewPrev].classList.add('prev')
  slidesList[indexDisplayed].classList.remove('displayed')
  slidesList[indexNext].classList.remove('next')
  slidesList[indexPrev].classList.remove('prev')

  indexDisplayed = indexNewDisplayed;
  indexPrev = indexNewPrev;
  indexNext = indexNewNext;
};

const scrollRight = () => {
  
  slidesList.forEach((slide, index) => {
    if (slide.classList.contains('displayed')) {
      
      indexNewDisplayed = index + 1;
      indexNewNext = index + 2;
      indexNewPrev = index;

      if (indexNewDisplayed > slidesList.length-1) indexNewDisplayed = 0;
      if (indexNewNext > slidesList.length-1) indexNewNext = indexNewNext - slidesList.length; 
    }
  });
  
  // console.log('prev: ',indexPrev, ' -> ', indexNewPrev );  
  // console.log('displated: ', indexDisplayed, ' -> ', indexNewDisplayed);
  // console.log('next: ' ,indexNext, ' -> ', indexNewNext);

  slidesList[indexNewDisplayed].classList.add('displayed')
  slidesList[indexNewNext].classList.add('next')
  slidesList[indexNewPrev].classList.add('prev')
  slidesList[indexDisplayed].classList.remove('displayed')
  slidesList[indexNext].classList.remove('next')
  slidesList[indexPrev].classList.remove('prev')

  indexDisplayed = indexNewDisplayed;
  indexPrev = indexNewPrev;
  indexNext = indexNewNext;
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
