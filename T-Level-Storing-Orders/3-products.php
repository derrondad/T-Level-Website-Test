<!DOCTYPE html>
<html>
   <head>
      <title>Products Page Demo</title>
      <link rel="stylesheet" href="3-products.css"/>
      <script src="5-cart.js"></script>
   </head>
   <body>
      <!-- (A) PRODUCTS -->
      <div id="products">
         <?php
            // (A1) GET ALL PRODUCTS
            require "1-database.php";
            $products = $DB->fetchAll("SELECT * FROM `products`");
            // (A2) PRODUCTS LIST
            foreach ($products as $p) { ?>
         <div class="pCell">
            <div class="pTxt">
               <div class="pName"><?=$p["name"]?></div>
               <div class="pPrice">£<?=$p["price"]?></div>
            </div>
            <img class="pImg" src="images/<?=$p["image"]?>"/>
            <button class="pAdd" onclick="cart.add(<?=$p["pid"]?>)">
            Add To Cart
            </button>
         </div>
         <?php } ?>
      </div>
      <!-- (B) CURRENT CART -->
      <div id="cart"></div>
   </body>
</html>