
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
   
    </li>
    <li class="nav-item ">

        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">{{auth()->user()->name}}
            <span class="caret"></span></button>
            <ul class="dropdown-menu">

            <li><a class="btn btn-warning nav-link" href="{{ route('mypage.settings') }}" style="color:white !important;">Settings</a></li>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
            
            <li><a class=" btn btn-danger nav-link" href="{{ route('logout') }}" style="color:white !important;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout</a>
            </li>

        
            </ul>
        </div>
    </li>
    </ul>
     </div>
    </div>
</nav>