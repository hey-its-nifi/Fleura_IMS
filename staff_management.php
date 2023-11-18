<?php 
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Staff management</title>
</head>
<body>
      <!--header section starts-->
    
      <header>
        <a href="home.html" class="logo"><img src="images/logo.png"> </a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="signup.html">my account</a>
        </nav>
    </header>
    
    <!--header section ends-->


    <!--content section starts-->
    
    <section class="add-new-employee">

    <div class="add-employee">
        <form action="add_new_employee.php" method="post">

        <!--If data inserted successfully, display success msg-->
            <?php
            if(isset($_SESSION['status'])){
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
            ?>

            <!--register a new employee-->
                <h2>Add new employee</h2>
                <p>Please enter the following details to add a new employee  </p>
                <table>
                    <tr>
                        <td>First Name</td>                   
                    </tr>
                    <tr>
                        <td><input type="text" name="fname"> </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>                    
                    </tr>
                    <tr>
                        <td><input type="text" name="lname"> </td>
                    </tr>
                    <tr>
                        <td>Address line 01</td>                   
                    </tr>
                    <tr>
                        <td><input type="text" name="addl1"> </td>
                    </tr>
                    <tr>
                        <td>Address line 02</td>                    
                    </tr>
                    <tr>
                        <td><input type="text" name="addl2"> </td>
                    </tr>
                    <tr>
                        <td>Address line 03</td>                    
                    </tr>
                    <tr>
                        <td><input type="text" name="addl3"> </td>
                    </tr>
                    <tr>
                        <td>Contact number</td>                    
                    </tr>
                    <tr>
                        <td><input type="text" name="cno"> </td>
                    </tr>
                    <tr>
                        <td>Designation</td>                    
                    </tr>
                    <tr>
                        <td>
                            <select name = "desi">
                            <?php 
                            $sql = "SELECT * FROM designation";
                            $res = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($res)){
                                echo "<option value= '".$row['d_id']."'>" .$row['d_name']. "</option>";

                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    
            </table>
            <br/>
            <input type="submit" value="ADD EMPLOYEE">
                
            </form>
    </div>


    </section>


    <!--content section ends-->


</body>
</html>