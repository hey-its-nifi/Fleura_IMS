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
    <title>Stock management</title>
</head>

<body>
      <!--header section starts-->
    
    <header>
        <a href="home.html" class="logo"><img src="images/logo.png"> </a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="#"><?php echo $_SESSION['username'];?></a>
            <a href= "logout.php">Logout</a>
        </nav>
    </header>
    
    <!--header section ends-->


    <!--content section starts-->   
    <section class="add-new-flower">
        <div class="add-flower">

            <!--add flowers to stock-->
            <form action="insert_flower.php" method="post">

            <!--If data inserted successfully, display success msg-->
                <?php
                if(isset($_SESSION['status'])){
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
                ?>

                <!--get flower details from user-->
                <h2>Add flower details into the stock</h2>
                    <p>Please enter the following details about the flowers recieved</p>
                    <table>
                        <tr>
                            <td>Flower name</td>                   
                        </tr>
                        <tr>
                            <td><input type="text" name="flwrname" placeholder="ex: Rose"> </td>
                        </tr>
                        <tr>
                            <td>Quantity</td>                   
                        </tr>
                        <tr>
                            <td><input type="text" name="qty"> </td>
                        </tr>
                        <tr>
                            <td>Set expiry date</td>                    
                        </tr>
                        <tr>
                            <td><input type="text" name="expdate" placeholder="yyyy-mm-dd"> </td>
                        </tr>                   
                        <tr>
                            <td>Restock date</td>                    
                        </tr>
                        <tr>
                            <td><input type="text" name="restkdate" placeholder="yyyy-mm-dd"> </td>
                        </tr>
                        <tr>
                            <td>Unit price (lkr)</td>                    
                        </tr>
                        <tr>
                            <td><input type="text" name="uprice"> </td>
                        </tr>             
                </table>
                <br/>
                <input type="submit" value="ADD NEW FLOWER">
                    
            </form>
        </div>
    </section>
    <!--content section ends-->


</body>
</html>