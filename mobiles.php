-----------------------------

logout.php





<?php    session_start();     ?>
<?php
 
    session_destroy();
    echo("<br/>U r successfully logged out <br/>");
    echo("<br/> <a href='http://localhost:8012/ShoppingApp/login.php'> Login Again? </a>");

?>


---------------------------------
mobile.php

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
        include('header.php');

    ?>
    <?php
        if(isset($_REQUEST["mobile"]))
        {
            if(isset($_SESSION["cart"]))
            {
                array_push($_SESSION["cart"],$_REQUEST["mobile"] );
            }
            else
            {
                $_SESSION["cart"]=array($_REQUEST["mobile"]);
            }
            echo("<br/>".$_REQUEST["mobile"]." is added to cart<br/>");
            echo("There are ".count($_SESSION["cart"])." item(s) in the cart");

        }
    ?>
    
    <form>
        Select Book : <select name="mobile">
                        <option value="Samsung Galaxy">Samsung Galaxy</option>
                        <option value="HTC Desire">HTC Desire</option>
                        <option value="Micromax Canvas">Micromax Canvas</option>
                        <option value="Lenovo 800">Lenovo 800</option>
                     </select>  <br/>
        <input type="submit" value="Add To Cart"  />
         
    </form>
    <br/>
    <a href="http://localhost:8012/ShoppingApp/home.php"> Go Back To Home Page </a>   <br/>
    <a href="http://localhost:8012/ShoppingApp/end.php"> End Shopping </a> 
</body>
</html>

