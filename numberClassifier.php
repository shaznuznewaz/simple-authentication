<?php

echo "Enter New Number: ";

$inputNumber=(int)readline();

if($inputNumber>0){

    echo "Number is Positive";
}elseif($inputNumber<0){

    echo "Number is Negative";  
}else{

    echo "Number is Zero";
}