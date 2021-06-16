document.addEventListener("click", (event) => {

  if (window.innerWidth >= 767 ) {
    
    const activePackageCards = childOf(event.target, 'packag-card');
    
    if (!childOf(event.target, 'full') && activePackageCards) {

      if (!event.target.classList.contains('packag-card__button')) {  
    
        const fullElems = document.querySelectorAll('.full');
     
        fullElems.forEach((elem) => {
          elem.classList.remove('full')
        });

        // .packag-card
        activePackageCards.classList.add('full')
        // .packag-card__img
        activePackageCards.children[0].classList.add('full')
        // .packag-card__flash-offer
        activePackageCards.children[1].classList.add('full')
        // .packag-card__booking-info
        activePackageCards.children[2].classList.add('full')
        // .packag-card__rating-bar
        activePackageCards.children[2].children[0].classList.add('full')
        // .packag-card__text
        activePackageCards.children[2].children[2].classList.add('full')
      }
    }
  }
});

