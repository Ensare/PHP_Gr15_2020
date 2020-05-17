<?php
include('pregEx.php');
session_start();

$connect = mysqli_connect("localhost", "root", "php123!", "phpconnection");
if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="porosit_online.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id'               =>     $_GET["id"],
            'item_name'               =>     $_POST["hidden_name"],
            'item_price'          =>     $_POST["hidden_price"],
            'item_quantity'          =>     $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="porosit_online.php"</script>';
            }
        }
    }
}
?>



<!DOCTYPE html>
<html manifest="home.appcache">

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/animate.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="javascript/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="javascript\validimi.js"></script>
    <script src="javascript\produktet.js"></script>
</head>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

<style>

    .container {
        
        margin: 5% 10%;
         
    }

    .col-md-4{
        display: inline-block;
        margin:1% 1%;
    }

    .carts{
        width: 200px;
        height: 220px;
        border:1px solid #333;
        background-color:#f1f1f1;
        border-radius:5px;
        padding:10px; 
    }

</style>

<body>
    <header class="animated fadeIn">

        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img src="images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img src="images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img src="images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img src="images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img src="images/facebook.png"></abbr></a></li>
                </ul>
            </div>

            <div id="search">
                <form method="get" action="">
                    <input type="search" name="Search">
                </form>
            </div>


            <div class="navbar">
                <a href="index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Interior
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropcnt">
                        <a href="interieri/dhoma_e_dites.php">Living Room</a>
                        <a href="interieri/kuzhina.php">Kitchen</a>
                        <a href="interieri/dhoma_e_gjumit.php">Bedroom</a>
                        <a href="interieri/dhoma_e_punes.php">Workroom</a>
                    </div>
                </div>
                <a href="tips_and_tricks.php">Tips and tricks</a>
                <a href="porosit_online.php">Online order</a>
                <a href="rreth_nesh.php">About us</a>
            </div>
        </nav>
    </header>


    <div class="container" width='700px'>
        <h1 align='center' style="margin-bottom:4%; font-size:1.5em">Choose the products you want to buy!</h1>
        <?php
        $query = "SELECT * FROM products ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <div class="col-md-4" align="center">
                    <form method="post" action="porosit_online.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div class="carts" align="center">
                            <h5 class="text-info"><?php echo $row["name"]; ?></h5>
                            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
        <div style="clear:both"></div>
        <br />
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table border="3" >
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    $quantity=0;
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td>$ <?php echo $values["item_price"]; ?></td>
                            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                            <td><a href="porosit_online.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                        </tr>
                    <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        $quantity = $quantity + ($values["item_quantity"]);
                        $_SESSION['var']=$total;
                    
                    }
                    ?>
                    <tr>

                        <td></td>
                        <td><?php echo $quantity?></td>
                        <td>Total</td>
                        <td>$ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <form method="post"> 
        <input id="btnform" type="submit" name="button"
                value="Next"/> 
    </form> 

    <?php
      
        if(isset($_POST['button'])) { 
           if($quantity==0){
            echo '<script>alert("You must order something first!")</script>';
            echo '<script>window.location="porosit_online.php"</script>';
           } else{
            echo '<script>window.location="onlineforma.php"</script>';
           }
        } 
        
    ?> 
    

		<style>
			#btnform{
				margin-left: 84%;
				margin-bottom: 2%;
				border-radius: 30px;
				width: 80px;
				height: 40px;          
			}
			</style>

		

    <footer>
        <section class="foot">
            <div class="A">

                <div id="a">
                    <h5>ABOUT US</h5>
                    <img src="images/imgau/fotokryesore.jpg" style="width:200px ; height:90px">
                    <p id="au">
                        Your Home is a furniture store that
                        operates since the 80s. With our bold
                        and hardworking crew, we have expanded
                        our store to three new locations,
                        bringing ourselves closer to the customers!
                        <a href="rreth_nesh.php">Read More>></a>
                    </p>
                </div>

                <div id="b">
                    <h5 id="links">BEST PRODUCTS</h5>
                    <ol>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti1.php">Natalia</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti3.php">Tommy Bahama</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti6.php">Starmore</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti3.php">Zobel and Co Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti4.php">Wayfair</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti3.php">Palma</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti6.php">Bescope Kitchen</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti5.php">Edelmar</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti2.php">Oisin</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti5.php">Wystfield</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti4.php">Calgary Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti5.php">Tuft and Needle</a></li>

                    </ol></br>

                    <div id="supported"></div>
                    <div id="unsupported"></div>
                    <button onclick="worker();" id="btn3">Subscribe</button>
                    <button id="btn1">Add Products</button>
                    <button id="btn2">Add in the beggining</button>

                </div>

                <div id="c">
                    <h5>LATEST BLOG POSTS</h5>
                    <h5>Best modern living room design </h5>
                    <p style="font-size: smaller;">A living room needs to be <br>
                        welcoming for you and your <br>
                        guests. More people will be <br>
                        able to visualize it as... </p>
                    <a href="">Read More>></a></h5><br>

                    <h5>Best interior decorating secrets<h5></h5>
                        <p style="font-size: smaller;">Some people have a natural <br>
                            eye for design, but if you're <br>
                            more in the camp of those who <br>
                            can't do anything without <br>
                            consulting Pinterest... </p>
                        <a href="">Read More>></a>
                    </h5><br>

                </div>


                <div id="d">
                    <h5>CONTACT US</h5>

                    <form method="POST" action="">
                        <input type="text" name="name" placeholder="Name" class="f" /><?php if (isset($name)) {
                                                                                            echo $name;
                                                                                        } ?><br /><br />
                        <input type="text" name="email" placeholder="Email" class="f" /><?php if (isset($email)) {
                                                                                            echo $email;
                                                                                        } ?><br /><br />
                        <input type="type" name="subject" placeholder="Subject" class="f" /><?php if (isset($subject)) {
                                                                                                echo $subject;
                                                                                            } ?><br /><br />
                        <textarea name="message" rows="5" cols="20" placeholder="Message" class="f"></textarea><?php if (isset($message)) {
                                                                                                                    echo $message;
                                                                                                                } ?>
                        <br /><br />
                        <input id="submit" type="submit" name="submit2">
                        <input type="hidden" name="form_number" value="2" />
                    </form>
                </div>
            </div>
            <div>
                <address>
                    <?php
                    $copy_date = "Copyright 2019";
                    $copy_date = preg_replace("([0-9]+)", "2020", $copy_date);
                    ?>
                    <p id="copyright">&copy; <?php echo $copy_date; ?> Fundamentals of Web Development

                        .........email: <a href="mailto:yourhome@gmail.com ">yourhome@gmail.com</a><br />

                    </p>

                </address>

            </div>

        </section>

    </footer>
    </main>
    <script src="javascript/allpages.js"></script>
    <script src="javascript/jquerythingz.js"></script>
    <script src="javascript\checkforma.js"></script>
</body>

</html>