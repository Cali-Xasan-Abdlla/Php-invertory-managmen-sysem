<?php
require("header.php")
?>

<div class="form">
   <form action="product_save.php" method="post">
    product Nme
    <input type="text" name="pname" class="text" placeholder="Enter product Name">

     product Quantity
    <input type="text" name="qty" class="text" placeholder="Enter product Quantity">

     product Cost
    <input type="text" name="cost" class="text" placeholder="Enter product Cost">

     product Price
    <input type="text" name="price" class="text" placeholder="Enter product Price">

    <input type="submit" value="save product" class="save_btn">
</div>