// tinyceMce Code
tinymce.init({
  selector: 'textarea, .content_inside',
  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
});

searchArticles ();
// This is the article searchbar

deleteArticle () 

function deleteArticle () { 

  let deleteModalBlog = document.querySelector('.deleteModalBlog');
  let closeModalBtn = document.querySelector('.closeDel');

  closeModalBtn.addEventListener('click', function () { 

    deleteModalBlog.style.display = "none";

  })

  let triggerModal = document.querySelectorAll('.triggerModal');
  let hiddenIDVALUE = document.querySelector('.hiddenID');

  triggerModal.forEach(trigger => {  

    let theID = trigger.closest('div').querySelector('.theID').value;

    trigger.addEventListener('click', function () { 

      hiddenIDVALUE.value = theID;

      deleteModalBlog.style.display = "flex";

    })



  })


}






function searchArticles () {
  let videosContainer = document.querySelector('.videos_container');
  let input = document.querySelector('.searchArticleInput');
  let headerArticles = document.querySelectorAll('.headers_articles');

  input.addEventListener('input', function(e) {
      let inputValue = e.target.value.trim().toLowerCase(); 

      if (inputValue === '') {

        videosContainer.innerHTML = "";

        headerArticles.forEach(header =>  {  
          videosContainer.insertAdjacentHTML('beforeend', header.parentElement.parentElement.outerHTML);

        })

      } else {

        videosContainer.innerHTML = "";

          headerArticles.forEach(header => {
              let userNameText = header.textContent.trim().toLowerCase();

              if (userNameText.includes(inputValue)) {
                videosContainer.insertAdjacentHTML('beforeend', header.parentElement.parentElement.outerHTML);
              }
          });
      }
  });
}
