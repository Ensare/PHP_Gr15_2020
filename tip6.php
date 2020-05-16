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
    .tip5 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(10, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        padding:40px;
        padding-top: 5%;
        
        }
        #div2, #div9,#div11,#div4,#div13
        {
            margin:15% 5%;
        } 
        
        
        #div2 { grid-area: 3 / 2 / 5 / 3; }
        #div3 { grid-area: 5 / 2 / 7 / 3; }
        #div4 { grid-area: 7 / 2 / 9 / 3; }
        #div5 { grid-area: 9 / 2 / 11 / 3; }
        #div7 { grid-area: 1 / 2 / 3 / 3; }
        #div9 { grid-area: 1 / 1 / 3 / 2; }
        #div10 { grid-area: 3 / 1 / 5 / 2; }
        #div11 { grid-area: 5 / 1 / 7 / 2; }
        #div12 { grid-area: 7 / 1 / 9 / 2; }
        #div13 { grid-area: 9 / 1 / 11 / 2; }
    
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
    </header>

    <body>
        <article class="tip5">

            <img src="images/tip6/tip61.jpg" width="550" height="350" id="div7" class="hoveer">
            <p id="div9" >
              The Arcade trend excels in the bedroom space thanks to a host of eye-catching patterns ideal for the new season. The star of the show is the Fiesta bed linen range which blends the blue, orange and pinks of the trend in a striking harlequin print. Fabulous for bringing festival style to the bedroom, it can be paired with even more colourful cushions in block hues or even opt for a chic pattern clash to really bring the look to life.
            </p>
            <img src="images/tip6/tip62.jpg" width="550" height="350" id="div10" class="hoveer">
            <p id="div2">
             In some corners of the decorating world, "modern" is considered a dirty word. There's a belief that modern rooms are cold and lack personality. But nothing could be further from the truth. Modern living rooms can be warm, inviting, and sometimes even downright cozy. While modern living rooms may lack some of the frills of their more embellished counterparts, they make up for it in their sleek sense of style.
            </p>
            <img src="images/tip6/tip63.jpg" width="550" height="350" id="div3" class="hoveer">
            <p id="div11">
              What's not to love about a room with comfortable furniture, a soothing palette, and a take notice focal point? This modern living room from Raven Inside Interior Design has them all. The sleek lines and no-frills approach to decorating are both modern and minimal, yet there's nothing cold or impersonal about it. The warm finishes and soft furnishings make this a great room for spending a cozy night in.
            </p>
            <img src="images/tip6/tip64.jpg" width="550" height="350" id="div12" class="hoveer" >
            <p id="div4">
              Who says modern can't be fun? Cleary not the team from Michelle Lewis Interior Design, ​the masterminds behind this creative room. Abstract art, a unique light fixture, and an array of colors and finishes come together to create a space that looks great and doesn't take itself too seriously. Trays are essential to have to hand when hosting outdoor dinner parties too, as they can transport drinks and nibbles with ease, becoming a focal point once they have been set down too.
            </p>
            <img src="images/tip6/tip65.jpeg" width="550" height="350" id="div5" class="hoveer">
            <p id="div13">
              What many people don't appreciate about modern design is how easily it can be combined with other styles. This room, for instance, has some traditional architectural bones (courtesy of Murphy & Co) yet the furniture and art skew modern. Together they form an almost transitional style which can be appealing to a wide variety of people.finish even incorporates a subtle disco vibe for when the sun goes down....
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
							<a href="">Read More>></a></h5><br>

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
