<!--
Jose Franco 
CSD 440 Assignment 5
09/03/2025
Indexed and Associated Arrays
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JoseCustomers.php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #1e3a5f; 
        }
        h1 {
            background-color: #1e3a5f; 
            color: #f6c744; 
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        h3 {
            color: #1e3a5f;
            margin-bottom: 10px;
        }
        .section {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #1e3a5f;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        b {
            color: #1e3a5f;
        }
    </style>
</head>
<body>
<h1>Module 5: Indexed and Associated Arrays</h1>

<div class="section">
<h3>Customer List</h3>
<?php
// Define customers
$cust1 = array("First Name" => "Carlos", "Last Name" => "Ramirez", "Age" => 28, "Phone Number" => "317-234-1111");
$cust2 = array("First Name" => "Sadie", "Last Name" => "Sailor", "Age" => 24, "Phone Number" => "317-234-5643");
$cust3 = array("First Name" => "Bill", "Last Name" => "Tav", "Age" => 52, "Phone Number" => "317-234-6345");
$cust4 = array("First Name" => "Trevor", "Last Name" => "Renolds", "Age" => 35, "Phone Number" => "317-234-2345");
$cust5 = array("First Name" => "Lucía", "Last Name" => "Fernández", "Age" => 41, "Phone Number" => "317-234-2222");
$cust6 = array("First Name" => "Wally", "Last Name" => "Wetherly", "Age" => 45, "Phone Number" => "317-234-3654");
$cust7 = array("First Name" => "José", "Last Name" => "Martínez", "Age" => 34, "Phone Number" => "317-234-3333");
$cust8 = array("First Name" => "Kiera", "Last Name" => "Marril", "Age" => 23, "Phone Number" => "317-234-4567");
$cust9 = array("First Name" => "Sally", "Last Name" => "Teeve", "Age" => 43, "Phone Number" => "317-234-2543");
$cust10 = array("First Name" => "Isabella", "Last Name" => "Lopez", "Age" => 29, "Phone Number" => "317-234-4444");
$cust11 = array("First Name" => "Mike", "Last Name" => "Riley", "Age" => 34, "Phone Number" => "317-234-0644");
$cust12 = array("First Name" => "María", "Last Name" => "Gomez", "Age" => 63, "Phone Number" => "317-234-5555");

$customers = array($cust1, $cust2, $cust3, $cust4, $cust5, $cust6, $cust7, $cust8, $cust9, $cust10, $cust11, $cust12);

$arrlength = count($customers);

// Show total customers in a table
echo "We currently have " . $arrlength . " total customers.";
echo "<br/><br/>";

echo "<table>";
echo "<tr><th>#</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Phone Number</th></tr>";
$num = 0;
foreach ($customers as $person) {
    $num++;
    echo "<tr><td>$num</td>";
    foreach ($person as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</div>

<div class="section">
<h3>Last Names in Descending Order</h3>
<?php
$last_name = array_column($customers, "Last Name", "First Name");
arsort($last_name); // show customers in descending order
foreach ($last_name as $first => $last) {
    echo $first . " " . $last . "<br/>";
}
?>
</div>

<div class="section">
<h3>Who Is The Youngest And Who Is The Oldest?</h3>
<?php
$age = array_column($customers, "Age");
sort($age); // showing the youngest and oldest customer
echo "The youngest is " . $age[0] . " years old.<br/>";
echo "The oldest is " . end($age) . " years old.<br/>";
?>
</div>

<div class="section">
<h3>Phone Numbers Sorted by Ascending Entry</h3>
<?php
$phone_number = array_column($customers, "Phone Number");
array_multisort($phone_number, SORT_ASC, $customers); // showing customer by phone numbers sorted by ascending entry

echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Phone Number</th></tr>";
foreach ($customers as $person) {
    echo "<tr>";
    foreach ($person as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</div>

<div class="section">
<h3>Ages Greater Than 60</h3>
<?php
foreach ($customers as $person) { // showing customers older than 60
    if ($person["Age"] > 60) {
        echo $person["First Name"] . " " . $person["Last Name"] . " (" . $person["Age"] . " years old)<br/>";
    }
}
?>
</div>

<div class="section">
<h3>In Array Check</h3>
<b>Array Checker to find if María exists.</b><br/>
<?php
$var = "María";
$first_names = array_column($customers, "First Name");
if (in_array($var, $first_names)) { // showing if a customer is  or not
    echo $var . " was a customer.";
} else {
    echo $var . " was not a customer.";
}
?>
</div>

</body>
</html>
