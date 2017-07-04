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
        if(isset($_REQUEST["book"]))
        {
            if(isset($_SESSION["cart"]))
            {
                array_push($_SESSION["cart"],$_REQUEST["book"] );
            }
            else
            {
                $_SESSION["cart"]=array($_REQUEST["book"]);
            }
            echo("<br/>".$_REQUEST["book"]." is added to cart<br/>");
            echo("There are ".count($_SESSION["cart"])." item(s) in the cart");

        }
    ?>

    
   
    <form>
        Select Book : <select name="book">
                        <option value="Inside XML">Inside XML</option>
                        <option value="Complete Refrence">Complete Refrence</option>
                        <option value="Head First Servlets">Head First Servlets</option>
                        <option value="C++ Primer">C++ Primer</option>
                     </select>  <br/>
        <input type="submit" value="Add To Cart"  />
         
    </form>
    <br/>
    <a href="http://localhost:8012/ShoppingApp/home.php"> Go Back To Home Page </a>   <br/>
    <a href="http://localhost:8012/ShoppingApp/end.php"> End Shopping </a> 
</body>
</html>
