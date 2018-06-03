<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed:300" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	  
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
</style>

<style>
@media screen and (max-width:800px){	
	#three{
		width:95%;
		height:auto;
	}
}

@media screen and (min-width:800px){
	#three{
		width:55%;
		height:auto;
	}
}

#one{
	background-image:url("download.jpg");
	background-size:cover;
	background-width:50%;
	background-position:50% 50%;
	margin-left:auto;
	margin-right:auto;
	display:block;
	width:100%;
	height:90%;
}
#two{
background:rgb(0,0,0,0.5);	
height:100%;
width:100%;
padding-top:3.5%;
}
#three{
	background:rgb(105,105,105,0.5);
	box-shadow: 5px 8px 20px rgba(0, 0, 0, 1);
	padding-top:2%;
}
#img{
	width:50%;
	padding:25px;	
}
#p1{
	padding:20px 30px;
	font-size:16px;
	font-family: 'Roboto', sans-serif;
	color:rgb(255,255,255,0.7);
	word-spacing:1.5px;
	letter-spacing:1px;
	line-height:25px;
}
#p2{
	padding:0px 30px 20px 30px;
	font-size:16px;
	font-family: 'Roboto', sans-serif;
	color:rgb(255,255,255,0.7);
	word-spacing:1.5px;
	letter-spacing:1px;
	line-height:25px;
}
#p3{
	padding:0px 30px 0px 30px;
	font-size:16px;
	font-family: 'Roboto', sans-serif;
	color:rgb(255,255,255,0.7);
	word-spacing:1.5px;
	letter-spacing:1px;
	line-height:25px;
}
#span{
	font-weight:bold;
}
</style>
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
	  </head>
	  
	  <body>
			<div id="top3" style="" >
						
						<div style="" id="head">
												<a href="home.php" ><p id="header" >Home</p></a>
												<a href="about.php" ><p id="header" style="">About</p></a>
												<a href="contact.php" ><p id="header" style="text-shadow: 0px 0px 1px rgb(0,0,0);">Contact</p></a>
												<a href="home.php?id=#row" ><p id="header" style="">Projects</p></a>		
						</div>
						
						<i id="coll" class="material-icons" onclick="myfunc()">menu</i>
						<i id="coll2" style="display:none" class="material-icons" onclick="myfunc2()">close</i>
		</div>

		<div style="" id="side">
								<a href="home.php" style="text-decoration:none;"><p id="side2" style="">Home</p></a>
								<a href="about.php" style="text-decoration:none;"><p id="side2" style="">About</p></a>
								<a href="contact.php" style="text-decoration:none;"><p id="side2"style="text-shadow: 0px 0px 1px rgb(0,0,0);">Contact</p></a>
								<a href="home.php?id=#row" style="text-decoration:none;"><p id="side2" style="">Projects</p></a>
		</div>
		
		<div id="one" >
		<div id="two" >
		
		<center><div id="three">
		
		<div style="width:150px;height:150px;border-radius:50%;overflow:hidden;">
		<img src="y2.png" style="width:100%"></div>
		<p style="font-family: 'Quicksand', sans-serif;font-size:24px;letter-spacing:1px;;padding-top:10px;;;color:rgb(251, 176, 136);font-weight:bold">Sajal Rai</p>
		
		<p id="p1">
		
		<span id="span">@Mail</span> : sajalrai96309@gmail.com
		</p>
		<p id="p2">		
	
		<span id="span">#Phone no</span> : 6261541723
		</p>
		<p id="p3">		
		<span id="span">*Address</span> : Ashoka Garden, Bhopal
		</p>

		<div style="padding:10px 20px 20px 20px">
		<a href="http://instagram.com/business_sense_007"><img src="ins.png" style="width:50px;margin:20px"><a/>
		<a href="http://github.com/sajal309"><img src="git.png" style="width:50px;margin:20px"></a>
		<a href="Sajalrai96309@gmail.com"><img src="ma.png" style="width:50px;margin:20px"></a>
		
		</div>
		
		</div></center>
		
		</div>
		</div>
		
		</body>
		</html>