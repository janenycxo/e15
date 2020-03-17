
<?php
     
     session_start();
     
     $results = null;


     if(isset($_SESSION['results'])) {
        $results = $_SESSION['results'];
    
        $_SESSION['results'] = null;
    }
    
    $gender = ['Male', 'Female'];


     if ($_GET['calculate bmi']) { 
        $weight = $_GET['weight'];
        $height = $_GET['height'];
    
        function BMI($weight,$height) {
           $BMI = 703 * $weight / ($height * $height);
           return $BMI;
        }   
    
           
        if ($BMI <= 18.5) {
            $output = "UNDERWEIGHT";
    
            } else if ($BMI > 18.5 AND $BMI<=24.9 ) {
            $output = "NORMAL";
    
            } else if ($BMI > 25 AND $BMI<=29.9) {
            $output = "OVERWEIGHT";
    
            } else if ($BMI > 30 AND $BMI<=39.9) {
            $output = "OBESE";

            } else if ($BMI > 40.0) {
            $output = "MORBIDLY OBESE";
        }
        echo "Your BMI value is  " . $BMI . "  and you are : "; 
        echo "$output";
    }

    $_SESSION['results'] = $results;
    
    require 'welcome';
   