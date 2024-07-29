@include('layouts.pages-nav')

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/css/dashboard_css/access-blade.css">
<link rel="stylesheet" href="/css/dashboard_css/pages-nav.css">
<script src="https://cdn.tiny.cloud/1/qswlp4bn8j5u5ab8di0hfciu0oa0u3np9qq76utrli46e9xl/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


<div class="main-container">
  <div class="navcontainer">
      <nav class="nav">
          <div class="nav-upper-options">

            @include('layouts.sidebar')

          </div>
      </nav>
  </div>
  
  <div class="main">
      <div class="report-container flex-col">

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

                <p>Създайте Предстоящо Събитие (Уебинар)</p>
              <br>

              <br>

              <label for="pics"><u>Прикачете снимка на събитието</u></label>
              <input required name="pics" id="pics" type="file">

              <br>

              <label for="header_event">Заглавие: </label>
              <input required id="header_event" name="header_event" type="text">

              <br>

              <label for="date_event">Дата и час на събитието: </label>
              <input required id="date_event" name="date_event" type="text">

              <br>


              <label for="link_for_registration">Линк за регистрация: </label>
              <input required id="link_for_registration" name="link_for_registration" type="text">

              <br>

              <label for="recording">Линк към записът на събитието: </label>
              <input name="recording" id="recording" type="text">
              
              <button class="uploadBtn events" type="submit">Създай събитие</button>

              </form>

              <hr>

      <p class="editArticleP">Редактиране на <b>Статия</b></p>
        
      <form action="{{ route('updateArticle') }}" class="form_Update_Article" method="POST" enctype="multipart/form-data">
        @csrf

      @foreach ($specificArticle as $article)

      <div style="margin-right: 100px;" class="form_parts">
        <label>Сегашна снимка на статията: </label><br>
        <img src="/images/blog-images/{{ $article->img_link }}" alt="{{ $article->header }}'">
       
      <br><br>

          <label for="inside_header">Заглавие</label><br>
          <input  value="{{ $article->header }}" name="inside_header" id="inside_header" type="text">

          <br><br>

          <label for="inside_subHeader">Подзаглавие</label><br>
          <input value="{{ $article->subHeader }}" name="inside_subHeader" id="inside_subHeader" type="text">

        <label  for="new_photo">Избери нова снимка: </label>
        <input style="margin: 10px auto;" id="new_photo" name="new_photo" type="file">
      </div>

        <br><br>

      <div class="form_parts">
          <textarea name="content_inside" id="content_inside"> {{ $article->content }} </textarea>
          <button class="editBlogBtn" type="submit">ЗАПАЗИ ПРОМЕНИТЕ</button>
          <input name="idUpdate" value="{{ $article->id }}" type="hidden">
      </div>

      @endforeach
    </form>
  </div>

  @if (session('status'))
  <div class="succes_background">
      <div class="alert alert-success msg_success">
      {{ session('status') }}
      </div>
  </div>
  @endif

  </div>
</div>

<script>
  tinymce.init({
  selector: '#content_inside',
  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
});
</script>


