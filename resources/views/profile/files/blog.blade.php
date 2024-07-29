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

      <div class="report-container flex-col special_blog_container">

        <p class="uploadH">Качване на статия</p>

        <form class="create_acticleForm" enctype="multipart/form-data" method="POST" action="{{ route('insert_article') }}">

          @csrf
          
          <div class="form_parts">
            <input style="margin-bottom: 10px;" required name="photo_link" type="file">

            <label for="article_link">Линк на статията:</label><br>
            <input required class="inputForm" name="article_link" id="article_link" type="text">
          </div>

          <div class="form_parts">
            <label for="article_header">Заглавие</label><br>
            <input required class="inputForm" name="article_header" id="article_header" type="text">
          <br>
            <label for="article_subheader">Подзаглаие</label><br>
            <input required class="inputForm" name="article_subheader" id="article_subheader" type="text">
            <button class="uploadBtn" type="submit">ПРИКАЧИ</button>

          </div>


          <div class="form_parts">
            <label for="article_content">Съдържание</label>
            <textarea class="article_content" name="article_content" id="article_content" ></textarea>
          </div>

          {{-- <div class="form_parts">
            <button class="uploadBtn" type="submit">ПРИКАЧИ</button>
          </div> --}}


        </form>

        <hr class="hr_blog">

        <div class="search_bar_blog">
          <label for="searchArticleInput">Потърси Статия</label><br>
          <input id="searchArticleInput" class="searchArticleInput" type="text">
        </div> 
        
        <div class="videos_container">

     

          @foreach ($articles as $article)
 

          <div class="max-w-sm rounded overflow-hidden shadow-lg articleContent">
            <img class="w-full videoSection_images" src="/images/blog-images/{{ $article->img_link }}" alt="{{ $article->header }}'">
            <div class="px-6 py-4">
              <p class="font-bold text-gray-700 text-base text-center headers_articles">
                {{ $article->header }}
              </p>
              <p class="font-bold text-gray-700 text-base text-center">
                {{ $article->subHeader }}
              </p>
              <a class="editBlogBtn" href="/article/{{ $article->id }}">Редактиране</a>
              <p class="triggerModal">Изтриване</p>

              <input value="{{ $article->id }}" class="theID" type="hidden">
            </div>
          </div>

          @endforeach

          </div>



      <div class="deleteModalBlog">
        <form method="POST" action="{{ route('delete_article') }}" class="modalDelArticle">
          @csrf
            <p class="areYouSure">Сигурни ли сте че искате да изтриете тази статия? </p>

            <div class="btnsDelBlog">
              <p class="closeDel">Затвори</p>
              <button class="confirmDel">ПОТВЪРЖДАВАМ</button>
            </div>

          <input name="hiddenID" class="hiddenID" type="hidden">
        </form>
      </div>

      @if ($errors->has('article_link'))
            
            <div class="alert alert-danger linkExists">
                {{ $errors->first('article_link') }}
            </div>
        @endif

      @if (session('status'))
      <div class="succes_background">
        
          <div class="alert alert-success msg_success">
          {{ session('status') }}
          </div>
      </div>
      @endif

      </div>
  </div>
</div>

<script src="/javascript/dashboard-js/blog.js"></script>



