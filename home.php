<meta<?php $c = mysqli_connect("localhost", "id2538458_sajalrai", "NishaDhakad123");
      mysqli_select_db($c, "id2538458_dhakad");
?>

<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto|Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,500,600,700|Roboto+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700" rel="stylesheet">

	<title>Home</title>
	<script>
		function myfunc(){
			document.getElementById("side").style.display="block";
			document.getElementById("coll").style.display="none";
			document.getElementById("coll2").style.display="block";
		}
		function myfunc2(){
			document.getElementById("side").style.display="none";
			document.getElementById("coll").style.display="block";
			document.getElementById("coll2").style.display="none";
		}
	</script>
<style>
	@media screen and (min-width:800px){
		#top3{
			width:100%;
			height:70px;
		}
		#coll{
			color:rgb(0,0,0,0);
		}
		#coll2{
			color:rgb(0,0,0,0);
		}
		#side{
			display:none;
		}
		#side2{
			display:none;
		}
	}

	@media screen and (max-width:800px){
		#head{
			display:none;
		}
		#top3{
			width:100%;
			height:60px;
		}
		#coll{
			color:rgb(10,10,10);
			font-size:32px;
			margin-left:80%;
			margin-top:-5px;
			display:block;
		}
		#coll2{
			color:rgb(10,10,10);
			font-size:32px;
			margin-left:80%;
			margin-top:-5px;
			display:none;
		}
		#side{
			width:100%;
			display:none;
			background:rgb(242, 242, 242);
			position:absolute;
			z-index:9999;
		}
		#side2{
			font-family: 'Open Sans Condensed', sans-serif;
			font-size:20px;
			color:rgb(43, 43, 43);
			padding:5px 0px;
			margin:0px 20px;
			border-bottom:1px solid rgb(240, 240, 240);
			text-align:left;
		}
	}
	#header{
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight:500;
		font-size:20px;
		color:rgb(0,0,0);
		float:left;
		padding-left:50px;
	}
	#head{
		margin-left:60%;
		position:absolute;
	}
	#top3{
		display:block;
		width:100%;
		padding:18px;
		background:url('y5.jpg');
	}
	#header:hover{
		text-shadow: 0px 0px 1px rgb(0,0,0);
	}
	#side2:hover{
	text-shadow: 0px 0px 1px black;
	}
	#main{
		background:url('y5.jpg');
		background-size:cover;
		background-width:50%;
		background-position:50% 50%;
		margin-left:auto;
		margin-right:auto;
		display:block;
		width:100%;
		height:65%;
		padding-top:5%;
	}
	#main2{
		background:url('y4.jpg');
		background-size:cover;
		background-position:50% 50%; 
	}
	#main3{
		background:url('y6.png');
		background-size:cover;
		background-position:50% 50%;
	}
	#row{
		background:url('y11.jpg');
		background-size:cover;
		background-position:50% 50%;
	}
	#main5{
		background:url('y10.jpg');
		background-size:cover;
		background-position:0% 0%;
		display:block;
		
	}
</style>
<style>
	@media screen and (min-width:800px){
		#three{
			height:450px;
			width:100%;
			padding-top:40px;
		}
		#a{
			width:31%;
			min-width:300px;
		}
		#three2{
		width:100%;
		height:0px;
		}
	}

	@media screen and (max-width:800px){
		#three{
		height:1100px;
		width:100%;
		padding-top:20px;
		}
		#a{
			width:100%;
			min-width:300px;
		}
		#three2{
		height:400px;
		width:100%;
		}
	}
	#three{
		text-align:center;
		min-width:300px;
	}
	#a{
		text-align:center;
		margin:1% auto 0% auto;
		padding:0% 4px 0% 4px;
		float:left;
	}
	#h{
		font-family: 'Source Sans Pro', sans-serif;
		font-size:22px;
		padding:10px 10px 0px 10px;
		color:rgb(73,73,73);
		text-align:center;
		line-height:30px;
	}
	#h3{
		font-family: 'Roboto', sans-serif;
		font-size:15px;
		padding:0px 10px 10px 10px;
		color:rgb(103, 103, 103);
		line-height:24px;
		word-spacing:3px;

	}
</style>
<style>
@media screen and (min-width:800px){
	#lang2{
		width:200px;
		height:200px;
	}
	#lang{
	padding:5% 10% 0% 10%;
	}
}

@media screen and (max-width:800px){
	#lang2{
		width:150px;
		height:150px;
	}
	#lang{
	padding:5% 0% 0% 0%;
	}
}
	#lang{
		width:100%;
		height:auto;
		display:inline-block;
	}

	
</style>
<style>
@media screen and (min-width:800px){
	#row{
		height:150%;
	}
	.container{
	     margin:4% 2% 3.5% 2%;
	     width:350px;
	}
}

@media screen and (max-width:800px){
	#row{
		height:210%;
	}
	.container{
	     margin:2% 2% 2% 2%;
	     width:96%;
	}
}
	#row{
		padding:1% 5% 5% 5%;
		min-width:300px;
	}
	#box{
		background:white;
		display:inline-block; 	
		width:100%;
		text-align:center;
		border-radius:0px 0px 5px 5px;
		font-family: 'Source Sans Pro', sans-serif;
		padding:20px 0px;
	}
	#box2{
		background:rgb(255,255,255);
		display:inline-block; 	
		width:100%;
		border-radius:5px 5px 0px 0px;
		text-align:center;
		font-family: 'Source Sans Pro', sans-serif;
		height:60%;
		padding:20px;
	}
	#social{
	    background: linear-gradient(141deg, rgb(50,50,50) 0%, rgb(150,150,150) 51%, rgb(100,100,100) 75%);
	    opacity:1;
		display:inline-block; 	
		width:100%;
		text-align:center;
		height:40%;
		border-radius:0px 0px 5px 5px;
		padding:20px;
		font-family: 'Source Sans Pro', sans-serif;
	}
	.hello {
	  display:inline-block; 	
	  width:100%;
	  height:101%;
	  border-radius:5px;
	  text-align:center;
	  font-family: 'Source Sans Pro', sans-serif;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	}
	.container {
	 min-width:300px;
	 float:left;
	 position:relative;
	 padding:0px;
	 border-radius:5px;
	 display:border-box;
	 box-shadow: 5px 10px 18px rgb(1, 1, 1);
	}
	.image {
	  display: block;
	  width: 100%;
	  height: auto;
	}
	.overlay {
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  height: 100%;
	  width: 100%;
	  opacity: 0;
	  transition: 0.5s ease;
	  background-color: rgb(255,255,255);
	}
	.container:hover .overlay {
	  opacity: 1;
	}
</style>
</head>
<body>

	<div id="top3" style="" >
		<div style="" id="head">
			<a href="home.php" ><p id="header" style="text-shadow: 0px 0px 1px rgb(0,0,0);">Home</p></a>
			<a href="about.php" ><p id="header" style="">About</p></a>
			<a href="contact.php" ><p id="header" style="">Contact</p></a>
			<a href="home.php?id=#row" ><p id="header" style="">Projects</p></a>
		</div>

		<i id="coll" class="material-icons" onclick="myfunc()">menu</i>
		<i id="coll2" style="display:none" class="material-icons" onclick="myfunc2()">close</i>
	</div>
	<div style="" id="side">
		<a href="home.php" style="text-decoration:none;"><p id="side2" style="text-shadow: 0px 0px 1px rgb(0,0,0);">Home</p></a>
		<a href="about.php" style="text-decoration:none;"><p id="side2" style="">About</p></a>
		<a href="contact.php" style="text-decoration:none;"><p id="side2" style="">Contact</p></a>
		<a href="home.php?id=#row" style="text-decoration:none;"><p id="side2" style="">Projects</p></a>
	</div>

	<div id="main">
		<center>
			<div style="height:100%;position:relative;">
				<div style="width:150px;height:150px;border-radius:50%;overflow:hidden;">
					<img src="y2.png" style="width:100%">
				</div> 
				<div id="">
					<p style="font-family: 'Quicksand', sans-serif;font-size:24px;letter-spacing:1px;;padding-top:10px;color:rgb(33, 25, 27);font-weight:500;text-shadow: 0px 0px 1px rgb(0,0,0);">Sajal Rai</p>
					<p style="font-family: 'Quicksand', sans-serif;font-size:16px;;color:rgb(5,5,5);;word-spacing:3px;">Computer Programmer, Web and <br>Android app Developer</p>
				</div>
			</div>
		</center>
	</div>


	<div id="main2">
		<center>
			<p style="font-family: 'Source Sans Pro', sans-serif;font-size:43px;padding:5% 10px 5px 10px;color:rgb(224,235,226);text-align:center;line-height:30px;text-shadow: 0 0 2px white;">Our Experties</p>
			<p style="font-family: 'Roboto', sans-serif;font-size:24px;padding:10px 10px 10px 10px;color:rgb(200, 201, 201);line-height:24px;word-spacing:3px;">We Produce high quality responsive websites and exceptional user experience.</p>

			<div id="three" style="width:100%;">
				<div id="a">
					<img src="responsive.png" style="height:150px;">
					<p id="h">Responsive Design</p>
					<p id="h3">Look amazing on every screen with a mobile-friendly version of your website.</p>
				</div>

				<div id="a">
					<img src="speed.png" style="height:150px;">
					<p id="h">Fast Loading Time</p>
					<p id="h3">We develop high-performance websites, as performance is very important </p>
				</div>

				<div id="a">
					<img src="sequrity.png" style="height:150px;">
					<p id="h">Secure</p>
					<p id="h3">Security is very imprtant, that's why we make your sites 100% secure. </p>
				</div>
			</div>
		</center>
	</div>

	<div id="main3" style="">
		<p style="font-family: 'Source Sans Pro', sans-serif;font-size:43px;padding:5% 10px 5px 10px;color:rgb(224,235,226);text-align:center;line-height:30px;text-shadow: 0 0 2px white;">Experienced In</p>
		<p style="font-family: 'Roboto', sans-serif;font-size:24px;padding:10px 10px 10px 10px;color:rgb(201, 201, 201);text-align:center;line-height:24px;word-spacing:3px;">Latest web technologies and frameworkare used in development for your sites.</p>
		<div id="lang">
			<?php 
				$qry ="select * from languages";
				$result = mysqli_query($c,$qry);
				$row = mysqli_num_rows($result);
				while($row = mysqli_fetch_array($result)){
			?>
		
			<div id="lang2" style="float:left;margin:0% 3% 2% 3%;">
				<img class="img" src="<?php echo $row['images'];?>" style="width:100%;vertical-align:middle">
			</div>	
			<?php } ?> 
		</div>
	</div>

	<div id="row" style="">
		<p style="font-family: 'Source Sans Pro', sans-serif;font-size:43px;padding:5% 10px 5px 10px;color:rgb(224,235,226);text-align:center;line-height:30px;text-shadow: 0 0 2px white;">Our Projects</p>
		<p style="font-family: 'Roboto', sans-serif;font-size:24px;padding:10px 10px 10px 10px;color:rgb(201, 201, 201);text-align:center;line-height:24px;word-spacing:3px;">We have developed many websites and Android Application for our happy customers.</p>
		<?php
			$qry ="select * from portfolio";
			$result = mysqli_query($c,$qry);
			$row = mysqli_num_rows($result);
			while($row = mysqli_fetch_array($result)){
		?>
		<center>
			<div class="container"  id="col" >
			 	<embed src="<?php echo $row['images'];?>" style="width:100%;border-radius:5px 5px 0px 0px;" class="image">
				<div  id="box">
					<p style="color:black;font-size:18px;font-style:bold;"><?php echo $row['name'];?></p>
					<p style="color:gray;font-size:15px;"><?php echo $row['details'];?></p>
				</div>
				<div class="overlay" >
					<div class="hello">
					<div  id="box2" style="">
						<p style="color:black;font-size:18px;font-style:bold;"><?php echo $row['name'];?></p>
						<p style="color:black;font-size:15px;"><?php echo $row['details'];?></p>
					</div>
					<div id="social" style="">
						<div style="padding:10px">
							<a href="<?php echo $row['link'];?>"><img src="branchbl.png" style="width:40px;margin:10px"><a/>
							<a href="<?php echo $row['git'];?>"><img src="git.png" style="width:40px;margin:10px"><a/>
							<a href="http://localhost/<?php echo $row['videos'];?>"><img src="share1.png" style="width:40px;margin:10px"></a>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</center>
		<?php } ?>
	</div>

<div id="main5" style="width:100%;padding:2% 0%;">

<center>

	
		<a href="http://instagram.com/business_sense_007"><img src="ins.png" style="width:50px;margin:30px"><a/>
		<a href="httt://github.com/sajal309"><img src="git.png" style="width:50px;margin:30px"></a>
		<a href="SajalRai96309@gmail.com"><img src="ma.png" style="width:50px;margin:30px"></a>
		<p style="font-family: 'Source Sans Pro', sans-serif;;color:black;font-size:18px;padding-top:10px;text-shadow: 0px 0px 1px rgb(0,0,0);">&copy; All Rights Reserved.</p>  

	</center>	
</div>

</body>
</html>
		
		








		
