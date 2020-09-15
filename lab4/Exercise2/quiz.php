<?php
$firstAnswer = $_POST["BPL"];
$secondAnswer = $_POST["SCD"];
$thirdAnswer = $_POST["GC"];
$forthAnswer = $_POST["BG"];
$fifthAnswer = $_POST["BM"];
$totalCredit = 0;

echo "Question1: What is the best programing language in the world? <br>";
if($firstAnswer == "C++"){
    $totalCredit += 20;
}
echo "You answered: " .$firstAnswer."<br>";
echo "Correct answer: C++<br><br>";

echo "Question2: Who is the strongest character in dragon ball? <br>";
if($secondAnswer == "Son Goku"){
    $totalCredit += 20;
}
echo "You answered: ".$secondAnswer."<br>";
echo "Correct answer: Son Goku <br><br>";

echo "Question3: Which graphics card designed for gamers? <br>";
if($thirdAnswer == "GTX 960"){
    $totalCredit += 20;
}
echo "You answered: ".$thirdAnswer."<br>";
echo "Correct answer: GTX 960<br><br>";

echo "Question4: Which game is the best one in 2015? <br>";
if($forthAnswer == "Witcher 3"){
    $totalCredit += 20;
}
echo "You answered: " .$forthAnswer."<br>";
echo "Correct answer: Witcher 3<br><br>";

echo "Question5: Who is the best mentor for EECS beginner at KU? <br>";
if($fifthAnswer != false){
    $totalCredit += 20;
}
echo "You answered: " .$fifthAnswer."<br>";
echo "Correct answer: ".$fifthAnswer." (I hope you have a great experience.) <br><br>";

echo "Congradulation! Your total credit: $totalCredit";

?>