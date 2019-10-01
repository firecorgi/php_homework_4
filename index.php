<?php


//Ex.1:

print_r($_POST);

$name = $_POST['name'] ?? 'error';
$surname = $_POST['surname'] ?? 'error';
$age = $_POST['age'] ?? 'error';
$gender = $_POST['gender'] ?? 'error';


if ($name !== 'error' && $surname !== 'error' && $age !== 'error' && $gender !== 'error') {
    if (!empty($gender) && !empty($name) && !empty($surname) && !empty($age)) {
        if ($age > 17) {
            if ($gender == "male") {
                print_r("Welcome, Mr" . " " . $name . " " . $surname);
            } else {
                if ($gender == "female") {
                    print_r("Welcome, Mrs" . " " . $name . " " . $surname);
                }
            }
        } else {
            if ($age <= 17) {
                print_r("Sorry, Adults only.");
            }
        }
    } else {
        print_r('Empty value');
    }
} else {
    print_r('Error! You forgot about key');
}

//Ex. 2:
/*
print_r($_GET);

function countFactorial($num) {
    return $num ? $num * countFactorial($num - 1) : 1;
}

switch ($_GET['action']) {
    case "sum":
       print_r(intval($_GET['num1']) + intval($_GET['num2']));
       break;
    case "factorial":
        print_r(countFactorial(intval($_GET['num'])));
}
*/