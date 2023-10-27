// 1 //
// function checkEvenOrOdd($number) {
//     if($number % 2 == 0) {
//         echo "$number is even.";
//     } else {
//         echo "$number is odd.";
//     }
// }

// checkEvenOrOdd(4); // Output: 4 is even.
// checkEvenOrOdd(7);

// 2//

// function fizzBuzz($n) {
//     for ($i = 1; $i <= $n; $i++) {
//         if ($i % 3 == 0 && $i % 5 == 0) {
//             echo "FizzBuzz ";
//         } elseif ($i % 3 == 0) {
//             echo "Fizz ";
//         } elseif ($i % 5 == 0) {
//             echo "Buzz ";
//         } else {
//             echo "$i ";
//         }
//     }
// }

// fizzBuzz(100);


// 3 //


// function reverseString($str) {
//     $length = strlen($str);
//     $reversed = '';

//     for ($i = $length - 1; $i >= 0; $i--) {
//         $reversed .= $str[$i];
//     }

//     return $reversed;
// }


// $originalString = "welcome";
// $reversedString = reverseString($originalString);

// echo "Original string: $originalString\n";
// echo "Reversed string: $reversedString\n";

// 4 //

// function calculateCircleArea($radius) {
//     $area = M_PI * pow($radius, 2);
//     return $area;
// }

// function calculateCircleCircumference($radius) {
//     $circumference = 2 * M_PI * $radius;
//     return $circumference;
// }

// // Test case with radius = 5
// $radius = 5;
// $area = calculateCircleArea($radius);
// $circumference = calculateCircleCircumference($radius);

// echo "Radius: $radius\n";
// echo "Area: $area\n";
// echo "Circumference: $circumference\n";

 // 5 //


// function checkIfSumOrOneIs50($num1, $num2) {
//     if ($num1 == 50 || $num2 == 50 || $num1 + $num2 == 50) {
//         return true;
//     } else {
//         return false;
//     }
// }


// $result1 = checkIfSumOrOneIs50(25, 50); // Returns true
// $result2 = checkIfSumOrOneIs50(30, 20); // Returns true
// $result3 = checkIfSumOrOneIs50(10, 15); // Returns false

// var_dump($result1);
// var_dump($result2);
// var_dump($result3);

// 6 //
// function checkPositiveAndNegative($num1, $num2) {
//     if (($num1 > 0 && $num2 < 0) || ($num1 < 0 && $num2 > 0)) {
//         return true;
//     } else {
//         return false;
//     }
// }


// $result1 = checkPositiveAndNegative(5, -10); // Returns true
// $result2 = checkPositiveAndNegative(-8, 3); // Returns true
// $result3 = checkPositiveAndNegative(7, 8); // Returns false

// var_dump($result1);
// var_dump($result2);
// var_dump($result3);

// 7 //

// function checkMultiples($number) {
//     if ($number % 5 == 0 || $number % 8 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }

// // Test cases
// $result1 = checkMultiples(10); // Returns true (multiple of 5)
// $result2 = checkMultiples(16); // Returns true (multiple of 8)
// $result3 = checkMultiples(7);  // Returns false (not a multiple of 5 or 8)

// var_dump($result1);
// var_dump($result2);
// var_dump($result3);

// 8 //
// function findLargest($num1, $num2, $num3) {
//     $largest = $num1;

//     if ($num2 > $largest) {
//         $largest = $num2;
//     }

//     if ($num3 > $largest) {
//         $largest = $num3;
//     }

//     return $largest;
// }

// // Test case
// $largestNumber = findLargest(15, 30, 10);
// echo "The largest number is: $largestNumber";

// 9 //
// $sum = 0;

// for ($i = 1; $i <= 10; $i++) {
//     $sum += $i;
// }

// echo "The sum of numbers from 1 to 10 is: $sum";

// 10  //

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo '*';
//     }
//     echo "\n";
// }


// 11 //
// function checkPositiveNegative($number) {
//     if ($number > 0) {
//         return "$number is positive.";
//     } elseif ($number < 0) {
//         return "$number is negative.";
//     } else {
//         return "$number is zero (neither positive nor negative).";
//     }
// }

// // Test cases
// $result1 = checkPositiveNegative(5);   // Returns "5 is positive."
// $result2 = checkPositiveNegative(-8);  // Returns "-8 is negative."
// $result3 = checkPositiveNegative(0);   // Returns "0 is zero (neither positive nor negative)."

// echo $result1 . "\n";
// echo $result2 . "\n";
// echo $result3 . "\n";

// 12 //

// $elements = []; // Initialize an empty array

// // Collect user input
// for ($i = 0; $i < 10; $i++) {
//     $elements[$i] = readline("element - $i : ");
// }

// // Print the elements
// echo "The elements in the array are:\n";
// foreach ($elements as $key => $value) {
//     echo "element - $key : $value\n";
// }


// 13 //

// function calculateSum($num1, $num2) {
//     $sum = $num1 + $num2;
//     return $sum;
// }

// // Test case
// $num1 = 5;
// $num2 = 7;
// $result = calculateSum($num1, $num2);

// echo "The sum of $num1 and $num2 is: $result";

// 14 //

// function factorial($n) {
//     if ($n == 0 || $n == 1) {
//         return 1;
//     } else {
//         return $n * factorial($n - 1);
//     }
// }

// // Get user input
// $num = readline("Input the number: ");

// // Calculate factorial
// $result = factorial($num);

// echo "The Factorial of $num is: $result";


// 15 //

// function add($num1, $num2) {
//     return $num1 + $num2;
// }

// function subtract($num1, $num2) {
//     return $num1 - $num2;
// }

// function multiply($num1, $num2) {
//     return $num1 * $num2;
// }

// function divide($num1, $num2) {
//     if ($num2 != 0) {
//         return $num1 / $num2;
//     } else {
//         return "Error: Division by zero is not allowed.";
//     }
// }

// // Test cases
// $num1 = 10;
// $num2 = 5;

// echo "Addition: " . add($num1, $num2) . "\n";
// echo "Subtraction: " . subtract($num1, $num2) . "\n";
// echo "Multiplication: " . multiply($num1, $num2) . "\n";
// echo "Division: " . divide($num1, $num2) . "\n";

