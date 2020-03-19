<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title', 'Project 2 BMI Calculator')</title>
    <meta charset='utf-8'>

    <link href='/css/styling.css' rel='stylesheet'>

    @yield('head')
</head>

<body>

<header>
    <a href='/'><img src='/images/BMI.jpg' id='Bmi Scale' alt='Bmi Scale'></a>
        <h1>E15 Spring 2020 Project 2 BMI Calculator</h1>
</header>

<section>
    @yield('content')
</section>

<footer>
      <br>
      <h3>
      <a href="http://e15p2.janenycxo.me">Click here to recalculate BMI Calculator</a></h3>
      <br>
</footer>  

      <br>
</body>

</html>