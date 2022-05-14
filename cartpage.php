<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');

$check = $_SESSION['email'];
$query = "SELECT * FROM `cart`";
$result = mysqli_query($con, $query) or die(mysql_error());
$resultCheck = mysqli_num_rows($result);
$totalprice = 0;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cloud Lace Cart</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div><center>
        <h3 style="font-size:30px">Hey, <?php echo $_SESSION['email']; ?>!</h3>
        <p style="font-size:25px">You are looking at your cart.</p>
        <p style="font-size:25px"><a href="logout.php"><button>Logout</button></a>
        <a href="dashboard.php"><button>Back to Main</button></a></p>
        </center>
    </div>

    <section>
      <center>
        <table id="cart">
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Remove</th>
          </tr>
              <!-- PHP CODE TO FETCH DATA FROM ROWS-->
              <?php   // LOOP TILL END OF DATA
              if($resultCheck > 0){
                while($rows=$result->fetch_assoc()){
                  $totalprice = $totalprice + $rows['price'];
               ?>
              <form method="post" action="deleteItem.php">
              <tr>
                  <!--FETCHING DATA FROM EACH
                      ROW OF EVERY COLUMN-->

                  <td><?=$rows['model'];?></td>
                  <td><?=$rows['price'];?></td>
                  <td><?=$rows['quantity'];?></td>
                  <input type="hidden" value="<?=$rows['prodid'];?>" name="prodid"/>
                  <td><input type="submit" value="Delete item"></td>
              </tr>
              </form>
              <?php
                  }
               ?>
               <?php if($check == "guest"){ ?>
               <tr>
                 <form method="post" action="confirmPurchase.php">
                     
                 <td colspan="3">Total Price = <?php echo $totalprice; ?></td>
                 <input type="hidden" value="<?=$totalprice;?>" name="totalprice"/>
                 <td><input type="submit" value="Purchase" name="submit"/></td>
                 
                 </form>
               </tr>
             <?php } else { $totalprice=$totalprice*90/100;?>
               <tr>
                 <td colspan="4">Discount = 10%</td>
               </tr>
               <tr>
                 <form method="post" action="confirmPurchase.php">
                 <td colspan="3">Total Price = <?=$totalprice;?></td>
                 <input type="hidden" value="<?php echo $totalprice; ?>" name="totalprice"/>
                 <td><input type="submit" value="Purchase" name="submit"/></td>
                 </form>
               </tr>
             <?php } ?>
          </table>
        </center>
    </section>
            <?php
            //echo "</table></center>";

                } else{
                  echo "<h2><center>Sorry, your Cart is empty</center></h2>";
                }


            ?>
</body>
</html>
