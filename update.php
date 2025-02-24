
<?php

$id=$_GET['id'];

$connection=mysqli_connect("localhost","root","","project");
$select="SELECT * FROM products WHERE id='$id'";
$data=mysqli_query($connection,$select);
$row=mysqli_fetch_array($data);
?>

<div>
<form action=""   method="POST">
    <input value=<?php echo $row['name'] ?> type="text"  name="myname" placeholder="Enter Name" > <br> </br>
    <input value=<?php echo $row['type'] ?> type="text"  name="mytype" placeholder="Enter Type" > <br> </br>
    <input value=<?php echo $row['price'] ?> type="number"  name="myprice" placeholder="Enter Price" > <br> </br>
    <input value=<?php echo $row['quantity'] ?> type="text"  name="myquantity" placeholder="Enter Quantity" > <br> </br>
    <input type="submit"  name="update_btn" value="update" ><br> </br>
    <button><a href="register.php"> Back</a></button>
</form>

</div>


<?php
if(isset($_POST['update_btn']))
{ 
    $p_name=$_POST['myname'];
    $p_type=$_POST['mytype'];
    $p_price=$_POST['myprice'];
    $p_quantity=$_POST['myquantity'];
$query=" update products set name ='".$p_name."' , type ='".$p_type."' , price= '".$p_price."', quantity = '".$p_quantity."'where id='".$id."'";

$data=mysqli_query($connection,$query);

if($data)
{ 
  ?>
<script type= "text/javascript">
    alert("Data Update Successfully");
    window.open("http://localhost/haproject/product/add.php","_self");
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