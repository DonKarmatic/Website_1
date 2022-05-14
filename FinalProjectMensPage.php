<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Men Shoes</title>
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
        <a href=search.php><button>SEARCH</button></a>
        <a href=dashboard.php><button>ALL SHOES</button></a>
        <a href=FinalProjectWomensPage.php><button>WOMEN SHOES</button></a>
        <a href=FinalProjectMensPage.php><button style="background-color: gray;">MEN SHOES</button></a>
        <a href=cartpage.php>CART</a>
        </div>
        </center>
        
        <center>
        <table> <!-- Table for product showcase -->
            <br>
            <tr>
                <td></td> <!--First row of images -->
                <td><img src="Shoes Pictures/Adidas Yeezy Slide Onyx.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Adidas Yeezy Foamrunner Vermillion.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Adidas Yeezy 700 Static.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Adidas Yeezy 350 Black Static.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Adidas Yeezy 500 Utility Black.jpg" height="150" width="200"></td>
            </tr>
            <tr height="20px">
                <td></td>   <!-- Size options and submit buttons -->
                <td>
                <form action="addToCart.php" method="post"> <!-- This will be used to submit the selection to cart php-->
                    <header for="name">Adidas Yeezy Slide Onyx</header>
                    <header for="name">$60</header>
                    <input type="hidden" value="16" name="prodid"/>
                    <input type="submit" value="Add to cart"></input>
                </form>
                </td>
                <td><form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                <header for="name">Adidas Yeezy Foamrunner Vermillion</header>
                <header for="name">$80</header>
                        <input type="hidden" value="17" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td><form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Adidas Yeezy 700 Static</header>
                    <header for="name">$300</header>
                        <input type="hidden" value="18" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Adidas Yeezy 350 Black Static</header>
                    <header for="name">$220</header>
                        <input type="hidden" value="19" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Adidas Yeezy 500 Utility Black</header>
                    <header for="name">$200</header>
                        <input type="hidden" value="20" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><img src="Shoes Pictures/Nike Air Force 1 Low Travis Scott Sail.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Nike Offwhite Blazer The Ten.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Nike Dunk Low Syracuse.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Nike Foamposite Shooting Star.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Nike Dunk Low Kentucky.jpg" height="150" width="200"></td>
            </tr>
            <tr height="20px">
                <td></td>   <!-- Size options and submit buttons -->
                <td>
                    <form action="addToCart.php" method="post"> <!-- This will be used to submit the selection to cart php-->
                    <header for="name">Nike Air Force 1 Low Travis Scott Sail</header>
                    <header for="name">$150</header>
                        <input type="hidden" value="21" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Nike Offwhite Blazer The Ten</header>
                    <header for="name">$170</header>
                        <input type="hidden" value="22" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Nike Dunk Low Syracuse</header>
                    <header for="name">$100</header>
                        <input type="hidden" value="23" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Nike Foamposite Shooting Star</header>
                    <header for="name">$250</header>
                        <input type="hidden" value="24" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Nike Dunk Low Kentucky</header>
                    <header for="name">$100</header>
                        <input type="hidden" value="25" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><img src="Shoes Pictures/Jordan 4 Bred.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Jordan 11 High Gamma.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Jordan 7 Raptor.jpg" height="150" width="200"></td>
                <td><img src="Shoes Pictures/Jordan 3 White Cement.jpg" height="150px" width="200"></td>
                <td><img src="Shoes Pictures/Jordan 1 High OG Chicago.jpg" height="150px" width="200"></td>
            </tr>
            <tr height="20px">
                <td></td>   <!-- Size options and submit buttons -->
                <td><form action="addToCart.php" method="post"> <!-- This will be used to submit the selection to cart php-->
                    <header for="name">Jordan 4 Bred</header>
                    <header for="name">$220</header>
                        <input type="hidden" value="26" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Jordan 11 High Gamma</header>
                    <header for="name">$220</header>
                        <input type="hidden" value="27" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Jordan 7 Raptor</header>
                    <header for="name">$170</header>
                        <input type="hidden" value="28" name="prodid"/>
                        <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Jordan 3 White Cement</header>
                    <header for="name">$190</header>
                        <input type="hidden" value="29" name="prodid"/>
                    <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
                <td> <form action="addToCart.php" method="post"> <!-- Used to submit selections based on sizes-->
                    <header for="name">Jordan 1 High OG Chicago</header>
                    <header for="name">$160</header>
                        <input type="hidden" value="30" name="prodid"/>
                    <input type="submit" value="Add to cart"></input>
                    </form>
                </td>
            </tr>

        </table>
      </center>

        <?php
    			$URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    			if(strpos($URL, "added=invalid") == true){
    				echo '<script>alert("Could not add to Cart.")</script>';
    			}
    			if(strpos($URL, "added=success") == true){
    				echo '<script>alert("Successfully added to Cart!")</script>';
    			}
    		?>

    </body>
</html>
