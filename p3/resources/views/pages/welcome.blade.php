<!doctype html>
<html lang='en'>

<head>
    <title>'Project 3 Jando Eats'</title>
    <meta charset='utf-8'>
 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='/css/bookmark.css' rel='stylesheet'>

</head>
<body>
@if(session('flash-alert'))
    <div class='flash-alert'>
        {{ session('flash-alert') }}
    </div>
@endif

<header>
      <img src='/JandoEatsKnifeandfork.jpg'>
      <br>
      <h1>Welcome to JandoEats - an online public forum where users can input personal reviews and assign ratings of local restaurants.</h1>
      <br>
      <br>
      <a href='/'><img src='/images/JandoEats.jpg' id='JandoEatsLogo' alt='JandoEatsLogo'></a>

<nav>
            <ul>
                <li><a href='/'>Home</a></li>

@if(Auth::user())
                <li><a href='/all'>All Restaurants</a></li>
                <li><a href='/restaurants/create'>Add a Restaurant</a></li>
                <li><a href='/list'>Your Saved Restaurant List</a></li>
@endif

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
<br>
<br>

    <section id='main'>
@yield('content')
    </section>

    <footer>
        &copy; JandoEats <br>
        Questions? Email us at {{ config('mail.supportEmail') }}
    </footer>

</body>

</html>

