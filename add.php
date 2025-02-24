
<?php

$connection=mysqli_connect("localhost","root","","project");

?>
  <button><a href="register.php"> Home </a></button>

<table border ="1px" cellpadding="20px" cellspacing="0">
<tr>
    <th> Name </th>
    <th> Type </th>
    <th> Price </th>   
    <th> Quantity </th>     
    <th colspan="2" >  Actions </th>

</tr>
<?php
$query = "SELECT * FROM products";
$data=mysqli_query($connection,$query);
$result=mysqli_num_rows($data);
 if($result) {
while($rows=mysqli_fetch_array($data))
{ 
?>
<tr> 
<td> <?php echo $rows['name'] ?> </td> 
<td> <?php echo $rows['type'] ?> </td> 
<td> <?php echo $rows['price'] ?> </td> 
<td> <?php echo $rows['quantity'] ?> </td> 

<td> <a href="update.php?id=<?php echo $rows['id'] ?>"> Edit </a> </td> 

<td> <a onclick="return confirm('Are You Sure , You Want to delete data?')" href="delete.php?id=<?php echo $rows['id'] ?>"> Delete </a> </td> 
</tr>

<?php

}



 }

?>


</table>
