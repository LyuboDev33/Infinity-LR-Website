// This function check if there is no code inside the <td> for "Партньорски код" attribute inside "give-access.blade.php"
partnersCode ();

// This is the function is the logic for the modal delete
deleteUser()

// This piece of code checks if <td class="td_access" has a avalue of authorized or not_authorized>
// If the value is "authorized" then the color of the closest <tr> will be green
// If the value is "not_authorized" then the color of the closest <tr>  will be red 
colorTrBackground ()

// This is the code for the Users Search bar
searchUsers () 

// This is the code to change the link without refreshing the page

function searchUsers() {
  let tBody = document.querySelector('.tbody_searchbar');
  let inputVal = document.querySelector('.search_user');
  let userNames = document.querySelectorAll('.user_name');

  inputVal.addEventListener('input', function(e) {
      let inputValue = e.target.value.trim().toLowerCase(); 

      if (inputValue === '') {

        tBody.innerHTML = "";
          userNames.forEach(userName => {
              tBody.insertAdjacentHTML('beforeend', userName.closest('tr').outerHTML);
          });

      } else {

        tBody.innerHTML = "";
          userNames.forEach(userName => {
              let userNameText = userName.textContent.trim().toLowerCase();

              if (userNameText.includes(inputValue)) {
                  tBody.insertAdjacentHTML('beforeend', userName.closest('tr').outerHTML);
              }
          });
      }
  });
}


function colorTrBackground () { 
  let td_access = document.querySelectorAll('.td_access');
  td_access.forEach(td => {  

    if(td.innerHTML === "Има достъп") { 
      td.closest('tr').style.backgroundColor = "#d1ffc2";
    } else  { 
      td.closest('tr').style.backgroundColor = "#ffc2c2";
    }
  })
}


function partnersCode() {
  let lr_code = document.querySelectorAll('.lr_code');
  lr_code.forEach(item => {
    if (item.innerHTML.trim() === "") {
      item.innerHTML = "Няма";
    }
  })
}

function deleteUser () { 

  let background_delete = document.querySelector('.background_delete');
  let hiddenEmail = document.querySelector('.hiddenInput_useremail');

  let closeModalBtn = document.querySelectorAll('.close_modalBTN')
  let triggerModal = document.querySelectorAll('.delete');


  triggerModal.forEach(modal => { 
  
    modal.addEventListener('click', function () { 
      let closestTbody = modal.closest('tr');
      let userEmail = closestTbody.querySelector('.user_email');

      hiddenEmail.value = userEmail.innerHTML;
      background_delete.style.display = "flex";
      
    })
  })

  // This piece of code is for closing the modal for Deletion
  closeModalBtn.forEach(close => { 
    close.addEventListener('click', function () { 
      background_delete.style.display = "none";
    })
  })

}


