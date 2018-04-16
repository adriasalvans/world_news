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

    @include('users.navbar_mypage')
    
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
      
      @include('users.news_row_mypage',compact('articles'))
   
     
    </div>
    
    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; World News</p>
      </div>
     
    </footer>

  </body>

</html>