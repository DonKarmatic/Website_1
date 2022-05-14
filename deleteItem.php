<?php
  require('db.php');

  $prodid = $_POST['prodid']; //getting product ID

  $query = "SELECT * FROM `cart`";  //Getting list of products
  $result = mysqli_query($con, $query);
  $resultCheck = mysqli_num_rows($result);
  
  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
      if($prodid == $row['prodid']){

  			$sql = "DELETE FROM `cart` WHERE prodid='$prodid';";
  			mysqli_query($con, $sql);
  			header("Location: cartpage.php");
  			exit();

      }
    }
  }


?>
