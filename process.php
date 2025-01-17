<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero is not allowed.';
                }
                break;
            default:
                $result = 'Error: Invalid operation.';
                break;
        }
    } else {
        $result = 'Error: Please enter valid numbers.';
    }

  
    $_SESSION['result'] = $result;

   
    header("Location: index.php");
    exit();
} else {
   
    header("Location: index.php");
    exit();
}
