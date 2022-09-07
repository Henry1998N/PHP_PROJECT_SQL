<?php include "managernav.php"; ?>

<html>
<link rel="stylesheet" href="addpro.css">

<body>
<form action="insertproduct.php" method="POST">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Add Product</label>
		<div class="login-form">
			<div class="sign-in-htm">
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label  class="label">Id</label>
					<input type="text" class="input"  name="id" placeholder="id">
				</div>
				<div class="group">
					<label  class="label">Product Name</label>
					<input name="ProductName" placeholder="ProductName" type="text" class="input" >
				</div>
				<div class="group">
					<label  class="label">Catagory Id</label>
					<input  type="text" class="input"  name="CatagoryId" placeholder="CatagoryId">
				</div>
				<div class="group">
					<label  class="label">Price</label>
					<input  type="text" class="input" name="price" placeholder="price">
				</div>
                <div class="group">
					<label  class="label">Quantity</label>
					<input  type="text" class="input" name="Quantity" placeholder="Quantity">
				</div>
                <div class="group">
					<label  class="label">Img</label>
					<input  type="text" class="input" name="img" placeholder="Img">
				</div>
                <div class="group">
					<label  class="label">Description</label>
					<input  type="text" class="input" name="description" placeholder="Description">
				</div>
				<div class="group">
				<input type="submit" class="button" value="Add product">
				</div>
		</div>
	</div>
</div>
</form>
</body>
</html>