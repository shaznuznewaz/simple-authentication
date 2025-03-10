<?php

define("FACTOR",9/5);
define("OFFSET",32);

echo "Temperature Value : ";
$temperature=(float)readline();
echo "Convert to (1:Farenheit, 2:Celcius): ";
$choice=(int)readline();

switch($choice){

    case 1:
        $result=$temperature * FACTOR + OFFSET;
        echo "Temperature in Farenheit $result\n";
        break;
    
        case 2:
            $result=($temperature - OFFSET) / FACTOR;
            echo "Temperature in Celcius $result\n";
            break;    
         
        default:
             echo "Invalid Choice ";
             break;       
}
