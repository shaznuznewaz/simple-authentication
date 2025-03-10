<?php
//$name="Shaznuz";
//echo $name;

$age=50;

/*$myage=($age==50)? 'age is 50' : (($age==51)? 'age is 51':(($age==32)?'age is unknown':''));
echo $myage;

$newage=($age==50)?'age is 50':(($age==52)?'age is 52':(($age==35)?'age is unknown':''));
echo $newage;
*/
/*switch($age){

    case 52:
        echo "age is 52";
        break;
    
    case 55:
        echo 'age is 55';
        break;

        default:
        echo "age is 57";
}
*/
$match=match($age){

    50=>'age is 50'

};
echo $match;

?>