<nav class="navbar">
    <div class="container">
        <figure>
            <img src="{{ Vite::asset('resources/img/images/dc-logo.png') }}" alt="">
        </figure>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach ($navLinks as $navLink)
                    <li class="nav-item @if ($navLink['current']) active @endif">
                        <a class="nav-link" href="#">{{ $navLink['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
    </div>
</nav>


<style>
    .active{
        color: #3C8EF9;
    }
    
    .container{
        display: flex;
        justify-content: space-between;
    
        width: 80%;
        margin: 0 auto;
        padding-top: 20px;
        align-items: center;
        
    }
    
    
    .navbar-nav{
        display: flex;
        gap: 10px;
    }
    
    .navbar-nav li{
        text-transform: uppercase;
        list-style-type: none;
        font-weight: bold;
    }
    
    .navbar-nav li a {
        text-decoration: none;
        color: gray;
    }
    
    .navbar-nav li a:hover{
        color: #3C8EF9;
    }
    
    .navbar-nav li a::after{
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #3C8EF9;
        transition: width .3s;
    }
    
    .navbar-nav li a:hover::after{
        width: 100%;
        transition: width .9s;
    }
    
    
    </style>