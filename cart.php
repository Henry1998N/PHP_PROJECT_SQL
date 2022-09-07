<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
    </style>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<?php include "navbar.php" ?>
<body>
<?php
$total=0;
 ?>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
                    <?php include 'db_connect.php';
                        // write query for users 
                        $sql = 'SELECT * FROM cart';
                        ///make query & get result 
                        $result = mysqli_query($conn,$sql);
                        while($r=mysqli_fetch_array($result)){ 
                        if($r['customer_id']==$_SESSION['custid']){
                           $pr= $r['product_id'];
                            $sql1="select * from product where id = $pr";
                            $result1 = mysqli_query($conn,$sql1);
                            while($r1=mysqli_fetch_array($result1)){ 

                        
                            ?>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo $r1['img'] ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"></h4>
										<p></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $r1['price'] ?></td>
							<td data-th="Quantity">
								<?php echo $r['quantity'] ?>
							</td>
							<td data-th="Subtotal" class="text-center" name="total"><?php echo $r1['price']*$r['quantity']?></td>
							<td class="actions" data-th="">
							<a href="deletecartitem.php?id=<?php echo $r1['id']?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>							
							</td>
						</tr>
					</tbody>
					<?php  $total=$total+($r1['price']*$r['quantity']) ?>
                    <?php } } } ?>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong></strong></td>
						</tr>
						<tr>
							<td><a href="products.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong><?php if(isset($total)) echo $total?></td>
							<td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
