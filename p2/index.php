
<?php
     
     session_start();
     
     $results = null;


     if(isset($_SESSION['results'])) {
        $results = $_SESSION['results'];
    
        $_SESSION['results'] = null;
    }
    


     if ($_GET['calculate bmi']) { 
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
     
     require 'homePage.php';
   