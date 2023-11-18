<?php

$conn = mysqli_connect("localhost", "root", "", "fleura_ims");
if(!$conn){
    die("Couldn't connect" .mysql_error());
}
/*else{
    echo "Database connection has been established successfully!";    
}*/

?>