

<div class="row">
@foreach($articles as $article)

@if($category->id == '1')

    <div class="col-sm-4 my-4">
        <div class="card">
        <img class="card-img-top" src="{{ asset('images/' . $article->image) }}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4>
            <p class="card-text">{{str_limit($article->content, 100)}}</p>
            
        </div>
        <div class="card-footer">
            <a href="{{ route('article', $article) }}" class="btn btn-danger">Read more</a>
        </div>
        </div>
    </div>

@else
    @if($category->id == $article->category_id)
    
    <div class="col-sm-4 my-4">
        <div class="card">
        <img class="card-img-top" src="{{ asset('images/' . $article->image) }}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4>
            <p class="card-text">{{str_limit($article->content, 100)}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('article', $article) }}" class="btn btn-danger">Read more</a>
        </div>
        </div>
    </div>
    @endif
    


@endif
@endforeach
</div>
<center>
<div class="pagination" style="max-width: 247.89px;">
{!!$articles->render()!!}
</div>
</center>

