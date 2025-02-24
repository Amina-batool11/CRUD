<?php

$id=$_GET['id'];

$connection=mysqli_connect("localhost","root","","project");
$query="DELETE FROM products where id='".$id."'";
$data=mysqli_query($connection,$query);

if($data)
{ 
  ?>
<script type= "text/javascript">
    alert("Data Deleted Successfully");
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

?>