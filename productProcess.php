<?php 

  include "./includes/init.php";

  $products = new Item();
  if(isset($_POST['submit'])) {
    $title = $_POST['product-title'];
    $body = $_POST['product-content'];
    $price = $_POST['product-price'];
    
    $products->addProduct($title, $body, $price);
    




    header('location:/Product/');
    exit();
  }
     else if($_GET['send'] === 'del') {
    $id = $_GET['id'];
    $products->delProduct($id);
    header('location:/Product/');
    exit();

  } else if($_GET['send'] === 'update') {
    $id = $_GET['id'];

    $title = $_POST['product-title'];
    $body = $_POST['product-content'];
    $price = $_POST['product-price'];

    $products->updateProduct($id, $title, $body, $price);
    header('location:/Product/');
    exit();
    
  }
