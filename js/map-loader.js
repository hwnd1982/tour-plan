document.addEventListener('mouseover', (event) => {
  if (childOf(event.target, 'info__map')) {
    const googleMapsContainer = document.querySelector('.info__map')
    if (!googleMapsContainer.innerHTML)
      googleMapsContainer.innerHTML = '<iframe class="info__map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.090748660539!2d98.294612675272!3d7.8378438988566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1622013394943!5m2!1sru!2sru" width="350" height="213" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'
  }
});