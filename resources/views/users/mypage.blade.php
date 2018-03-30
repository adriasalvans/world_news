<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>World News</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/mypage.css')}}" rel="stylesheet">
    <script src="{{asset('js/script.js')}}"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">

        <div class="dropdown">
              <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">{{$user->name}}
              <span class="caret"></span></button>
              <ul class="dropdown-menu">

                <li><a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning">Edit</a></li>
                <li><a href="{{ route('users.destroy',$user->id) }}" onclick="return confirm('Deleting: Are you sure?')"
                class="btn btn-danger">Delete</a></li>
          
              </ul>
            </div>

        <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a class="nav-link" href="#">Log out</a>
        </li>
        </ul>
        </div>
      </div>
    </nav>
    
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3 text-center text-black mt-4">World News</h1>
            <div id="sub_title">
              <h3 class="display-5 text-center text-black mt-4">My News</h3>
            </div>
          </div>
        </div>
      </div>
    </header>
    @include('flash::message')

    
    <div class="container">
      <br>
      
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="mypage.html">Mypage</a></li>
          </ol>
        </nav>
        
      <br>
      
      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="session_news.html" class="btn btn-danger">Read more</a>
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
              <a href="session_news.html" class="btn btn-danger">Read more</a>
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
              <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                  <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                  <a href="session_news.html" class="btn btn-danger">Read more</a>
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
                  <a href="session_news.html" class="btn btn-danger">Read more</a>
                </div>
              </div>
            </div>
          </div>
     
        <center>
            <ul class="pagination" style="max-width: 247.89px;">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                <li class="page-item can"><a class="page-link" href="mypage2.html">2</a></li>
                <li class="page-item can"><a class="page-link" href="mypage3.hmtl">3</a></li>
                <li class="page-item can">
                  <a class="page-link" href="mypage2.html">Next</a>
                </li>
              </ul>
        </center>
    </div>
    
    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; World News</p>
      </div>
     
    </footer>

  </body>

</html>