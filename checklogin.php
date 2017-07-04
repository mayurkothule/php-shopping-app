<?php       session_start();       ?>


<?php
   $uid=$_REQUEST["uid"];
   $pwd=$_REQUEST["pwd"];
   if(strcmp($uid,"bakul")==0 && strcmp($pwd,"bakul@123")==0)
   {
       //echo("<h2> Login is successful </h2>");

       setcookie("loginerror","",time()-1);
       $_SESSION["uid"]=$uid;		
       header('Location: home.php');
   }    
   else
   { 
	//echo("<h2> Login is failed </h2>");
	setcookie("loginerror","Wrong ID/password");
        header('Location: login.php');
   }
?>





