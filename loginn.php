<?php
$email=@$_REQUEST['email'];
$password=@$_REQUEST['password'];
$server=mysqli_connect("localhost","root","","project");
$q="insert into user(email,password) VALUES('".$email."' , '".$password."' )";
$run=mysqli_query($server,$q)
?>

<html>
    <form  action="loginn.php" method="post">

        Email :  <input type="text" name="email"  > <br>
        Password:  <input type="text" name="password"  > <br>
        <!-- <input type="" name ="login_btn" values="login"> -->
<button>Login</button>
</form>