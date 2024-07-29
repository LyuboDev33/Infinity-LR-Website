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
      <div style="height: initial !important" class="report-container">

              
  <div class="table-wrapper">
    <div class="table-title">
    <div class="row">
    <div class="col-sm-8 search_div"><h2> <b>Потребители</b></h2>
      <div>
        <label for="search_user">Потърси <b>Потребител</b></label><br>
        <input id="search_user" placeholder="Потърси по име или тел. номер" class="search_user" type="text">
      </div>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </div>
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Имена</th>
    <th>Имейл адрес</th>
    <th>Телефонен номер</th>
    <th>Партньорски код</th>
    <th>Статус Достъп</th>
    <th>Даване на достъп</th>
    <th>Дата на регистрация</th>
    <th>Тест</th>
    <th>Изтрии </th>
    </tr>
    </thead>
      <tbody class="tbody_searchbar">
      @foreach ($all_users as $user)
      <tr>
        <td class="user_name">{{$user->name}}</td>
        <td class="user_email">{{ $user->email }}</td>
        <td>{{$user->phone_number }}</td>
        <td class="lr_code">{{ $user->lr_code }}</td>
  
        @if( $user->authorize_user === 'not_authorized')
        <td class="td_access">Няма достъп</td>
        @else
        <td class="td_access">Има достъп</td>
        @endif
        <td>
          <form action="{{ route('give_permission') }}" method="POST">
            @csrf
            <select name="select_access">
                <option selected disabled>Избери</option>
                <option value="Дай достъп">Дай достъп</option>
                <option value="Забрани достъп">Забрани достъп</option>
            </select>
            <button class="saveChanges" type="submit">Запази</button>
            <input name="theEmail" value="{{ $user->email }}" type="hidden">
        </form>
        </td>
        <td><a href="/user/{{ $user->email }}"><img class="modalImg" src="/images/dashboard-images/checklist.svg" alt="Чеклист"></a></td>
        <td>{{ $user->created_at }}</td>
        <td>
          {{-- <a href="/potrebiteli/{{ $user->email }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> --}}
          <a  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
        </td>
  
        </tr>
  
        
  
      @endforeach
      </tbody>
    </table>
    </div>

      </div>
  </div>
</div>




  {{-- This is the HTML for the "Are you sure you want to delete?" modal --}}
  <form class="background_delete" action="{{ route('delete_user') }}" method="POST">
    @csrf
    <div class="confirm_delete_div">
    <p>Сигурни ли сте че искате да изтриете този акаунт?</p>
    <div class="btns_div">
      <button class="delBTN" type="submit">Потвърждавам</button>
      <div class="close_modalBTN" >Затвори</div>
    </div>

    <input name="email_delete" class="hiddenInput_useremail" type="hidden">
    </div>
  </form>
  {{-- This is the HTML for the "Are you sure you want to delete?" modal --}}

  @if (isset($status))
    <div class="alert alert-success">
        {{ $status }}
    </div>
@endif

  <script src="/javascript/dashboard-js/access-blade.js"></script>
