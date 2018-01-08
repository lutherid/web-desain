<!DOCTYPE html>
<html>
<head>
	<title>Latihan Desain</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- bagian header template -->
	<header>
		<img src="gambar/header.jpg" style="width: 960px; height: 250px;">
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrapper">
		<!-- bagian menu		 -->
		<nav class="main-navigation" style="background-color: #FF0000;">
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li class="has-mega-menu"><a href="#">Paket Wisata</a>
					<div class="mega-menu">
						<div class="column">
							<div class="col">
								<h3>Paling Laris</h3>
								<ul>
									<li><a href="#">Bali</a></li>
									<li><a href="#">Yogyakarta</a></li>
									<li><a href="#">Lombok</a></li>
									<li><a href="#">Raja Ampat</a></li>
								</ul>
							</div>
							<div class="col">
								<h3>Paket Hemat</h3>
								<ul>
									<li><a href="#">Jepara</a></li>
									<li><a href="#">Semarang</a></li>
									<li><a href="#">Karimun Jawa</a></li>
									<li><a href="#">Bandung</a></li>
								</ul>
							</div>
							<div class="col">
								<h3>Rental Mobil</h3>
								<ul>
									<li><a href="#">Kijang Innova</a></li>
									<li><a href="#">Avanza Velos</a></li>
									<li><a href="#">Xpander</a></li>
									<li><a href="#">Jazz RS</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li><a href="about.php">About</a></li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->

		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget" style="background-color: #FF0000">
				<h2>Widget</h2> 
				<p></p>
			</div>
			<div class="widget" style="background-color: #FF0000">
				<h2>Login</h2>
			<form action="proses/proseslogin.php" method="POST">
				<label>Email</label><br/>
             	<input type="email" name="email" placeholder="Email" /><br/>
             	<label>Password</label><br/>
             	<input type="password" name="password2" placeholder="Password" /><br/>
             	<input type="submit" value="login" style="background-color: white; color: black;" /><br/>
             </form>

             <br/>
    			<p>Jika belum memiliki akun silahkan <a href="signup.php">Register</a> </p>
				
			</div>
			
		</aside>
		<!-- akhir bagian sidebar website -->

		<!-- bagian konten Blog -->
		<div class="blog">
		coba 
		</div>
		<!-- akhir bagian konten Blog -->
		<footer>
		<img src="gambar/footer.jpg">
	</footer>
	</div>

	

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="index.js"></script>
</body>
</html>