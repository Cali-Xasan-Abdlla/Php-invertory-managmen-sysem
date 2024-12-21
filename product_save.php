<?php
$con=mysqli_connect("localhost","root","","pos");
$pname=$_POST['pname'];
$qty=$_POST['qty'];
$cost=$_POST['cost'];
$price=$_POST['price'];

$sql=mysqli_query($con,"INSERT INTO product VALUES(null,'$pname','$qty','$cost','$price')");

if($sql){
    ?>
    <script>
        alert("Product waala xareeyay")
        window.location="product_view.php"
        </script>
        <?php
}
?>