<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');

$query = "SELECT * FROM `shoe`";
$result = mysqli_query($con, $query) or die(mysql_error());

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search Product</title>
        <meta charset="UTF-8">
        <meta name="home page" content="This is the Home Page for the .">
        <style>
            h1 button {color: darkblue; border: none; outline: none;
                    background-color: lightgray; margin-left: 31%; font-size: 100%;
                    cursor: pointer; font-family: 'Times New Roman', Times, serif;
                    font-weight: bold;}
            div
            button {height: 30px; width: 330px; font-weight: bold;
                    color: darkblue; cursor: pointer;}
            body {background-color: lightgray;}
            form {font-size: 10pt;}
            table {text-align: center; margin-left: 10%;}

        </style>
        <script>
        </script>

    </head>

    <body class="container">
        <center>
        <h1>Cloud Lace Shoe Store</h1>
        <div>
            <input type="button" onclick="window.location.href='login.php';" value="Login" />
            <input type="button" onclick="window.location.href='registration.html';" value="Registration" />
        </div>
        <div style="text-align: center;">
        <a href=search.php><button style="background-color: gray;">SEARCH</button></a>
        <a href=dashboard.php><button>ALL SHOES</button></a>
        <a href=FinalProjectWomensPage.php><button>WOMEN SHOES</button></a>
        <a href=FinalProjectMensPage.php><button>MEN SHOES</button></a>
        <a href=cartpage.php>CART</a>
        </div>
        </center>
        
        <center>
            <form action="" method="GET">
                <h1>Enter Desired Shoe Model:</h1><br />
                <input type="text" name="model" />
                <br />
                <input type="submit" name="submit" value="Search"/>
            </form>
            <p></p>
            <?php 
            
            if(isset($_GET['submit'])){
                if(empty($_GET['model'])){
                    echo "Enter a search term";
                }
        
                $model=$_GET['model'];
                
                while($row=$result->fetch_assoc()){
                    if($model == $row['model']){
                        ?>
                        <form action="addToCart.php" method="post">
                        <p><img src="Shoes Pictures/<?=$model?>.jpg" height="150" width="200"></p>
                        <p><?=$model?></p>
                        <p><input type="hidden" value="<?=$row['prodid'];?>" name="prodid"/></p>
                        <p><input type="submit" value="Add to Cart" name="submit"/></p>
                        </form>
                        <?php
                    }
                }
    
            }

            
            ?>
        </center>
    </body>
</html>