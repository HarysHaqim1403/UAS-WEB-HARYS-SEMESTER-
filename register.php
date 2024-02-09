<?php
include 'assets/php/koneksi.php';

error_reporting(0);
 
session_start();
if (isset($_SESSION['level'])) {
  echo "<script>alert('Logout terlebih dahulu!');
  window.location.replace('home.php');</script>";}


if (isset($_POST['submit'])) {
  $nama      = $_POST['nama'];
  $nik        = $_POST['nik'];
  $email   = $_POST['email'];
  $no_hp    = $_POST['no_hp'];
  $username     = $_POST['username'];
  $password  = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $level     = ($_POST['level']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($koneksi, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (nama, nik, email, no_hp, username, password, level)
                VALUES ('$nama', '$nik', '$email', '$no_hp', '$username', '$password', '$level')";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi anda berhasil!');
            window.location.replace('login.php');</script>";
            $nama = "";
            $nik = "";
            $email = "";
            $no_hp = "";
            $username = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
            $level = "";
        } else {
            echo "<script>alert('Maaf, Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Maaf, Email Sudah Terdaftar.')</script>";
    }
     
} else {
    echo "<script>alert('Password tidak sesuai!')</script>";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register | Arasy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/session/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThC8ZmNX4m_cz2CG4GQT6fRbPION6K24oBpQ&usqp=CAU" type="image/x-icon">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/session/css/style.css">
	</head>

  <body>

<div class="wrapper" style="background-color: #ededed">
  <div class="inner">
    <div class="image-holder">
      <img src="assets/img/bg.jpg" alt="">
    </div>
    <form method="POST">
      <h3>Daftar</h3>
      <!--Nama-->
      <div class="form-wrapper">
        <input type="text" placeholder="Nama Lengkap" 
        name="nama" class="form-control" value="<?php echo $nama; ?>" 
        required autofocus>
        <i class="zmdi zmdi-account"></i>
      </div>
      <!--Email-->
      <div class="form-wrapper">
        <input type="email" placeholder="Email"
        name="email" class="form-control" value="<?php echo $email; ?>"
        required>
        <i class="zmdi zmdi-email"></i>
      </div>
      <!--No. Telepon-->
      <div class="form-group">
      <input type="text"  placeholder="NIK" name="nik"
      class="form-control" value="<?php echo $nik; ?>" required>
      <!--Jenis Kelamin-->
      <input type="text"  placeholder="No. Telepon" name="no_hp"
      class="form-control" value="<?php echo $no_hp; ?>" required>
      </div>
      <!--Alamat-->
      <div class="form-wrapper">
      <input type="text"  placeholder="Username" name="username"
      class="form-control" value="<?php echo $username; ?>" required>
      <i class="zmdi zmdi-account"></i>
      </div>
      <!--Password-->
      <div class="form-wrapper">
        <input type="password" placeholder="Password"
        name="password" class="form-control" required>
        <i class="zmdi zmdi-lock"></i>
      </div>
      <!--Konfirmasi Password-->
      <div class="form-wrapper">
        <input type="password" placeholder="Konfirmasi Password"
         name="cpassword" class="form-control" required>
        <i class="zmdi zmdi-lock-outline"></i>
      </div>

      <select name="level" hidden required>
          <option value="masyarakat" hidden selected>Masyarakat</option>
        </select>
        Sudah memiliki akun?<a href="login.php"> Login</a>
      <button type="submit" name="submit">Daftar
        <i class="zmdi zmdi-arrow-right"></i>
      </button>
    </form>
  </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>