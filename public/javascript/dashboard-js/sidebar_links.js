// The current JavaScript code is used to create a background on the <a></a> attribute links inside pages-nav.blade.php


//Tihs is the code for the telephone sidebar links 
let links = document.querySelectorAll('.a_menus');
let linkpath = window.location.pathname;

links.forEach(link => {


  if(linkpath === '/dashboard' && link.innerHTML === 'Начална Страница') { 
    link.classList.add('active_links')
  } else if(linkpath === '/kursove' && link.innerHTML === 'Видео Обучения') { 
    link.classList.add('active_links')
  } else if (linkpath === '/profile' && link.innerHTML === 'Профил') { 
    link.classList.add('active_links')
  } else if (linkpath === '/access' && link.innerHTML === 'Админ Достъп') { 
    link.classList.add('active_links')
  } else if (linkpath === '/blog' && link.innerHTML.trim() === 'Блог') { 
    link.classList.add('active_links')
  }  else if (linkpath === '/biblioteka' && link.innerHTML.trim().includes('Библиотека')) { 
    link.classList.add('active_links')
  } else if (linkpath === '/events' && link.innerHTML.trim() === 'Създай Събитие') { 
    link.classList.add('active_links')
  } 


});


//Tihs is the code for the widescreen sidebar links 
let linksWide = document.querySelectorAll('.nav-option'); 

linksWide.forEach(linkWide => { 

  if(linkpath === '/dashboard' && linkWide.innerHTML.trim() === 'Начална Страница') { 
    linkWide.classList.add('active_links')
  } else if(linkpath === '/kursove' && linkWide.innerHTML.trim() === 'Видео Обучения') { 
    linkWide.classList.add('active_links')
  } else if (linkpath === '/profile' && linkWide.innerHTML.trim() === 'Профил') { 
    linkWide.classList.add('active_links')
  }else if (linkpath === '/access' && linkWide.innerHTML.trim() === 'Админ Достъп') { 
    linkWide.classList.add('active_links')
  } else if (linkpath === '/blog'  && linkWide.innerHTML.trim() === 'Блог') { 
    linkWide.classList.add('active_links')
  } else if (linkpath === '/biblioteka' && linkWide.innerHTML.trim().includes('Библиотека')) { 
    linkWide.classList.add('active_links')
  } else if (linkpath === '/events'  && linkWide.innerHTML.trim() === 'Създай Събитие') { 
    linkWide.classList.add('active_links')
  } 


})

