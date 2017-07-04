    
--------------------------------
end.php

<?php
        include('header.php');

    ?>
<?php
   if(isset($_SESSION["cart"]))
   {
        echo("Selected Items </br/>");
        echo("<ul>");
    	foreach($_SESSION["cart"] as $item) 
	     echo("<li>".$item."</li>");	
        echo("</ul>"); 

        echo("<br/> <a href='http://localhost:8012/ShoppingApp/confirm.php'> Confirm Cart Items </a>   <br/>");	  
   }
   else
   {
       echo("<h3> No items are selected </h3>");
       echo("<br/> <a href='http://localhost:8012/ShoppingApp/home.php'> Go Back To Home Page </a>   <br/>");
   }		

------------------------------------
heder.php


<?php         session_start();          ?>
    <?php
        if(isset($_SESSION["uid"]))
            echo("<h1> Welcome ".$_SESSION["uid"]."</h1>");


    ?>
---------------------------------------------
home.php

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
    <a href="http://localhost:8012/ShoppingApp/books.php"> BOOKS SECTION  </a>  <br/>
    <a href="http://localhost:8012/ShoppingApp/mobiles.php"> MOBILES SECTION  </a>  <br/>
    <a href="#"> XXXX SECTION  </a>  <br/>
    <a href="#"> YYYY SECTION  </a>  <br/>
 
    <a href="http://localhost:8012/ShoppingApp/end.php"> END SHOPPING </a> 
</body>
</html>
