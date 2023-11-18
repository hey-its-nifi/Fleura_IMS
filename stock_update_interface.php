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
    <title>Stock Management</title>
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
    
    <section class="update-stock">

    <div class="update-stock-items">
        <form action="stock_update.php" method="post">        
            <?php
            
            //store the stockid in a variable to be used in loading the relevant details
            $stkid = $_GET["stockid"];

            $sql = "SELECT * FROM stock WHERE stock_id='$stkid'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            
            $flwrname = $row["flower_name"];
            $expdate = $row["exp_date"];
            $qty = $row["qty"];
            $restkdate = $row["restock_date"];
            $uprice = $row["unit_price"];
 
            ?>

            <!--load the selected flower's details-->
                <h2>Edit flower details</h2>
                <table>             
                    <tr>
                        <td>Flower name</td>   
                        <td><input type="text" name="flwrname" value= "<?php echo $flwrname ?>"> </td>        
                    </tr>
                   
                    <tr>
                        <td>Quantity</td>   
                        <td><input type="text" name="qty" value= "<?php echo $qty ?>"> </td>                 
                    </tr>
                   
                    <tr>
                        <td>Unit price</td>  
                        <td><input type="text" name="uprice" value= "<?php echo $uprice ?>"> </td>                 
                    </tr>
                   
                    <tr>
                        <td>Expiry date</td>  
                        <td><input type="date" name="expdate" value= "<?php echo $expdate ?>"> </td>                  
                    </tr>
                   
                    <tr>
                        <td>Restock date</td>   
                        <td><input type="date" name="restkdate" value= "<?php echo $restkdate ?>"> </td>                 
                    </tr>

                    <tr> 
                        <td><input type="hidden" name="stkid" value= "<?php echo $stkid ?>"> </td>                 
                    </tr>
                   
            </table>
            <br/>
            <input type="submit" value="UPDATE STOCK">
                
        </form>
    </div>


    </section>
    <!--content section ends-->


</body>
</html>