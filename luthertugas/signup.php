<!DOCTYPE html>
<html>
<head>
	<title>Latihan Desain</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>

	<!-- bagian header template -->
	<header>
    <img src="gambar/header.jpg" style="width: 960px; height: 250px;">
  </header>
	<!-- akhir bagian header template -->
	
	<div class="wrapper">
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
    <center>
    <h1>Sign up</h1>
    <form action="proses/prosessignup.php" method="POST">
    <input type="text" name="nama" placeholder="Nama" />
    <input type="text" name="umur" placeholder="Umur" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="password" name="password2" placeholder="Retype password" />
    <input type="text" name="negara" placeholder="Negara" />
    <input type="text" name="kota" placeholder="Kota" />
    <textarea type="text" name="tentang" placeholder="Bio"></textarea><br/>
    <input type="submit" name="signup_submit" value="Sign me up" / style="background-color: #FF0000;">
    </form>
    </center>
		
	</div>
	<footer>
    <img src="gambar/footer.jpg">
  </footer>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="index.js"></script>
</body>
</html>