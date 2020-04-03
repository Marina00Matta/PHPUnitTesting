<?php

class Factorial {

        public function getfactorial ($number)
        {
            if(is_numeric($number)&& $number>=0)
            
            {
                $result = 1;
                while($number > 0){
                    $result *= $number--;
                } 
                return $result;
            }
           else{
               return null;
           }
        }
}

?>