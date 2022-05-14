<?php
  require('db.php');

  $prodid = $_POST['prodid']; //getting product ID

  $query = "SELECT * FROM `shoe`";  //Getting list of products
  $result = mysqli_query($con, $query);
  $query2 = "SELECT * FROM `cart`";
  $result2 = mysqli_query($con, $query2);



  while($row = mysqli_fetch_assoc($result)){
    while($row2 = mysqli_fetch_assoc($result2)){
      if($prodid == $row2['prodid']){
        $increase = $row['price'];
        $sql2 = "UPDATE `cart` SET quantity=quantity+1, price=price+$increase WHERE prodid='$prodid'";
        mysqli_query($con,$sql2);
        header("Location: dashboard.php?added=success");
        exit();

      }
    }
    if($prodid == $row['prodid']){

      $pid = $row['prodid'];
			$model = $row['model'];
			$quantity = $row['quantity'];
      $price = $row['price'];

			$sql = "INSERT INTO `cart` (prodid, model, quantity, price, customerType) VALUES ('$pid', '$model', 1, '$price', 'member');";
			mysqli_query($con, $sql);
			header("Location: dashboard.php?added=success");
			exit();

    }
  }


?>
