<!DOCTYPE html>
<html lang='en'>
<head>
    <title>e15 Project 2</title>
    <meta charset='utf-8'>
   
    <link rel="stylesheet" type="text/css" href="Styling.css">
</head>

<body>
    <header>
   
  <h1>
  
  Calculate your Body Mass Index</h1>
  <br>
    
    
   <img alt="BMI Logo" src="public/images/BMI.jpg">
    
    </header>
    
   <br>
   <h2>Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women.</h2>
   
   <br>
    <h3>BMI Categories:</h3>
    <br>Normal  = 18.5–24.9
    <br>Overweight = 25–29.9
    <br>Obesity = 30-39.9
    <br>Morbidly Obese = >40
    
  
        
    <br>
    <h3>
    
    Please follow these guidelines as indicated below to begin: </h3>
    <br>1. Select your gender.
    <br>2. Enter your weight.  
    <br>3. Enter your height.
  
    
    <br><br>
   <form method='POST' action='/save-new-result'>
        
          <br>
       
           
        
        
        <br>
        
   <fieldset>
       <legend>
        <h2>BMI Calculator</h2>
        </legend>
      
        <br>
       <h3>Please select your Gender:</h3>
        
        <div>
         <label for='Male'> Male</label>
          <input type='radio' value='Gender' id='Male' name='Male'>
<br>
          <label for='Female'> Female</label>
          <input type='radio' value='Gender' id='Female' name='Female'>
<br>      
        </div>
        
      <br>
     <br>    
           
          <h3> Please enter your height in Inches:</h3>
         
          
          <div>
          <input type='text' id='height' placeholder= 'Enter your Height'>
          </div>
         
         <br>
           <br>                 
                  
       
         <h3>
         Please enter your weight in pounds:</h3>
       
         
         <input type='text' id='weight' placeholder= 'Enter your Weight'>   
           
          <br><br>
          
          <div>
   <div>
          <br>
          <button type='submit' title='What is your BMI?'>Calculate BMI</button>
        </div>
          </div>   
        
          </fieldset>
            </form> 
   
    
    <br><br>
    
 
    
          
        
        
  <h2>Results</h2>
    
    <h3>
    Your BMI is:
    </h3>
       
    <h3>
    You fall under the range: 
    </h3>
      
      <br><br>
      
    
    <h4>*Note: The BMI calculator is only an estimate and may not be accurate for people with greater muscle mass (such as athletes) or in older people and others who have lost muscle mass. </h4>
      
         
    
    <footer>
      <br>
      <h3>
      <a href="http://e15p2.janenycxo.me">Click here to recalculate BMI Calculator</a></h3>
      
      <br>
    </footer>  
</body>
</html>