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
  
  
  <div class="main ev">

    @if (session('eventMSG'))
    <div class="succes_background">
        <div class="alert alert-success msg_success">
        {{ session('eventMSG') }}
        </div>
    </div>
    @endif

    <div>

    <form action="{{ route('insert_event') }}" enctype="multipart/form-data" class="events_form" method="POST">
      @csrf

    <div class="form_part">
        <p>Създайте Предстоящо Събитие (Уебинар)</p>
      <br>
      <br>
      <label for="pics"><u>Прикачете снимка на събитието</u></label>
      <input required name="pics" id="pics" type="file">

      <br> <br>

      <label for="header_event">Заглавие: </label> <br>
      <input required id="header_event" name="header_event" type="text">
    </div>

      <br><br>
      <div class="form_part">

        <label for="date_event">Дата и час на събитието: </label> <br>
        <input required id="date_event" name="date_event" type="text">
 
      <br>
      <br>


        <label for="link_for_registration">Линк за регистрация: </label> <br>
        <input required id="link_for_registration" name="link_for_registration" type="text">

        <br> <br>
        
      <button class="uploadBtn events" type="submit">Създай събитие</button>
    </div>

    </form>

      <div style="height: initial !important">
          
              
  <div class="table-wrapper">
    <div class="table-title">
    <div class="row">
    <div class="col-sm-8 search_div"><h2> <b>Събития</b></h2>
      
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </div>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Снимка</th>
    <th>Събитие</th>
    <th>Дата</th>
    <th>Линк</th>
    <th>Запис</th>
    <th>Обновяване</th>

    </tr>
    </thead>
    <tbody class="tbody_searchbar">
      @foreach ($allEvents as $event)
        <tr>
          <form action="{{ route('update_event') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <td style="width: 100px" ><img class="image_event" src="/images/event-images/{{ $event->image_event }}">
            <input style="width: 150px" name="update_image" type="file">
            </td>
            <td><input name="event_name" value="{{ $event->name_event }}" type="text"></td>
            <td><input name="event_date" type="text" value="{{ $event->date_time_event }}"></td>
            <td><input name="event_link" type="text" value="{{ $event->event_link }}" ></td>
            <td><input  name="recording_link" type="text" value="{{ $event->recording_link }}"></td>
            <td>
              <input name="hidden_id" value="{{ $event->id }}" type="hidden">
              <button class="updateEventBtn" type="submit">Обнови</button>
            </td>
          </form>
        </tr>
      @endforeach
  </tbody>
          </table>
        </div>
      </div>
  </div>
</div>



