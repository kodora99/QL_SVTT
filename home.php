<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// include 'components/wishlist_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   

   <style type="text/css">
      .home-bg{
         background:url(../images/bannermau.jfif) no-repeat;
       background-size: cover;
         background-position: center;
      }

       .home-slider .swiper-wrapper .swiper-slide .content span{
         color: #FF3030;
         text-decoration: underline;
      }
     .home-slider .swiper-wrapper .swiper-slide .content h3{
         color: #333;
      }
  
      /*-------*/
      #iconflooter{
         width: 100%;
         align-items: center;
      }
      
      #iconflooter .containerss .client {
         align-items: center;
      }

      .client{
         display: flex;
         flex-wrap: wrap;

        
      }

    
   </style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/lap.png" alt="">
         </div>
         <div class="content">
           <!--  <span >Ưu đãi trả góp 0đ</span> -->
            <h3 >Lap Top</h3>
            <a href="shop.php" class="btn">Mua ngay</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/ghe.png" alt="">
         </div>
         <div class="content">
            <!-- <span>Ưu đãi trả góp 0đ</span> -->
            <h3>Ghế Gaming</h3>
            <a href="shop.php" class="btn">Mua ngay</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/pc.png" alt="">
         </div>
         <div class="content">
            <!-- <span>Ưu đãi trả góp 0đ</span> -->
            <h3>Bộ Pc</h3>
            <a href="shop.php" class="btn">Mua ngay</a>
         </div>
      </div>
   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">SẢN PHẨM</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Lap Top </h3>
   </a>

   <a href="category.php?category=pc" class="swiper-slide slide">
      <img src="images/pcicon.png" alt="">
      <h3>PC </h3>
   </a>

   <a href="category.php?category=ghe" class="swiper-slide slide">
      <img src="images/ghegamingicon.png" alt="">
      <h3> Ghế gaming</h3>
   </a>


   
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!-- ------------------- -->

<section class="category">

   <h1 class="heading">PHỤ KIỆN</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=ban" class="swiper-slide slide">
      <img src="images/banphimicon.png" alt="">
      <h3>Bàn Phím </h3>
   </a>

   <a href="category.php?category=chuot" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3> Chuột</h3>
   </a>

   <a href="category.php?category=tai" class="swiper-slide slide">
      <img src="images/taingheicon.png" alt="">
      <h3> Tai Nghe</h3>
   </a>
   <a href="category.php?category=loa" class="swiper-slide slide">
      <img src="images/loaicon.png" alt="">
      <h3> Loa</h3>
   </a>
   <a href="category.php?category=lot" class="swiper-slide slide">
      <img src="images/lotchuoticon.png" alt="">
      <h3> lót chuột </h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<section class="home-products">

   <h1 class="heading">sản phẩm mới nhất</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <!-- <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button> -->
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" >
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span></span><?= currency_fomat($fetch_product['price']); ?><span> </span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      </a>
      <input type="submit" value="thêm vào giỏ hàng" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Không có sản phẩm nào!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<?php include 'iconflooter.php'; ?>





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
    autoplay: {
   delay: 5000,
 },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   autoplay: {
   delay: 5000,
 },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   autoplay: {
   delay: 5000,
 },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>