<?php
$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Text Reveal on Hover</title>
		<link href="img/favicon.ico" rel="icon" type="image">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/navbarclock.js"></script>
		<style>
			span.title {
				font-size:18px;
				line-height:20px;
				padding:40px 5px 0;
				display:block;
				text-align:center;
				font-weight:bold;
			}
			div.piclink > a,
			div.piclink > a img{
				display: block;
			}
			div.piclink > a{
				height: 200px;
				width:143px;
				position: relative;
				padding: 10px;
				background:green;
				border-radius: 4px 4px 4px 4px;
			}
			div.piclink > a span{
				position: absolute;
				width:123px;
				top: 10px;
				left: 10px;
				text-align: center;
				color:black;
				font-size:15px;
				opacity: 0;
				background: lightblue;
				transition: opacity 0.3s linear;
				padding-top:-10px;
			}
			div.piclink > a:hover span{
				opacity: 1;
				height:180px;
			}
			
			.piclink{margin-top:10em;}
			span.title{font-family:Rockwell;font-weight:bold;}
		</style>
    </head>
		<body onload="startTime()">
			<nav class="navbar-inverse" role="navigation">
				<a href="https://www.eliasngumbipro.com" target="_blank">
					<img src="img/niemand.png" class="hederimg">
				</a>
				<div id="clockdate">
					<div class="clockdate-wrapper">
						<div id="clock"></div>
						<div id="date"><?php echo date('l, F j, Y'); ?></div>
					</div>
				</div>
				<div class="pagevisit">
					<div class="visitcount">
						<?php
						$handle = fopen($f, "r");
						$counter = ( int ) fread ($handle,20) ;
						fclose ($handle) ;
						$counter++ ;
						echo "This Page is Visited ".$counter." Times";
						$handle =  fopen($f, "w" ) ;
						fwrite($handle,$counter) ;
						fclose ($handle) ;
						?>
					</div>
				</div>
			</nav>
			<center>
				<div class="piclink">
					<a href="#">
						<span class="title">EDGE OF TOMORROW <br><br><br><br>2014<br><br></span>
						<img src="edge of tomorrow.jpg"/>	
					</a>
					<p>Hover Your Mouse Pointer on the Image to See Effect</p>
					<br><br><br><br>
					<p style="margin-top:-60px;">
						<a href="https://www.eliasngumbipro.com/htmlcss/11285/text-reveal-mouse-hover.html" class="btn btn-primary" target="_blank">Source Code</a>
					</p>
				</div>
			</center>
		</body>	
</html>
