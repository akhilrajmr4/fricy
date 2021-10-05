<?php
include 'database.php'

if(isset($_POST['piza']))
{
    $rate = 100;
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $sql = mysqli_query($conn, "INSERT INTO cal(name,val) VALUES ('piza') ")
}
?>