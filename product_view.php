<?php
$con=mysqli_connect("localhost","root","","pos");
include("header.php")
?>

<!-- <div class="form" style="margin-left:5%;margin-right:5%"> -->
    <table>
        <tr>
            <td>NO#</td>
            <td>product</td>
            <td>Quantity</td>
            <td>cost</td>
            <td>price</td>
            <td>Edit</td>
            <td>Remove</td>
   </tr>
<?php
$q=mysqli_query($con,"SELECT * FROM product");
while($daa=mysqli_fetch_array($q)){
    echo"<tr>";
    echo"<td>".$daa['pid']."</td>";
    echo"<td>".$daa['name']."</td>";
    echo"<td>".$daa['qty']."</td>";
    echo"<td>".$daa['cost']."</td>";
    echo"<td>".$daa['price']."</td>";
    ?>
    <td><a href="product_update.php?id=<?php echo $data['pid'];?>"class="up">Edit</a></td>
    <td><a href="product_delete.php?id=<?php echo $data['pid'];?>"class="up">Delete</a></td>
 <?php
}
?>
</div>           