<!--
Jose Franco
CSD440 Assignment 6
09/04/2025
PHP Objects
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JoseMyInteger.php</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #002F6C;
        }

        header {
            background-color: #002F6C;
            color: #FFD200;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .result-block {
            background: #e9f1fb;
            border-left: 6px solid #FFD200;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .result-block strong {
            color: #002F6C;
        }
    </style>

    <?php
    class JoseMyInteger {
        public $num; // property to hold the integer

        // constructor to initialize the object with a number
        function __construct($num) {
            $this->num = $num;
        }

        // method to check if the number is even
        function isEven(int $var) {
            $var = $this->num; // Use the object’s current number
            if ($var % 2 == 0) {
                return $var . " is Even";
            } else {
                return $var . " is not Even";
            }
        }

        // method to check if the number is odd
        function isOdd(int $var) {
            $var = $this->num;
            if ($var % 2 != 0) {
                return $var . " is Odd";
            } else {
                return $var . " is not Odd";
            }
        }

        // method to check if the number is prime
        function isPrime(int $var) {
            $var = $this->num;

            // 1 is not a prime number
            if ($var == 1)
                return $var . " is not Prime";

            // check divisibility up to half of the number
            for ($i = 2; $i <= $var / 2; $i++) {
                if ($var % $i == 0)
                    return $var . " is not Prime";
            }
            return $var . " is Prime";
        }

        // Setter update the value of $num
        function set_num($num) {
            $this->num = $num;
        }

        // Getter retrieve the value of $num
        function get_num() {
            return $this->num;
        }
    }
    ?>
</head>
<body>
<header>
    <h1>Module 6: PHP Objects</h1>
</header>

<main>
<?php
$newLine = "<br/>";
$twoLine = "<br/><br/>";

// create two instances of the JoseMyInteger class
$instance1 = new JoseMyInteger(1);
$instance2 = new JoseMyInteger(2);

// update the numbers using the setter method
$instance1->set_num(11);
$instance2->set_num(42);

// display the values
echo "<div class='result-block'><strong>The first integer is:</strong> " . $instance1->get_num() . "</div>";
echo "<div class='result-block'><strong>The second integer is:</strong> " . $instance2->get_num() . "</div>";

// check if the numbers are even
echo "<div class='result-block'>" . $instance1->isEven($instance1->get_num()) . "</div>";
echo "<div class='result-block'>" . $instance2->isEven($instance2->get_num()) . "</div>";

// check if the numbers are odd
echo "<div class='result-block'>" . $instance1->isOdd($instance1->get_num()) . "</div>";
echo "<div class='result-block'>" . $instance2->isOdd($instance2->get_num()) . "</div>";

// check if the numbers are prime
echo "<div class='result-block'>" . $instance1->isPrime($instance1->get_num()) . "</div>";
echo "<div class='result-block'>" . $instance2->isPrime($instance2->get_num()) . "</div>";
?>
</main>
</body>
</html>
