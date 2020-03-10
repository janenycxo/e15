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
   
    <center><h1>Calculate your Body Mass Index</h1></center>
    <center><img src="/images/BMI.jpg"></center>
    <p id="subtitle">Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.
    <br>Enter your weight and height below:

    <form method='POST' action='save-new-result'>
    <br>
        <p>Please select your gender:</p>
              
          <label for='Male'> Male</label>
          <input type='radio' value='Male' id='Male' name='sex'>
          <label for='Female'> Female</label>
          <input type='radio' value='Female' id='Female' name='sex'>
          <input type="text" value='weight' id='weight' name="weight"> Please enter your weight (in lbs):  
          <input type="text" value='height' id='height' name="height"> Please enter your Height (in inches): 
          <br>Select "Calculate BMI" and your BMI will appear below.</p>
          <div>
    <button type='submit'>Calculate BMI</button>
          </div>   
          </form>
    
    <br>

    

    <p>BMI Categories:
    <br>Normal  = 18.5–24.9
    <br>Overweight = 25–29.9
    <br>Obesity = 30-39.9
    <br>Morbidly Obese = >40
    </p>
   
        
    
</body>
</html>