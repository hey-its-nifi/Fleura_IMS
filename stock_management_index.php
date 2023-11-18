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
            <a href= "logout.php" class='logout_confirmation'>Logout</a>
        </nav>
    </header>
    
    <!--header section ends-->


    <!--content section starts-->   
    <section class="stock">
        <div class="view-stock">

                <!--get flower details from stock-->
                <h2>View flowers in the stock</h2>

                <p>Existing flowers in our shop at the moment</p>
                
                <?php
                $sql = "SELECT * FROM stock";
                $res = mysqli_query($conn, $sql);
                if(mysqli_num_rows($res)>0){
                   
                    //start of the table
                    echo "<table><tr>
                            <th>Stock ID</th>
                            <th>Flower Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Expiry Date</th>
                            <th>Restock Date</th>
                            <th>Status</th>
                            <th colspan=2>Operations</th>
                           </tr>";

                    //output each row of the stock table
                    while($row = mysqli_fetch_assoc($res)){
                      
                        echo "<tr>
                            <td> ".$row["stock_id"]." </td>
                            <td> ".$row["flower_name"]." </td>
                            <td> ".$row["qty"]." </td>
                            <td> ".$row["unit_price"]." </td>
                            <td> ".$row["exp_date"]." </td>
                            <td> ".$row["restock_date"]." </td>";

                            //checking for restock level; assume that restock level should be maintained above 25 for all flowers
                            if($row["qty"]<25){
                                echo "<td>bad</td>";
                            } else {
                                echo "<td>good</td>";
                            }

                            //operations to manipulate the stock
                            echo "<td><a href='stock_update_interface.php?stockid={$row['stock_id']}'><img src= 'images/edit.png'></a> </td>
                            <td><a href='stock_delete.php?stock_id={$row['stock_id']}' class='confirmation'><img src= 'images/delete.png'></a> </td> </tr>";
                    }                    

                    echo "</table>";

                } else {
                    echo "<script> alert('No records in the database!'); </script>";
                }

                mysqli_close($conn);            

                ?>
                <br/>                
          
        </div>
    </section>
    <!--content section ends-->




<!--Javascript validation starts-->  
<script>
    //delete confirmation inorder to delete a stock item
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure that you want to delete the selected item?')) e.preventDefault();
    };

    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }


    //logout confirmation
    var y = document.getElementsByClassName('logout_confirmation');
    var confirmIt = function (e) {
        if (!confirm('Do you want to logout?')) e.preventDefault();
    };

    for (var i = 0, l = y.length; i < l; i++) {
        y[i].addEventListener('click', confirmIt, false);
    }
</script>
<!--Javascript validation ends-->  


</body>
</html>