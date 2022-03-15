<?php
  require_once "./template/header.php";
  require_once "./includes/init.php";
  $products = new Item();
  $product = $products->editProduct($_GET['id']);
  $id =$product['id'];
  $title =$product['name'];
  $body =$product['description'];
  $price =$product['price'];

?>

    <div class="add-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-lg-6 offset-sm-1 offset-lg-3">        
            <div class="form-bg">
              <h2>Edit Product</h2>
              <form method="POST" action="productProcess?send=update&id=<?= $id ?>" >
                <div class="form-group">
                <label>Title: </label>
                 <input class="form-control" name="product-title" type="text" value="<?= $title ?>" required>
   
              </div>
                <div class="form-group">
                <label>price: </label>
                <input class="form-control" name="product-price" type="text" value="<?= $price ?>" required>
      
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile"  placeholder="Image" name="image">
                  </div>
                <div class="form-group">
                <label>Description: </label>
          <textarea class="form-control"  name="product-content" rows="8" required><?= $body ?></textarea>
        
              </div>
                <div class="form-group">
                  <button class="add-btn">Update Item</button>
                </div>
                
              </form>       
          </div>
        </div>
      </div>
    </div>
    <?php  require_once 'template/footer.php'?>
