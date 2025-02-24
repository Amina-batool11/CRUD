<html>
<head>
   <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div>
        <?php
        if (isset($_POST['create'])){
            echo 'User Submitted';
        }
        ?>
</div>
   <div class="registration-form">
    <h1>Registration Form</h1>
    <form action="#" method="post">
        <p>Full Name:</p>
        <input type="text" name="fullname" placeholder="Full Name"  > 
        
        <p>Email:</p>
        <input type="text" name="email" placeholder="Email"  > 

        <p>Phone Number:</p>
        <input type="text" name="phonenumber" placeholder="Phone Number"  > 

        <p>Password:</p>
        <input type="text" name="password" placeholder="Password"  > <br>
        <button type="submit">Registration</button>
    </form>
   </div>

</body>
</html>