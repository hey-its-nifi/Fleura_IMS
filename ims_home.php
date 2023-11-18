<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="style.css" />   
    <title>FLEURA Inventory Management System</title>
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



    <!--main modules section starts-->
    
    <section class="main-modules">  
        <div class="module">
            <a href = "staff_management.php">staff management</a>
        </div>
         <div class="module"><a href = "stock_management_index.php">stock management</a></div>
         <div class="module">customer management</div>
         <div class="module">supplier management</div>
         <div class="module">order management</div>
       
    </section>
    <!--main modules section ends-->
    
</body>
</html>

<?php
}
else {
    header("Location: stafflogin.php");
    exit();
}
?>