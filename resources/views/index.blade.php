

@extends('layout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="pages/category/news_world.html"> <img class="d-block w-100" src="images/img1.png" alt="First slide" title="Read more"></a>
    </div>
    <div class="carousel-item">
        <a href="pages/category/news_world.html"><img class="d-block w-100" src="images/img2.png" alt="Second slide" title="Read more"></a>
    </div>
    <div class="carousel-item">
        <a href="pages/category/news_world.html"><img class="d-block w-100" src="images/img3.png" alt="Third slide" title="Read more"></a>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


<div class="row">
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
<div class="col-sm-4 my-4">
    <div class="card">
    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
    <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
    </div>
    <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
    </div>
    </div>
</div>
</div>




<div class="row">
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
    <div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
        <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
        <a href="pages/category/news_world.html" class="btn btn-danger">Read more</a>
        </div>
    </div>
    </div>
</div>



@endsection