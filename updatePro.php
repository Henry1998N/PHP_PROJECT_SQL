<?php if(!isset($_SESSION['proid'])){
  $_SESSION['proid']=$_GET['id'];
} ?>

<link rel="stylesheet" href="update.css">

<div class="container">  
  <form id="contact" action="update.php" method="POST">
    <h3>Update Product</h3>
</br>
    <fieldset>
      <input placeholder="Product Name.." type="text" tabindex="1" name="ProductName">
    </fieldset>
    <fieldset>
      <input placeholder="Catagory Id.." type="text" tabindex="2" name="CatagoryId">
    </fieldset>
    <fieldset>
      <input placeholder="Price.." type="text" tabindex="3" name="price">
    </fieldset>
    <fieldset>
      <input placeholder="Quantity.." type="text" tabindex="4" name="Quantity">
    </fieldset>
    <fieldset>
      <input placeholder="Img.." type="text" tabindex="4" name="img">
    </fieldset>
    <fieldset>
      <textarea placeholder="Description.." tabindex="5" name="description"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
  </form>
 
  
</div>