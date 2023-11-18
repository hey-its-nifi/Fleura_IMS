<?php
session_start();
require_once "config.php";

$stkid = $_GET['stock_id'];

    $sql = "DELETE FROM stock WHERE stock_id = '$stkid'";
    $res = mysqli_query($conn, $sql);
        
    if($res){
        // $_SESSION['status'] = "Data has been deleted successfully!";
        echo "<script>alert('Data has been deleted successfully!');
        window.location.href = 'stock_management_index.php';
        </script>";
       // header("Location: stock_management_index.php");
    } else {
        echo "An error has occured: " .$sql. "<br>" .mysqli_error($conn);
    }

mysqli_close($conn);
?>