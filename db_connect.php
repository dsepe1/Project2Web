<?php
$dbc = mysqli_connect('localhost','ngarcia7','ngarcia7','ngarcia7');

if(!dbc){
    die('Could not connect: ' . mysqli_connect_error());
}

mysql_close($dbc);
?>

