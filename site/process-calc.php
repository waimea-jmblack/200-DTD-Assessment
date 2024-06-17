<?php include 'common-top.php'; ?>
<h1>Numeric Digitization Complete</h1>
<link rel="stylesheet" href="styles.css">

<?php

// echo '<pre>';
// print_r($_POST)
// echo '</pre>';

//Get the values from the form
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['operator'];

switch ($op) {
    case 'add':
        $answer = $n1 + $n2;
        echo $n1 . ' plus ' . $n2 . ' is ' . $answer;
        break;
    
    case 'sub':
        $answer = $n1 - $n2;
        echo $n1 . ' minus ' . $n2 . ' is ' . $answer;
        break;

    case 'mul':
        $answer = $n1 * $n2;
        echo $n1 . ' times ' . $n2 . ' is ' . $answer;
        break;

    case 'div':
        $answer = $n1 / $n2;
        echo $n1 . ' divided by ' . $n2 . ' is ' . $answer;
        break;

    default:
       echo 'Unknown operator';
}

echo '<p>Next time use the calculator';

include 'common-bottom.php';