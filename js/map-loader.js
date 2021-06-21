const mapIframe = document.querySelector('.info__map-iframe')
document.addEventListener('click', (event) => {
  if (childOf(event.target, 'info__map'))
    if(mapIframe.classList.contains('hidden'))
      mapIframe.classList.remove('hidden')
});