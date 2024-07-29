window.addEventListener('DOMContentLoaded', function () { 

let preloader_gif = document.querySelector('.preloader_gif');

let firstHi = document.querySelector('.first_hi');
let secondHi = document.querySelector('.second_hi');
let thirdHi = document.querySelector('.third_hi');
let goToAssesment = document.querySelector('.goToAssesment');

setTimeout(function () { 
  preloader_gif.style.display = "none";

  firstHi.style.display = "flow-root";

  setTimeout(function () { 
    secondHi.style.display = "flow-root";

    setTimeout(function () { 
      thirdHi.style.display = "flow-root";

      setTimeout(function () { 

        goToAssesment.style.display = "flow-root";

      }, 750)

    }, 500);

  }, 500);

}, 4000);


function removePreloaderBackground () { 

  let preloaderBackground = document.getElementById('preloader_firstLogin');

  goToAssesment.addEventListener('click', function (){  
    
    goToAssesment.classList.add('removeBtn');

    setTimeout(function () { 
      goToAssesment.style.display = "none";

      thirdHi.classList.add('removeThirdHi');

      setTimeout(function () { 

        secondHi.classList.add('removeSecondHi')

        setTimeout(function () { 
          secondHi.style.display = "none";

          firstHi.classList.add('removeFirstHi');

          setTimeout(function () { 

            firstHi.style.display = "none";

            preloaderBackground.classList.add('preloadAnimation');

            setTimeout(function () { 
              preloaderBackground.style.display = "none";

            }, 1900)
            


          }, 300)

        }, 300)

        thirdHi.style.display = "none";

      }, 300)


    }, 500)

    // preloaderBackground.classList.add('preloadAnimation');

    // setTimeout(function () { 
    //   preloaderBackground.style.display = "none";

    // }, 1900)
    
  
  })
  
} removePreloaderBackground ();



})

