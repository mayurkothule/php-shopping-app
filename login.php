<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <script>
        function validate(uid,pwd)
        {
            if(uid.length==0)
            {
                alert("User ID can not be blank");
                document.f1.uid.focus();
                return;
            }

            if (pwd.length < 8 || pwd.length > 14) {
                alert("Wrong password length ");
                document.f1.pwd.value = "";
                document.f1.pwd.focus();
                return;
            }

            alert("data getting submitted.....");
            document.f1.submit();

        }
    </script>

</head>
<body>
    <?php
         if(isset($_COOKIE["loginerror"]))
             echo("<h4>".$_COOKIE["loginerror"]."</h4>"); 
    ?>
    
    <form action="http://localhost:8012/ShoppingApp/checklogin.php" method="post" name="f1">
        Id : <input type="text" name="uid" /> <br/>
        Password : <input type="password" name="pwd" /> <br/>
        <input type="button" value="LOGIN" onclick="validate(uid.value,pwd.value);" /> 
    </form>
</body>
</html>