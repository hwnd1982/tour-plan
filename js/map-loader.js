const mapIframe = document.querySelector('.info__map-iframe')
document.addEventListener('mouseover', (event) => {
  if (childOf(event.target, 'info__map'))
    if(mapIframe.classList.contains('hidden'))
      mapIframe.classList.remove('hidden')
});