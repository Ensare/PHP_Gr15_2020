<?php
	if(isset($_POST['submit'])){
		session_start(); // Start the session

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: session2.php');
	}
?>
<!DOCTYPE html> 
<html> 

<head en="lang">
    <meta charset="utf-8">
    <title>Your Home</title>
    <link href='https://fonts.googleapis.com/css?family=David Libre' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="lib/reset.css">
    <link rel="stylesheet" href="lib/stilizimi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="javascript/jquery-3.4.1.min.js"></script>
</head>
<style>
    #div1,
    #div5,
    #div9 {
        -ms-transform: skew(7deg);
        /* IE 9 */
        -webkit-transform: skew(7deg);
        /* Safari prior 9.0 */
        transform: skew(7deg);
        /* Standard syntax */
    }

    #div4,
    #div8 {
        -ms-transform: skew(7deg);
        /* IE 9 */
        -webkit-transform: skew(7deg);
        /* Safari prior 9.0 */
        transform: skew(7deg);
        /* Standard syntax */
    }
</style>
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
</head>



<body>
    <header>
        <h1>Your Home</h1>
        <h3>Where dreams come true</h3>
        <nav>
            <div id="smedialinks">
                <ul>
                    <li><a href="https://www.linkedin.com/"><abbr title="Linkedin"><img
                                    src="images/linkedin.png"></abbr></a></li>
                    <li><a href="https://www.twitter.com/"><abbr title="Twitter"><img
                                    src="images/twitter.png"></abbr></a></li>
                    <li><a href="https://www.pinterest.com/"><abbr title="Pinterest"><img
                                    src="images/pinterest.png"></abbr></a></li>
                    <li><a href="https://plus.google.com/"><abbr title="+Google"><img
                                    src="images/googleplus.png"></abbr></a></li>
                    <li><a href="https://www.facebook.com/"><abbr title="Facebook"><img
                                    src="images/facebook.png"></abbr></a></li>
                </ul>
            </div>

            <div id="search">
            <form method="get" action="">
                <input type="text" size="20" onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
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
                <a href="apliko_per_pune.php">Apply for job</a>
                <a href="rreth_nesh.php">About us</a>
            </div>
        </nav>
        </div>

    </header>
    <article class="parent">
        <img id="div2" src="images/imgtat/tip4.png" class="hoveer" width="500px" height="500px">
        <p id="div1"> Stark, cold and boring? Simple, sleek and sexy? Regardless of how you view minimalist interior
            design,
            there’s more to this widely embraced concept than most of us think.
            Delving into the theory of “less is more,” we need to rethink minimalism as not just a plain white box or
            cool ultramodern space,
            but as a concept that simultaneously showcases exceptional functional design while artistically creating a
            simplified way to live.
        </p>
        <img id="div3" src="images/imgtat/tip41.png" width="500px" height="500px" class="hoveer">
        <p id="div4">Minimalist design started in the 20th century as a reaction to traditional and overly wrought
            classical details.
            In a nutshell, it’s design that’s stripped down to its essential purpose and identity by eliminating
            everything unnecessary.
            This pared-down aesthetic exemplifies simplicity at its best. </p>
        <img id="div6" src="images/imgtat/tip42.png" width="500px" height="500px" class="hoveer">
        <p id="div5">One of the first to embrace minimalism is Mies van der Rohe. In fact, the term “less is more”
            came from the German architect and educator, who used glass, steel and wide-open spaces to create his
            unembellished modern visions.
            His use of crisp lines and well-placed rectangle shapes created a sense of order.</p>
        <img id="div7" src="images/imgtat/43.png" width="500px" height="500px" class="hoveer">
        <p id="div8">Eliminating clutter and extraneous objects is also a hallmark of minimalist interior design.
            This simplicity allows the focus to remain on the room’s purpose and function,
            and on the beauty of its carefully selected furnishings.</p>
        <img id="div10" src="images/imgtat/44.png" width="500px" height="500px" class="hoveer">
        <p id="div9">Similarly, keeping color combinations to a minimum further enhances the serene and balanced
            environment.
            This doesn’t necessarily translate to keeping everything black and white. Pops of color,
            monochromatic hues of any color, and layers of textures such as wood and wool work well in any minimalist
            space.
        </p>
    </article>
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
                        <a href="rreth_nesh.html">Read More>></a>
                    </p>
                </div>

                <div id="b">
                    <h5 id="links">BEST PRODUCTS</h5>
                    <ol>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti1.html">Natalia</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti3.html">Tommy Bahama</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti6.html">Starmore</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti3.html">Zobel and Co Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti4.html">Wayfair</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti3.html">Palma</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti6.html">Bescope Kitchen</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti5.html">Edelmar</a></li>
                        <li><a href="interieri\dhoma_punes_produktet\dhp_produkti2.html">Oisin</a></li>
                        <li><a href="interieri\dhoma_dites_produktet\dhd_produkti5.html">Wystfield</a></li>
                        <li><a href="interieri\kuzhina_produktet\produkti4.html">Calgary Kitchen</a></li>
                        <li><a href="interieri\dhoma_gjumit_produktet\dhgj_produkti5.html">Tuft and Needle</a></li>

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
					<?php
					$regex = "/^[a-zA-Z\s]+$/";
					$regex1 = "/^[a-zA-Z\s\d\.]+$/";
					$regex2 = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]+$/";
					if(isset($_POST['submit'])){
						if(preg_match($regex,$_POST['name'])){
							$name = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['name'])){
							$name = "<span style='color:red'>*Required</span>";
						}
						else{
							$name = "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex2,$_POST['email'])){
							$email = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['email'])){
							$email = "<span style='color:red'>*Required</span>";
						}else {
							$email =  "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex1,$_POST['subject'])){
							$subject = "<span style='color:green'>&#10004; Valid input</span>";
						}else{
							$subject = "<span style='color:red'>&#10006; Invalid input</span>";
						}
						if(preg_match($regex1,$_POST['message'])){
							$message = "<span style='color:green'>&#10004; Valid input</span>";
						}else if(empty($_POST['message'])){
							$message = "<span>No input added</span>";
						}
						else{
							$message = "<span style='color:red'>&#10006; Invalid input</span>";
						}
					}
					?>
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<input type="text" name="name" placeholder="Name" class="f" /><?php if(isset($name)){echo $name;}?><br /><br /> 
							<input type="text" name="email" placeholder="Email" class="f" /><?php if(isset($email)){echo $email;}?><br /><br />
							<input type="type" name="subject" placeholder="Subject" class="f" /><?php if(isset($subject)){echo $subject;}?><br /><br />
							<textarea name="message" rows="5" cols="20" placeholder="Message" class="f"></textarea><?php if(isset($message)){echo $message;}?>
							<br /><br />
							<input id="submit" type="submit" name="submit">
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
    <script src="javascript/allpages.js"></script>
    <script src="javascript/jquerythingz.js"></script>
</body>

</html>
