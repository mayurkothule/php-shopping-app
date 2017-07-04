<?php    session_start();     ?>
<?php
 
    session_destroy();
    echo("<br/>U r successfully logged out <br/>");
    echo("<br/> <a href='http://localhost:8012/ShoppingApp/login.php'> Login Again? </a>");

?>