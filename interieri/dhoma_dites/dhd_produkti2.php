<?php include('../../pregEx.php')?>
<!DOCTYPE html>
<html>


    <head en="lang">
        <meta charset="utf-8">
        <title>Your Home</title>
        <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="lib/reset.css">
        <link rel="stylesheet" href="../../lib/stilizimi.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="javascript/jquery-3.4.1.min.js"></script>
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
        <script>
            $(document).ready(function () {
                $("#flip").click(function () {
                    $(".tabela").slideToggle("slow");
                    $("#flip").text("Unhide table");
    
                });
            });
    
        </script>
    </head>
<body>
    <header>

        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img src="../../images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img src="../../images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img src="../../images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img src="../../images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img src="../../images/facebook.png"></abbr></a></li>
                </ul>
            </div>

            <div id="search">
            <form method="get" action="">
                <input type="text" size="20" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
                </form>
            </div>


            <div class="navbar">
                <a href="../../index.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Interior
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropcnt">
                        <a href="../../interieri/dhoma_e_dites.php">Living Room</a>
                        <a href="../../interieri/kuzhina.php">Kitchen</a>
                        <a href="../../interieri/dhoma_e_gjumit.php">Bedroom</a>
                        <a href="../../interieri/dhoma_e_punes.php">Workroom</a>
                    </div>
                </div>
                <a href="../../tips_and_tricks.php">Tips and tricks</a>
                <a href="../../porosit_online.php">Online order</a>
                <a href="../../rreth_nesh.php">About us</a>
            </div>
        </nav>
    </header>
    <main>
<div class="dhd_produkti2">
    <img id="dhd_produkti2" class="zoomin"src="../../images/imgdhdites/dhd_produkti2.jpg" style="width: 490px; height: 350px">
    <table border="1" class="tabela">
         <thead>
                    <tr>
                        <td class="pad">Product ID</td>
                        <td class="pad">92957b</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pad">Product Name</td>
                        <td class="pad">Valebeck</td>
                    </tr>
                    <tr>
                        <td class="pad">Price</td>
                        <td class="pad">2999$</td>
                    </tr>
                    <tr>
                        <td class="pad"> Description</td>
                        <td class="pad">Collect moments not things. </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pad"><a href="../../porosit_online.php">Buy it online!</a> </td>
                    </tr>
        </tbody>
    </table>
    </br>
    <button id="flip">Hide Table</button><br>
            <button id="zvogelo">Resize the picture</button><br>
            <button id="raiting" onclick="window.location.href='6.php' ">Happiness raiting..</button><br>
</div>

</section>
        
<footer>
    <section class="foot">
        <div class="A">

            <div id="a">
                <h5>ABOUT US</h5>
                <img src="../../images/imgau/fotokryesore.jpg" style="width:200px ; height:90px">
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
							$copy_date = preg_replace("([0-9]+)","2020",$copy_date);
						?>
						<p id="copyright">&copy; <?php echo $copy_date; ?> Fundamentals of Web Development

							.........email: <a href="mailto:yourhome@gmail.com ">yourhome@gmail.com</a><br />
							
						</p>
						
					</address>
					
				</div>

    </section>
</footer>
</main>
<script src="../../javascript/allpages.js"></script>
<script src="../../javascript/jquerythingz.js"></script>
</body>

</html>