<!--
Jose Franco
Module 4 Assignment
08/26/25
Program to test for palindromes
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JosePalindrome.php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5; 
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4B306A; 
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        h3 {
            color: #FDB913; 
            font-weight: normal;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border: 2px solid #4B306A;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
        }

        .result {
            margin-bottom: 20px;
            padding: 10px;
            border-left: 5px solid #FDB913;
            background-color: #fafafa;
        }

        .yes {
            color: green;
            font-weight: bold;
        }

        .no {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <h1>Module 4: PHP Strings</h1>
    <h3>This program tests strings to identify palindromes.</h3>
</header>

<div class="container">
<?php
    $string1 = "rotator";
    $string2 = "hello";
    $string3 = "racecar";
    $string4 = "computer";
    $string5 = "level";
    $string6 = "programming";

    function palindrome($str) { //palindrome function to compare each string
        $rev = strrev($str);    //assigned the reverse version of the string

        echo "<div class='result'>";
        echo "<strong>String:</strong> " . $str . "<br />";
        echo "<strong>Reversed:</strong> " . $rev . "<br />";
        echo "<strong>Is this a palindrome?: </strong>"; //displayed dialogue to visually compare strings before final output


        if ($str == $rev) {
            echo "<span class='yes'>Yes</span>";
        } else {
            echo "<span class='no'>No</span>";  //if else clause to id if $str and $rev equal the same string
        }

        echo "</div>";
    }

    palindrome($string1);
    palindrome($string2);
    palindrome($string3);
    palindrome($string4);
    palindrome($string5);
    palindrome($string6);
?>
</div>
</body>
</html>
