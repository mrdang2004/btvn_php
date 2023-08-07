<?php
     setcookie("user_name","Guru99",time()+ 60,'/');|
     echo 'the cookie has been set for 60 seconds'."</br>";
     echo $_COOKIE['user_name'];
?>