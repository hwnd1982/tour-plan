const mailingBox = document.querySelector('.mailing')

 document.addEventListener("scroll", (event) => { 
    MoveBackground(event); 
  });
const MoveBackground = (event) => {

  const mailingBlockPosition = document.querySelector('.mailing').getBoundingClientRect();
  const heightSrollingBlock = window.innerHeight + mailingBlockPosition.height - 100;
  const curentBlockPosition = mailingBlockPosition.top + mailingBlockPosition.height - 100;

  if ((mailingBlockPosition.top - 50 - window.innerHeight <= 0) && (mailingBlockPosition.top + mailingBlockPosition.height - 50 >= 0)) {
    mailingBox.setAttribute("style", "background-position-y: " + ((curentBlockPosition / heightSrollingBlock) * 100) + "% ");
  };
};
