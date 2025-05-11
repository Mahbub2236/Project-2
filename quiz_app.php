<?php
$score = 0;

echo "🧠 Welcome to the Quiz App!\n\n";

echo "Q1: What is the capital of France?\n";
echo "a) Berlin\nb) Paris\nc) Madrid\n";
echo "Your answer: ";
$answer1 = trim(fgets(STDIN));
if ($answer1 == "b") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is b) Paris\n";
}

echo "\nQ2: What is 2 + 2?\n";
echo "a) 3\nb) 5\nc) 4\n";
echo "Your answer: ";
$answer2 = trim(fgets(STDIN));
if ($answer2 == "c") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is c) 4\n";
}

echo "\nQ3: Which language is used to write this app?\n";
echo "a) Python\nb) PHP\nc) Java\n";
echo "Your answer: ";
$answer3 = trim(fgets(STDIN));
if ($answer3 == "b") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is b) PHP\n";
}

echo "\n🎉 You got $score out of 3 correct!\n";

