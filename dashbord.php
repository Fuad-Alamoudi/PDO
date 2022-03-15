<?php
  include "./includes/init.php";
  require_once 'template/header.php'?>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">

                        <div class="text-center">
                                 <button class="my-5 btn btn-primary" data-toggle="modal" data-target="#addProductModal">Craete Product</button>
                        </div>
                           
                            <table style="margin-top: 10px;" class="table user-list">
                                <thead>
                                    <tr>
                                    <th><span>Product Name</span></th>
                                    <th><span>Pric</span></th>
                                    <th class="text-center"><span>Description</span></th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                      $products = new Item();
                                      if($products->getPost()) {
                                      foreach($products->getPost() as$product) { ?>   
                                    <tr>
                                        <td>
                                            <img src="img/ph.jpg" width="100">
                                            <span class="user-subhead"><?= $product['name']?></span>
                                        </td>
                                        <td>$<?= $product['price']?></td>
                                        <td class="text-center">
                                            <span class="label label-default"><?= $product['description']?></span>
                                        </td>
                                
                                        <td style="width: 20%;">
                                            <a href='edit.php' class="btn btn-warning">Edit</a>
                                            <a href=''  class="btn btn-danger">Delet</a>
                                        </td>
                                    </tr>

                                    <?php  }
                                  }  else {
                                    echo "<p class='mt-5 mx-auto'>Post is empty...</p>";
                                  }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- form input -->
        <form method="POST" action="productProcess.php">
          <div class="form-group">
            <label>Title: </label>
            <input class="form-control" name="product-title" type="text" required>
          </div>
          <div class="form-group">
            <label>description: </label>
            <textarea class="form-control"  name="product-content" required></textarea>
          </div>
          <div class="form-group">
            <label>price: </label>
            <input class="form-control" name="product-price" type="text" required>
          </div>
          <div class="form-group">
            <label>Image: </label>
            <input class="form-control" type="file" id="formFile"  placeholder="Image" name="image">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Add post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    
    <?php  require_once 'template/footer.php'?>
