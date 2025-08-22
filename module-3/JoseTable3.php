<!--
Jose Franco
8/20/25
Module 3 Programming Assignment
Program that uses a function to generate the value displayed in each cell.
The function takes two random numbers as parameters and returns their sum.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JoseTable3.php</title>
    <style>
        /* general page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; 
            text-align: center; 
        }

        /* table styling */
        table {
            margin: 20px auto;          
            border-collapse: collapse;  
            width: 1100px;              
            border: 3px solid #000000ff;
        }

        /* table header style */
        thead tr td {
            background-color: #12161dff; 
            color: #000000ff;
            font-weight: bold;
            text-align: center;
            padding: 12px;
            font-size: 18px;
            border: 3px solid #000000ff;
        }

        /* table body cells */
        tbody td {
            border: 1px solid #000000ff;
            padding: 8px;
            text-align: center;
        }

        /* zebra striping for alternating row colors */
        tr:nth-child(even) td {
            background-color: #4c3b1233; 
        }
        tr:nth-child(odd) td {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <!-- table header spanning all columns -->
            <tr>
                <td colspan="8">
                    Displaying the sum of two random numbers between 1 and 100
                </td>
            </tr>
        </thead>
        <tbody>
        <?php
            // import external file containing the ranSum() function
            include "JoseFunction.php";

            // outer loop that generates 8 rows
            for($i = 0; $i < 8; ++$i){ 
        ?>
            <tr>
                <?php 
                // inner loop that generates 8 columns per row
                for($j = 0; $j < 8; ++$j){ ?>
                    <td>
                        <?php
                            // generate two random numbers between 1 and 100
                            $z = rand(1,100);
                            $x = rand(1,100);

                            // display the expression and the result using the ranSum() function
                            echo "$z + $x = " . ranSum($z, $x);
                        ?>
                    </td>
                <?php } // end inner loop ?>
            </tr>
        <?php } // end outer loop ?>
        </tbody>
    </table>
</body>
</html>
