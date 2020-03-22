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
      <br>
      <h1>E15 Spring 2020 Project 2 BMI Calculator</h1>
      <br>
      <br>
      <a href='/'><img src='/images/BMI.jpg' id='Bmi Scale' alt='Bmi Scale'></a>
</header>
<br>
<br>
<section>
    <br>
    <br>
       @yield('content')
</section>

<footer>
   <br>
<br> <div>
<h3>Refresh The P2 App - Beyond BMI Page by Clicking the Button Below.</h3>
<a href='/'>Click here to Recalculate BMI Calculator</a>
</div>
</footer>  

      <br>
</body>

</html>