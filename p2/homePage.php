<!DOCTYPE html>
<html lang='en'>
<head>
    <title>e15 Project 2</title>
    <meta charset='utf-8'>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <br><br>
    <h1>Calculate your Body Mass Index</h1>
    <p id="subtitle">Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.
    <br>Enter your weight and height using standard or metric measures. 
    <br>Select "Calculate BMI" and your BMI will appear below.</p>
    <br>
    <p>BMI Categories:
<br>Underweight = <18.5
<br>Normal  = 18.5–24.9
<br>Overweight = 25–29.9
<br>Obesity = BMI of 30 or greater
    </p>
    <form method= 'post' action='bmiProcess.php'>
        <label for='inputString'>Enter a string:</label>
        <input type='text' id='inputString' name='inputString'>
        <button type='submit'>Calculate BMI</button>
    </form>
     
     <?php if (isset($results)) :?>

     $_GET['calculate bmi']) { 
        $weight = $_GET['weight'];
        $height = $_GET['height'];
    
        function bmi($weight,$height) {
            $bmi = $weight/($height*$height);
            return $bmi;
        }   
    
        $bmi = bmi($weight,$height); 
    
        if ($bmi <= 18.5) {
            $output = "UNDERWEIGHT";
    
            } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "NORMAL";
    
            } else if ($bmi > 25 AND $bmi<=29.9) {
            $output = "OVERWEIGHT";
    
            } else if ($bmi > 30.0) {
            $output = "OBESE";
        }
        echo "Your BMI value is  " . $bmi . "  and you are : "; 
        echo "$output";
    }
     



    
    
</body>
</html>