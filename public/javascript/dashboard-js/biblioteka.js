showEffects();

searchBooks();

searchBooks();

function searchBooks() {
  let booksContainer = document.querySelector('.booksContainer');
  let allBooks = document.querySelectorAll('.bookDiv');
  let allHeaders = document.querySelectorAll('.allHeaders');
  let inputValue = document.getElementById('search_book');



  inputValue.addEventListener('input', (e) => {
    let value = e.target.value.trim().toLowerCase();

    booksContainer.innerHTML = ""; 

    if (value === "") {

      allBooks.forEach(book => {
        booksContainer.insertAdjacentElement('beforeend', book);
      });
    } else {

      let foundMatch = false;
      allHeaders.forEach(header => {
        if (header.textContent.toLowerCase().includes(value)) {
          let book = header.closest('.bookDiv');
          booksContainer.insertAdjacentElement('beforeend', book);
          foundMatch = true;
        }
      });

      if (!foundMatch) {
      
        booksContainer.innerHTML = "";
      } 


    }
  });
}




function showEffects() {

  let imageBooks = document.querySelector('.imageBooks');
  let first_spam = document.querySelector('.first_spam');
  let second_spam = document.querySelector('.second_spam');

  setTimeout(function () {

    imageBooks.style.opacity = "1";

    setTimeout(function () {

      first_spam.style.animation = "goUp 0.5s";

      setTimeout(function () {
        first_spam.style.opacity = "1";

        setTimeout(function () {

          second_spam.style.animation = "goUp 0.5s";
          second_spam.style.opacity = "1";

        }, 100)

      }, 350)

    }, 400)

  }, 400);

}

