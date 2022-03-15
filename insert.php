<?php  require_once 'template/header.php'?>

    <div class="add-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-lg-6 offset-sm-1 offset-lg-3">        
            <div class="form-bg">
              <h2>Add Product</h2>
              <form>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Name Product" name="name">
                </div>
                <div class="form-group">
                  <input type="text" name="Full Name" class="form-control" placeholder="Price" name="price">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile"  placeholder="Image" name="image">
                  </div>
                <div class="form-group">
                  <input type="text" name="Username" class="form-control" placeholder="Description" name="Description">
                </div>
                <div class="form-group">
                  <button class="add-btn">Add Item</button>
                </div>
                
              </form>       
          </div>
        </div>
      </div>
    </div>
    <?php  require_once 'template/footer.php'?>
