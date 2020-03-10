<!doctype html>
<html lang='en'>
<head>
    <title>Bookmark</title>
    <meta charset='utf-8'>
</head>
<body>
    <header>
    <a href='/'><img src='/images/bookmark-logo@2x.png' id='logo' alt='Bookmark Logo'>Bookmark</a>
    </header>

<section>
@if($bookFound)
<h1>{{ $title }}</h1>
<p>
   Details of the book will go here....
</p>

@else
Book not found....
@endif
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

</body>
</html>