<!doctype html>
<html lang='en'>
<head>
    <title>@yield('name')</title>
    <img src='images/JandoEats.png'>

    <meta charset='utf-8'>

    <link href='/css/restaurant.css' rel='stylesheet'>

    @yield('head')
</head>
<body>


    @if(session('flash-alert'))
    <div class='flash-alert'>
        {{ session('flash-alert') }}
    </div>
    @endif

    

<section>
    @yield('content')

<header>

        <nav>
            <ul>
                <li><a href='/'>Home - Search for Restaurants</a></li>

                @if(Auth::user())
                <li><a href='/restaurants'>List of Restaurants</a></li>
                <li><a href='/restaurants/create'>Add a NEW Restaurant</a></li>
                <li><a href='/restaurants/edit'>Edit Restaurant Details</a></li>
                <li><a href='/restaurants/delete'>Review a Restaurant</a></li>  
                <li><a href='/restaurants/list'>Top 3 Favorites</a></li>
                @endif

                
                <li><a href='/cuisines'>Restaurants by Cuisines</a></li>
                <li><a href='/locations'>Restaurants by County</a></li>
                <li><a href='/support'>Support</a></li>


                <li>
                    @if(!Auth::user())
                        <a href='/login'>Login</a>
                    @else
                        <form method='POST' id='logout' action='/logout'>
                            {{ csrf_field() }}
                            <a href='#' onClick='document.getElementById("logout").submit();'>Logout {{ $user->name }}</a>
                        </form>
                    @endif
                </li>
            </ul>
        </nav>
    </header>

    <section id='main'>
&copy; JandoEats 2020 <br>
        Questions? Email us at eateries@JandoEats.com
</section>


</body>
</html>