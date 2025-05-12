<?php

$score = 0;
$question = 1;

while ($question <= 3) {
    if ($question == 1) {
        echo "\n1. Which symbol is used to start a variable in PHP?\n";
        echo "a) %\nb) &\nc) $\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer == "c") {
            echo "✅ Correct!\n";
            $score++;
        } else {
            echo "❌ Wrong. The correct answer is c) $\n";
        }
    }

    if ($question == 2) {
        echo "\n2. What does CSS stand for?\n";
        echo "a) Cascading Style Sheets\nb) Computer Style Sheet\nc) Creative Style System\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer == "a") {
            echo "✅ Correct!\n";
            $score++;
        } else {
            echo "❌ Wrong. The correct answer is a) Cascading Style Sheets\n";
        }
    }

    if ($question == 3) {
        echo "\n3. What does PHP stand for?\n";
        echo "a) Personal Home Page\nb) PHP Hypertext Preprocessor\nc) Programming Home Platform\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($answer == "b") {
            echo "✅ Correct!\n";
            $score++;
        } else {
            echo "❌ Wrong. The correct answer is b) PHP Hypertext Preprocessor\n";
        }
    }

    $question++;
}

echo "\n🎉 You got $score out of 3 correct!\n";
