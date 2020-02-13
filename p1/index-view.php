<!doctype html>
<html lang='en'>

<head>
    <title>e15 Project 1</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>e15 Project 1 </h1>

    <form method= 'post' action='process.php'>
        <label for='inputString'>Enter a string:</label>
        <input type='text' id='inputString' name='inputString'>
        <button type='submit'>Process</button>
    </form>

    <?php if(isset($results)) : ?>
        <h2>Is big word?</h2>
        <?=$results['isBigWord'] ?>

        <h2>Is palindrome?</h2>
        <?=$results['isPalindrome'] ?>
        
        <h2>Contains vowels?</h2>
        <?=$results['containsVowels'] ?>

        <h2>How many vowels?</h2>
        <?=$results['vowelCount'] ?>        

        <h2>Contains capital letters?</h2>
        <?=$results['capitalLetters'] ?>
        
        <h2>Contains lowercase letters?</h2>
        <?=$results['smallLetters'] ?>
    
        <h2>Capitalizes first letter</h2>
        <?=$results['capitalizeFirst'] ?>
        
        <br>
        <br>
        <button value="Refresh Page" onClick="window.location.reload();">Click to Play Again</button>
    

    <?php endif ?>
</body>

</html>