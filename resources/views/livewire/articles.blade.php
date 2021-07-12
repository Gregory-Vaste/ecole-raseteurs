

<div class="mb-3" style="max-width: 540px;">
    <div class="row shadow p-3 mb-5 rounded">
    @foreach ($articles as $article)
      <div class="col-md-4">
        <img src="{{asset(image/img-course).$article->picture}}" alt="{{$article->title}}">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->content}}</p>
          <p class="card-text"><i><small>{{$article->autor}}</small></i></p>
        </div>
      </div>
    @endforeach
    </div>
  </div>

