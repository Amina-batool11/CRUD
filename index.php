<?php   include 'add.php';
?>
<html>
    <head>
        <title></title>
</head>
<body>
    <div>
<!-- <form method="post" action="dbcon.php"> -->
<form  action="" method="post">

Product name:  <br> <input type="text" name="myname"  > <br>
Product Type:  <br> <input type="text" name="mytype"  > <br>
Product Price: <br> <input type="text" name="myprice"  > <br>
Product quantity:  <br> <input type="text" name="myquantity"  > <br>  
Product Image:  <br> <input type="text" name="myimg"  > <br>

<input type="submit" name ="save_btn" values="save">
  <button><a href="view.php">View</a></button> 
</form>
</div>
<?php
if (isset($_POST['save_btn'])) 
{
    $p_name=$_POST['myname'];
    $p_type=$_POST['mytype'];
    $p_price=$_POST['myprice'];  
    $p_quantity=$_POST['myquantity'];
    $p_img=$_POST['myimg'];

    
    $query="INSERT INTO product(name,type,price,quantity,img)
     VALUES('".$p_name."', '".$p_type."', '".$p_price."','".$p_quantity."', '".$p_img."')";
     $data=mysqli_query($connection,$query);
     if($data){
        ?>
        <script type="text/javascript" >
            alert ("Data Save Successfully");
        </script>
      <?php
     }
    else{
        ?>
        <script type="text/javascript" >
            alert ("Please Try Again");
        </script>
<?php
 
    }
}
     ?>

</body>
</html>
