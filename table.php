<?php
include("header.inc");
?>

    <style>
        table,th,td{
            border: 1px solid black;
        }
        h1{
            font-weight: bold;
            font-family: "Courier New";

        }
    </style>

    <title>Inventory</title>
    <h1 align="center">Inventory</h1>
</head>

<body>
<?php
require_once('db_connect.php');

$query = "SELECT * FROM inventory";
$result = mysqli_query($dbc,$query);

if($result){

    echo '<table align="center" cellspacing="5" cellpadding="8">
<tr><td align="left"><b>Item</b></td>
<td align="left"><b>Description</b></td>
<td align="left"><b>Cost</b></td>
<td align="left"><b>Price</b></td>
<td align="left"><b>Supplier Name</b></td>
<td align="left"><b>Quantity</b></td>';

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
echo "<td>" . $row['item'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" .'$'. $row['cost'] . "</td>";
echo "<td>" .'$'. $row['price'] . "</td>";
echo "<td>" . $row['supplier'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
     echo  "</tr>";
    }
}
?>

<?php
include("footer.inc");
?>





