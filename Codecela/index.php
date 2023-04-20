<?php
include 'header.php';
require_once 'core/init.php';
$sql="SELECT * FROM tbl_products WHERE featured=1";
$featured=$db->query($sql);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>CodeSela</title>
 </head>
 <body>
   <div class="col-md-2">

   </div>
   <div class="col-md-8">
     <div class="row">
       <h2 class="text-center">Top Projects</h2>
       <?php
       while ($product = mysqli_fetch_assoc($featured)):  ?>
       <div class="col-md-3" id="productbox">
         <h4 style="font-size:15px;overflow:auto;height:17px;"><?=$product['title']; ?></h4>
         <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images">
         <p class="list-price text-danger" style="margin-top:6px;"><s>$<?=$product['listprice']; ?></s></p>
         <p class="price text-warning">$<?=$product['price']; ?></p>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#a<?=$product['id']; ?>"> <i class="fa fa-eye" style="color:white;margin-right:4px;"></i>Details</button>
         <?php include 'levis_jeans_modal.php'; ?>

       </div>
     <?php endwhile; ?>
     </div>

     &nbsp;
     <footer class="text-center" id="footer">&copy; Copyright 2021. Made with <span style="color:orangered;font-size:20px;">&hearts;</span> by CodeSela</footer>
   </div>

 </body>
