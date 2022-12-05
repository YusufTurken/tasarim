<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
</style>






<div class="album">
  <div class="container mt-4">

    <div class="mb-5">
      <h1 class="text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-device-ssd-fill" viewBox="0 0 16 16">
  <path d="M5 8V4h6v4H5Z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4Zm0 1.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm9 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM3.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm9.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM4.75 3h6.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-6.5A.75.75 0 0 1 4 8.25v-4.5A.75.75 0 0 1 4.75 3ZM5 12h6a1 1 0 0 1 1 1v2h-1v-2h-.75v2h-1v-2H8.5v2h-1v-2h-.75v2h-1v-2H5v2H4v-2a1 1 0 0 1 1-1Z"/>
</svg> SSD <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-device-ssd-fill" viewBox="0 0 16 16">
  <path d="M5 8V4h6v4H5Z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4Zm0 1.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm9 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM3.5 11a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm9.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM4.75 3h6.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-6.5A.75.75 0 0 1 4 8.25v-4.5A.75.75 0 0 1 4.75 3ZM5 12h6a1 1 0 0 1 1 1v2h-1v-2h-.75v2h-1v-2H8.5v2h-1v-2h-.75v2h-1v-2H5v2H4v-2a1 1 0 0 1 1-1Z"/>
</svg> 
      
      </h1>
    </div>



    <div class="row row-cols-md-4 g-5">

    <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE categorie = 'ssd'") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
        while($fetch_product = mysqli_fetch_assoc($select_product)){
    ?>


    <form method="post" action="">

      <div style="position: relative;" class="col mb-5">
      
        <div style="box-shadow: 0 0 8px rgba(5,5,5,.3);" class="card">
          <a href="product.php?id=<?= $fetch_product['id']; ?>">
          <img style="height: 280px; object-fit:scale-down;" name="product_img" class="bd-placeholder-img card-img-top img-responsive" src="<?= $fetch_product['img_url']; ?>">
          </a>
          <div style="height: 180px" class="card-body">
            <a href="product.php?id=<?= $fetch_product['id']; ?>" class="text-dark text-decoration-none">
            <h4 name="product_name" style="text-align: center"><b><?= $fetch_product['product_name']; ?></b></h4>
            </a>

            <div class="d-flex justify-content-between align-items-center">
              
            
            <div style="position: absolute; bottom: 15px" class="btn-group">

                
                <input type="submit" value="Sepete Ekle" name="add_to_cart" style="background-color: darkgreen; color:white" class="btn btn-outline-secondary addToCartBtn">
                  
        </input>
                <button name="product_price" type="button" style="background-color: green; color:white"
                  class="btn btn-sm btn-outline-secondary"><?= $fetch_product['price']; ?>$</button>
              </div>

              <a style="position: absolute; right: 15px; bottom: 18px; color: black;" class="a-altcizgiyok" href="index.php?page=9">
            
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
              </svg>
            
              </a>
            </div>
          </div>
        </div>
      </div>

      <input type="hidden" name="product_image" value="<?= $fetch_product['img_url']; ?>"></input>
      <input type="hidden" name="product_quantity" value="1"></input>
      <input type="hidden" name="product_name" value="<?= $fetch_product['product_name']; ?>"></input>
      <input type="hidden" name="product_price" value="<?= $fetch_product['price']; ?>" ></input>

      </form>
<?php
    };
  };
?>

  </div>
</div>