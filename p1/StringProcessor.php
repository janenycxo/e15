<?php

class StringProcessor 
{
    # Properties
    private $inputString;

    # Methods
    public function __construct($inputString) 
    {
        $this->inputString = $inputString;
        var_dump($this->inputString);
    }

    public function isPalindrome()
    {
        return 'Yes';
    }

    public function isBigWord()
    {
        // if (strlen($inputSting) > 7) {
        //    return 'Yes';
        // } else {
        //    return 'No';
        // }
        
        return (strlen($this->inputString) > 7) ? 'Yes' : 'No';
    }
}
