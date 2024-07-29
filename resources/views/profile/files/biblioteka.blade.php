@include('layouts.pages-nav')
    

<div class="main-container">
    <div class="navcontainer">
            <nav class="nav">
                    <div class="nav-upper-options">

        @include('layouts.sidebar')

                </div>
            </nav>
    </div>

    <div class="main">
              <div class="books_div">
                <img class="imageBooks" src="/images/books-images/books-background.jpg" alt="Background Библиотека">
                <p class="welcomeLibrary">Добре дошли в нашата<br> <u>Библиотека на <b>Успеха</b></u></p>
                <p class="followUpMsg">
                  <span class="first_spam">
                  Ние вярваме, че четенето и обогатяването 
                  на знанията ни са основни стъпки към <b>успеха.</b>
                  </span>

                <br>
                <span class="second_spam">
                Приготвили сме списък с книги за личностно развитие, бизнес и принципи за успех, 
                които вярваме, че ще ви насочат в правилната посока към успеха.
                
                <br><br>
                Приятно четене!
                </span>
                </p>
              </div>

              <hr style="margin: 20px;">

              <div class="searchBook_div">
                <label for="search_book">Потърсете книга</label><br>
                <input placeholder="Напишете заглавието на книгата" type="text" name="search_book" id="search_book">
              </div>

              <div class="videos_container booksContainer">

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/mlm-lorry.png" alt="Снимка Ерик Уори'">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                      "Първи стъпки в <b>Мрежовия Маркетинг</b>" <br> - Ерик Уори 
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1qqhCt4Mk9t6r3CJTJKR-x8DmweTLcfFn/view">Към Книгата</a>
                  </div>
                </div>
  
                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/17steps.png" alt="Снимка 17 Тайни">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                      "17 тайни на майсторите <b>Мрежовия Маркетинг</b>" <br> - Джон Каленч
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1d8jEAuXA8_aoJ_RQQQop2R3G2qWBtJPR/view">Към Книгата</a>
                  </div>
                </div>
  
                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/biznes-shkola.png" alt="Снимка 'Бизнес школа'">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                     "Бизнес школа - За хора, които обичат <b>да помагат на другите</b>" <br> - Робърт Кийосаки
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/19XOL47pgW9fA5O2rOIlAU2xOeBgkJ0_0/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/rich-poor-dad.png" alt="Снимка 'Богат беден татко'">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                     "Богат татко, беден татко" <br> - Робърт Кийосаки
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1OduwapvcemyUmsDIlrBooqbRy5vN6qpC/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/45sec.png" alt="Снимка '45-Секундната лекция – Дон Фейла'">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                     "45-Секундната лекция " <br> - Дон Фейла
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1H8GXeR3xP3Y8SryUx9nszrn1EAwaDLyE/view">Към Книгата</a>
                  </div>
                </div>
 
                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/pasivno-bogatstvo.png" alt="Снимка '7-те принципа на пасивното богатство - Том Ууд">
                  <div class="px-6 py-4">
                    <p class="font-bold text-gray-700 text-base text-center allHeaders">
                      "7-те принципа на пасивното богатство" <br> - Том Ууд
                    </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1iUZcSVut0xGQLf7j9O28eZXxBxOHkmG3/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/5-zakona.png" alt="Снимка '5 неопровержими закона на продажбите">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                      "5 неопровержими закона на продажбите"
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1v-ZVA_-yTuv-5SfW-Yo9j3osEH2TIA2t/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/mainata-mu.png" alt="Снимка 'Майната му! Да го направим! - Ричард Брансън">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Майната му! Да го направим!" <br> - Ричард Брансън
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1wR-omGOvOJnCiQpdqU3lAjOLlemsP-8C/view">Към Книгата</a>
                  </div>
                </div>
        
                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/da-precakash-dqvola.png" alt="Снимка 'Да Прецакаш Дявола – Наполеон Хилл">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                       "Да Прецакаш Дявола" <br> – Наполеон Хилл
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1oN66bFc1iFOhNo-_5v6TYQwwnRCmZ7qJ/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/misli-zabogatqvai.png" alt="Снимка 'Мисли и забогатявай! – Наполеон Хилл">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Мисли и забогатявай!" <br> – Наполеон Хилл
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1On4iARHasl9Kle4-NJhTq-8rwzTJy_kL/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/kak-da-vliqem.png" alt="Снимка 'Как да спечелим приятели и да влияем на другите - Дейл Карнеги">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Как да спечелим приятели и да влияем на другите" - Дейл Карнеги
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1qOSYUS__lUaGBMURJolQ7XOTHJXWlPnC/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/suzdai-budeshteto-si.png" alt="Снимка 'Създайте сами бъдещето си - Брайън Трейси">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                       " Създайте сами бъдещето си " <br> - Брайън Трейси
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1EEdaj08QEZq86T1483NnhzU2hlGiwELy/view">Към Книгата</a>
                  </div>
                </div>


                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/moje-vsichko.png" alt="Снимка 'ПОДСЪЗНАНИЕТО МОЖЕ ВСИЧКО">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                       " Подсъзнанието може всичко " <br> – Джон Кехоу
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1HCIUWvV1YlVoUNAo6_4G9rjSzJDgB2gN/view">Към Книгата</a>
                  </div>
                </div>
              
                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/uspehyt-parite.png" alt="Снимка 'Успехът и Парите – Джон Кехоу">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Успехът и Парите" <br> – Джон Кехоу
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1Z3TxMFvZCCbuXVol7hcHuVphuV-f53jw/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/kiyosaki.png" alt="Снимка 'На Какво Богатите учат децата си – Робърт Кийосаки">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "На Какво Богатите учат децата си" <br> – Робърт Кийосаки
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1L78o7o9I3Fv1fzlLRBY3BcFZKYAVpC6R/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/meta.png" alt="Снимка 'Метатайната – Мел Гил">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Метатайната" <br> – Мел Гил
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1CAos6hnK0TO2tDLEsnSDdpgz3RpnyUXW/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/purple-cow.png" alt="Снимка 'Лилавата крава – Сет Годин">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Лилавата крава" <br> – Сет Годин
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1ge2Bd2IX0kHdsDVTqlSEe77-w11YDX8F/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/targovec.png" alt="Снимка 'Най-великият търговец на света – Ог Мандино">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                       "Най-великият търговец на света" <br> – Ог Мандино
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1nX5iqJYFNN7e0ZVmB-yLtYNbRpMufi8c/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/monah-ferari.png" alt="Снимка 'Монахът, който продаде своето ферари – Робин Шарма">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Монахът, който продаде своето ферари" <br> – Робин Шарма
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1txCoDz0wCeVbuAashHF58cIosBD-TFdq/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/investirane-kiyosaki.png" alt="Снимка 'Наръчник по инвестиране – Робърт Кийосаки">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Наръчник по инвестиране" – Робърт Кийосаки
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/11zM7jloK01pgA7dU9ijexjqW8W4XK5s-/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/wallace-bogat.png" alt="Снимка 'Науката да станеш богат – Уолъс Д. Уотлъс  ( АУДИО ФОРМАТ )">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Науката да станеш богат" <br> – Уолъс Д. Уотлъс  ( АУДИО ФОРМАТ )
                      </p>
                    <a class="gotoClass" target="_blank" href="https://www.youtube.com/watch?v=ecEYUZtBwSk">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/nai-bogatiq-chovek.png" alt="Снимка 'Най-богатият човек във Вавилон – Джордж С. Клейсън">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        "Най-богатият човек във Вавилон" <br> – Джордж С. Клейсън
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1wSF-tjmwOgwcGdB0q8lNbphWVOUXU1Zk/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/kosmonaft.png" alt="Снимка '5 Навика, с които да живеем мечтите си, или Как да станем космонавти">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        5 Навика, с които да живеем мечтите си, или Как да станем космонавти
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1P3Nm5r4Ta2n8l5Gf481aeQ7WbalsyCJ3/view">Към Книгата</a>
                  </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/lubimi-frazi.png" alt="Снимка 'Любими фрази на Дон и Нанси Фейла">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        Любими фрази на Дон и Нанси Фейла
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/19rwbuQPGZKmOuoY2iLk-BbFeARpM6k-P/view">Към Книгата</a>
                  </div>
                </div>

                {{-- Биографии на хора --}}

                <div class="max-w-sm rounded overflow-hidden shadow-lg bookDiv">
                  <img class="w-full videoSection_images" src="/images/books-images/50-uspeli-hora.png" alt="Снимка '50 успели хора, които първо са се провалили">
                    <div class="px-6 py-4">
                      <p class="font-bold text-gray-700 text-base text-center allHeaders">
                        50 успели хора, които първо са се провалили
                      </p>
                    <a class="gotoClass" target="_blank" href="https://drive.google.com/file/d/1wPGMYVoggIkzoU7qJ7D_XFdOFYm7W098/view">Към Книгата</a>
                  </div>
                </div>

        </div>
    </div>

    <script src="/javascript/dashboard-js/biblioteka.js"></script>
 
