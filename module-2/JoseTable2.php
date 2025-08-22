<!--
Jose Franco
8/19/25
Module 2 Programming Assignment
Program that creates an HTML table using a PHP nested loop structure.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>JoseTable2.php</title>
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
            width: 500px;               
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
            border: 1px solid;
            padding: 8px;
            text-align: center;
        }

        /* zebra striping for readability */
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
            <!-- table header with a single cell spanning 8 columns -->
            <tr>
                <td colspan="8">
                    Displaying Random Numbers Between 1 - 100
                </td>
            </tr>
        </thead>
        <tbody>
            <?php 
            // outer loop that creates 8 rows
            for($i = 0; $i < 8; ++$i){ ?>
                <tr>
                    <?php 
                    // Inner loop that creates 8 columns in each row
                    for($j = 0; $j < 8; ++$j){ ?>
                        <td>
                            <?php 
                            // generate and display a random number between 1 and 100
                            echo(rand(1, 100)); 
                            ?>
                        </td>
                    <?php } // end inner loop ?>
                </tr>
            <?php } // end outer loop ?>
        </tbody>
    </table>
</body>
</html>
