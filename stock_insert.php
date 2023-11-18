<?php
session_start();
require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $flwrname = $_POST['flwrname'];
    $qty = $_POST['qty'];
    $expdate = $_POST['expdate'];
    $restkdate = $_POST['restkdate'];
    $uprice = $_POST['uprice'];

    
    $sql = "INSERT INTO stock(flower_name, exp_date, qty, restock_date, unit_price) VALUES ('$flwrname', '$expdate', '$qty', '$restkdate', '$uprice')";

    $res = mysqli_query($conn, $sql);
        
    if($res){
        $_SESSION['status'] = "Data has been inserted successfully!";
        header("Location: stock_management_index.php");
    } else {
        echo "An error has occured: " .$sql. "<br>" .mysqli_error($conn);
    }
}

mysqli_close($conn);
?>