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
    <center><img src="public/images/BMI.jpg"></center>
   <br><center>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.</center>
    <br><center>Please select your gender, enter your weight and height as indicated below to begin:</center>
    <br><br>
    <center>
    <form method='POST' action='/save-new-result'>

        <br>
        
        <p><h2>BMI Calculator</h2></p>
        <p>Please select your gender:</p>
              
          <label for='Male'> Male</label>
          <input type='radio' value='Gender' id='Male' name='Male'>
<br>
          <label for='Female'> Female</label>
          <input type='radio' value='Gender' id='Female' name='Female>
          
             
         <br><br>
         
         Please enter your weight in pounds:
         <input type='text' id='weight' value='weight' name="Your weight in pounds" />   
                  
          <br> <br>
                 
         Please enter your height in inches:
          <input type='text' id='height' value= 'height' name="Your height in inches" />
          
          <br><br>
         
         Please enter your weight in pounds:
         <input type='text' id='weight' value='weight' name="Your weight in pounds" />   
           
          <br><br>
          
          <div>
    <button class ='submit' type='button' value="Submit" onclick="bmi()" /> Calculate BMI</button>
          </div>   
          </form> 
          </center>
    
    <br><br>
    <center>
    
    <p>BMI Categories:
    <br>Normal  = 18.5–24.9
    <br>Overweight = 25–29.9
    <br>Obesity = 30-39.9
    <br>Morbidly Obese = >40
    </p>
   </center>
        
    
</body>
</html>