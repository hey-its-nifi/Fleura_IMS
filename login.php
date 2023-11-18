<?php
session_start();
require_once "config.php";


//store the username and pw in variables
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($conn, $sql);
        
    
            //if username and password matches, login is successful
            if (mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_assoc($res)){
                    if($row["username"] == $username && $row["password"] == $password){
                        echo "<script> alert('Logged in successfully!'); window.location.href = 'ims_home.php';</script>";
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['id'] = $row['user_id'];
                    }                
                }
            }


            else{
                echo "<script> alert('Invalid credentials! Please enter a valid username and password.'); window.location.href = 'stafflogin.php';</script>";
            }     
       
}

mysqli_close($conn);
?>

