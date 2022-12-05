<?php
    session_start(); ob_start();
    include 'ayarlar/db.php';
    include 'ayarlar/main_db.php';
    include 'partials/head.php';
    include 'ayarlar/sayfalar.php';

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    

    $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id") or die('query failed');
    if(mysqli_num_rows($select_product) > 0){
    while($fetch_product = mysqli_fetch_assoc($select_product)){
    
?>

    <div style="box-shadow: 0 0 8px rgba(5,5,5,.3);" class="container">
        <form method="post" action="">

        <div class="row">
            <div class="text-center col-md-5 mt-5 mb-5">
                <img style="max-width: 500px; margin-left: 5%;" name="product_img" class="bd-placeholder-img img-responsive" src="<?= $fetch_product['img_url']; ?>">
            </div>
            
            <div class="col-md-7">
            <h1 name="product_name" style="text-align: center; margin-top: 3%; "><b><?= $fetch_product['product_name']; ?></b></h1>

            <h3 class="mt-4" style="text-align: center;"><u>Açıklama</u></h3>
            <p name="detail" style="text-align: center; margin-left: 5%; margin-right: 5%;" class="mt-4 mb-4"><?= $fetch_product['detail']; ?></p>
            <h3 name="product_price" style="color: darkgreen; text-align: center;"><b><?= $fetch_product['price']; ?>$</b></h3>
            <input type="submit" value="Sepete Ekle" name="add_to_cart" style="display: block; margin: auto; width: 250px; background-color: darkgreen; color:white" class="btn btn-lg addToCartBtn mb-3"></input>
            
            </div>
            
        </div>
        <input type="hidden" name="product_image" value="<?= $fetch_product['img_url']; ?>"></input>
        <input type="hidden" name="product_quantity" value="1"></input>
        <input type="hidden" name="product_name" value="<?= $fetch_product['product_name']; ?>"></input>
        <input type="hidden" name="product_price" value="<?= $fetch_product['price']; ?>" ></input>

    </form>
    
    </div>
    
<?php
    }
  }
    }else{
        header('location:index.php');
    }
?>
<br><br>

<h1 class="mb-4 text-center"><u>Yorumlar</u></h1>

<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $count = 0;
    
    $select_yorum = mysqli_query($conn, "SELECT * FROM `comments` WHERE product_id = $id") or die('query failed');
    if(mysqli_num_rows($select_yorum) > 0){
    while($fetch_yorum = mysqli_fetch_assoc($select_yorum)){
    $count++;
?>

<div style="box-shadow: 0 0 8px rgba(5,5,5,.3);" class="container mt-4">
<div class="row">
<p class="mt-3 mb-3" style="text-align: left; margin-left: 2%;"><u><b><big><?= $fetch_yorum['comment_owner']; ?></b></big></u></p>

<p class="mt-2 mb-4" style="text-align: left; margin-left: 2%; margin-right: 2%;"><?= $fetch_yorum['comment']; ?></p>
</div>  
</div>

<?php
}
  }
}
?>
<div class="container">
    <?php
    if($count==0){
        echo '<div style="text-align: center" class="alert alert-danger">Bu Ürüne Henüz Yorum Yapılmamıştır.</div>';
    }
    ?>
<hr class="mt-5">
<div class="input-group mt-5">
        <span class="input-group-text">Yorum Ekle</span>
        <textarea class="form-control" aria-label="mesaj" disabled></textarea>
    </div>

    <div class="text-center"><input type="submit" class="btn btn-warning mt-4 btn-lg" value="Yayınla" disabled><p class="text-danger mt-3">Sadece Ürünü Satın Almış Olanlar Yorum Yapabilir!</p></div>
    </div>
<?php
    include 'partials/foot.php';
?>