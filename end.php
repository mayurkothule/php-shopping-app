
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




?>