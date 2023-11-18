<?php
session_start();
require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $addl1 = $_POST['addl1'];
    $addl2 = $_POST['addl2'];
    $addl3 = $_POST['addl3'];
    $contact = $_POST['cno'];
    $desi = $_POST['desi'];

    
    $sql = "INSERT INTO employee (fname, lname, add_l1, add_l2, add_l3, tel, d_id) VALUES ('$fname', '$lname', '$addl1', '$addl2', '$addl3', '$contact', '$desi')";

    $res = mysqli_query($conn, $sql);
        
    if($res){
        $_SESSION['status'] = "Data has been inserted successfully!";
        header("Location: staff_management.php");
    } else {
        echo "An error has occured: " .$sql. "<br>" .mysqli_error($conn);
    }
}

mysqli_close($conn);
?>