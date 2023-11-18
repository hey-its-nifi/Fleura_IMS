<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=M, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>My account</title>
</head>
<body> 

     <!--header section starts-->
    
     <header>
        <a href="home.html" class="logo"><img src="images/logo.png"> </a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="stafflogin.html">staff login</a>
            <a href="/signup.html">customer</a>
        </nav>
    </header>
    
    <!--header section ends-->

 
    <div class="staff-login">
        <form name= "loginform" action="login.php" method="post">
            <h2>LOGIN</h2>

            <table>
                <tr>
                    <td>Username</td>                   
                </tr>
                <tr>
                    <td><input type="text" name="username" placeholder="Username" required> </td>
                </tr>
                <tr>
                    <td>Password</td>                    
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Password" required> </td>
                </tr>
          </table>
          <br/>
          <input type="submit" value="LOGIN">
            
        </form>
    </div>

</body>
</html>