<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body style="background-color: #191c29;" >

<?php
    include 'db_connect.php';
    // write query for users 
    $sql = 'SELECT * FROM product';
    ///make query & get result 
    $result = mysqli_query($conn,$sql);  
    while($r=mysqli_fetch_array($result)) { ?>
    <center>
 <div class="dis">       
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="<?php echo $r['img']?>" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
     <h1 style="font-size:30px;"><?php echo  $r['ProductName'] ?></h1>
      <p style="font-size:25px;"><?php echo  $r['price'] ?>₪</p> 
      <p style="font-size:20px;"><?php echo  $r['description'] ?></p>
      <form action="addtocart.php?id=<?php echo $r['id']?>" method="POST">
      <input type="text" value="1" class="form-control" name="qnt" />
    </br>
      <a><button type="submit" class="btn btn-outline-info" width="290px" style="font-size:20px;">Add to cart</button></a>
    </form>
    </br>
    </br>
    </br>
    </div>
  </div>
</div>
    </center>
<?php } ?>
    </div>
</body>
</html>
