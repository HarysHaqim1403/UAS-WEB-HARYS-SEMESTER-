<?php
// menghubungkan php dengan koneksi database
include 'assets/php/koneksi.php';
error_reporting(0);
// mengaktifkan session pada php
session_start();
// jika pegawai sudah login
if ($_SESSION['level'] == "pegawai") {
    echo "<script>alert('Anda telah login sebagai pegawai!');
    window.location.replace('pegawai');</script>";}
// jika masyarakat sudah login
elseif ($_SESSION['level'] == "masyarakat") {
    echo "<script>alert('Anda telah login!');
    window.location.replace('home.php');</script>";}
// menangkap data yang dikirim dari form login
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
// menyeleksi data user dengan email dan password yang sesuai
  $sql = mysqli_query($koneksi, "SELECT * FROM users
  WHERE email='$email' AND password='$password'");
// menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($sql);
// cek apakah email dan password di temukan pada database
  if ($cek > 0) {
      $data = mysqli_fetch_assoc($sql);
// cek jika user login sebagai pegawai
      if($data['level']=="pegawai"){
// buat session login dan nama pegawai
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['no_hp'] = $data['no_hp'];
        $_SESSION['alamat'] = $data['alamat'];

		$_SESSION['level'] = "pegawai";
// alihkan ke halaman pegawai
        header("location: pegawai/index.php");
// cek jika user login sebagai masyarakat
	}else if($data['level']=="masyarakat"){
// buat session login dan nama masyarakat
		$_SESSION['nama'] = $data['nama'];
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['no_hp'] = $data['no_hp'];
    $_SESSION['alamat'] = $data['alamat'];
		$_SESSION['level'] = "masyarakat";
// alihkan ke halaman home
		header("location: home.php");
    }
// jika email dan pasword salah maka tampilkan error
    else{
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }}
    else{
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login | Arasy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/session/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThC8ZmNX4m_cz2CG4GQT6fRbPION6K24oBpQ&usqp=CAU" type="image/x-icon">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/session/css/style.css">
	</head>

  <body>
  <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
<div class="wrapper" style="background-color: #ededed">
  <div class="inner">
    <div class="image-holder">
      <img src="assets/img/bg.jpg" alt="">
    </div>
    <form method="POST">
      <h3>login</h3>
      <!--Email-->
      <div class="form-wrapper">
        <input type="email" placeholder="Masukkan Email"
        name="email" class="form-control" value="<?php echo $email; ?>"
        required autofocus>
        <i class="zmdi zmdi-email"></i>
      </div>


      <!--Password-->
      <div class="form-wrapper">
        <input type="password" placeholder="Password"
        name="password" class="form-control" required>
        <i class="zmdi zmdi-lock"></i>
      </div>
      Belum memiliki akun?<a href="register.php"> Daftar</a>
      <button type="submit" name="submit">Login
        <i class="zmdi zmdi-arrow-right"></i>
      </button>
    </form>
  </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
