<?php


function evaluateQuiz(array $questions, array $answers):int{

    $score=0;
    foreach($questions as $index=>$question){
        if($answers[$index]===$question['correct']){
            $score++;
        }
    }
    return $score;

}



$questions=[

        ['question'=>'Whats is 2+2', 'correct'=>'4'],
        ['question'=>'What is the capital of France?', 'correct'=>'paris'],
        ['question'=> 'Who wrote "Hamlet"', 'correct'=> 'shakespeare']

];

$answers=[];

    foreach($questions as $index=>$question){
        echo ($index+1).". ".$question['question']."\n";
        $answers[]=trim(string: readline("Your answer: "));
        
    }



$score=evaluateQuiz($questions,$answers);
echo "\nYou scored $score out of ".count($questions).".\n";

if($score===count($questions)){
    echo "Excellent Job\n";
}elseif($score>=1){
    echo "Good Effort \n";
}else{
    echo "Your result is failed \n";
}




?>