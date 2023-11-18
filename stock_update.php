<?php
session_start();
require_once "config.php";


//Update the flower details according to the selected flower (the ID has been sent via URL)
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $flwrname = $_POST['flwrname'];
    $qty = $_POST['qty'];
    $uprice = $_POST['uprice'];
    $expdate = $_POST['expdate'];
    $restkdate = $_POST['restkdate'];
    $stkid = $_POST['stkid'];
    
    $sql = "UPDATE stock SET flower_name = '$flwrname', exp_date = '$expdate', qty = '$qty', restock_date = '$restkdate', unit_price = $uprice WHERE stock_id = '$stkid'";

    $res = mysqli_query($conn, $sql);
        
    if($res){
        echo "<script>alert('Flower details has been updated successfully!');
        window.location.href = 'stock_management_index.php';
        </script>";
    } else {
        echo "An error has occured: " .$sql. "<br>" .mysqli_error($conn);
    }
}

mysqli_close($conn);
?>