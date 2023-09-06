var valueDisplays = document.querySelectorAll(".numb");
var interval = 4000;
var triggerPosition = 300; // Adjust this value to set the trigger position

function handleScroll() {
  var position = valueDisplays[0].getBoundingClientRect().top;
  var screenHeight = window.innerHeight;

  if (position < screenHeight - triggerPosition) {
    valueDisplays.forEach((valueDisplay) => {
      let startValue = 0;
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endValue);
      let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue === endValue) {
          clearInterval(counter);
        }
      }, duration);
    });

    // Remove the scroll event listener to prevent executing the code multiple times
    window.removeEventListener('scroll', handleScroll);
  }
}

window.addEventListener('scroll', handleScroll);



const block = document.querySelectorAll('.blocks');
window.addEventListener('load', function(){
  block.forEach(item => {
    let numElement = item.querySelector('.num');
    let num = parseInt(numElement.innerText);
    let count = 0;
    let time = 2000 / num;
    let circle = item.querySelector('.circle');
    setInterval(() => {
      if(count == num){
        clearInterval();
      } else {
        count += 1;
        numElement.innerText = count;
      }
    }, time)
    circle.style.strokeDashoffset 
      = 503 - ( 503 * ( num / 100 ));
    let dots = item.querySelector('.dots');
    dots.style.transform = 
      `rotate(${360 * (num / 100)}deg)`;
    if(num == 100){
      dots.style.opacity = 0;
    }
  })
});


