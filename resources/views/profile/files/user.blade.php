@include('layouts.pages-nav')

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/css/dashboard_css/access-blade.css">


<div class="main-container">
  <div class="navcontainer">
      <nav class="nav">
          <div class="nav-upper-options">

            @include('layouts.sidebar')

          </div>
      </nav>
  </div>
  
  <div class="main">
      <div style="height: initial !important; padding: 50px;" class="report-container">

        @foreach ($assesment_users as $users)

       <div>

        <p>Име: <b>{{ $users->name_of_user }}</b></p>
        <p>Телефон: <b>{{ $users->phone_number_of_user }}</b></p>
        <p>Имейл:  <b>{{ $users->email_of_user }}</b></p>

        <p>Въпрос: 1. Запознати ли сте с индустрията мултилевъл маркетинг?</p>
        <p>Отговор: <b>{{ $users->industry_knowledge }}</b></p>

        <br><br>

        <p>Въпрос: 2. Имате ли предишен опит в мрежова компания?</p>
        <p>Отговор: <b>{{ $users->industry_experience }}</b></p>

        <br><br>

        <p>Въпрос: 3. Ако имате, колко време и с кои компании сте си партнирали?</p>
        <p>Отговор: <b>{{ $users->description }}</b></p>

        <br><br>
        <p>Въпрос: 4. В момента сте...</p>
        <p>Отговор: <b>{{ $users->current_position }}</b></p>


        <br><br>

        <p>Въпрос: 5. Какъв ежемесечен доход би ви позволил да се чувствате спокойни и финансово стабилни?</p>
        <p>Отговор: <b>{{ $users->montly_income }}</b></p>

        <br><br>

        <p>Въпрос: 6. За какво бихте използвали тези пари?<br> /може и повече от един отговор/</p>
        <p>Отговор: <b>{{ $users->money_useage }}</b></p>

        <br><br>

        <p>Въпрос: 7. Можете ли да постигнете такъв доход за следващата година чрез това, което работите в момента, придобивайки и повече свободно време?</p>
        <p>Отговор: <b>{{ $users->accomplish_job }}</b></p>

        <br><br>

        <p>Въпрос: 8. Какъв месечен доход бихте искали да си заработите в LR в следващите?</p>
        <p>6 месеца: <b>{{ $users->six_months }}</b></p>
        <p>12 месеца: <b>{{ $users->twelve_months }}</b></p>

        <br><br>

        <p>Въпрос: 9. Колко часа на ден можете да отделяте за изграждането на вашия LR бизнес?</p>
        <p>Отговор: <b>{{ $users->hours_daily }}</b></p>

        <br><br>

        <p>Въпрос: 10. Изберете кой от следните варианти е приоритет за вас?</p>
        <p>Отговор: <b>{{ $users->priority }}</b></p>

        <br><br>

        <p>Въпрос: 11. Какво е вашето настоящо занимание?</p>
        <p>Отговор: <b>{{ $users->occupation }}</b></p>

        <br><br>

        <p>Въпрос: 12. Готови ли сте да работите екипно и по система, която ще ви доведе до резултатите, които искате?</p>
        <p>Отговор: <b>{{ $users->are_you_ready }}</b></p>



       </div>

        @endforeach
              
  
     </div>
  </div>



  <script src="/javascript/dashboard-js/access-blade.js"></script>
