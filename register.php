
<html>

<form method="post" action="">

Product Name:
<br> <input type= "text" name = "myname" > <br>
Product Type:
<br> <input type= "text" name= "mytype" > <br>
Product Price: 
<br><input type="number" name= "myprice"><br>
Product Quantity: 
<br> <input type="number" name= "myquantity"><br>

<br> <input type="submit" name="save_btn" value="save" >
<br> <button><a href="add.php"> view </a></button>

</form>

</html>

<?php
if(isset($_POST['save_btn'])){
$p_name=$_POST['myname'];
$p_type=$_POST['mytype'];
$p_price=$_POST['myprice'];
$p_quantity=$_POST['myquantity'];
//echo $my_email."<br>". $my_password."<br>";


$connection=mysqli_connect("localhost","root","","project");
$qry="insert into products (name,type,price,quantity) values('".$p_name."','".$p_type."' ,'".$p_price."','".$p_quantity."')";
//$qry= "INSERT INTO `product` WHERE name='".$p_name."', type ='".$p_type."', price='".$p_price."',quantity='".$p_quantity."'";
$check= mysqli_query($connection,$qry);


if($check)
{ 
    ?>
<script type= "text/javascript">
    alert("Data Saved Successfully");
</script>
<?php
}
else 
{ 
    ?>
<script type= "text/javascript">
    alert("Something went wrong ");
</script>
<?php
}
}
?>