<?php
include 'assets/php/koneksi.php';
session_start();

if (isset($_POST['submit'])) {
  $nama      = $_POST['nama'];
  $no_hp        = $_POST['no_hp'];
  $judul   = $_POST['judul'];
  $isi    = $_POST['isi'];

    $sql = "SELECT * FROM pengaduan";


        $sql = "INSERT INTO pengaduan (nama, no_hp, judul, isi)
                VALUES ('$nama', '$no_hp', '$judul', '$isi')";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            echo "<script>alert('Selamat, pengaduan anda berhasil berhasil!');
            window.location.replace('home.php');</script>";
            $nama = "";
            $no_hp = "";
            $judul = "";
            $isi = "";
        } else {
            echo "<script>alert('Maaf, Terjadi kesalahanb.')</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Arasy Report Public Room</title>

  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThC8ZmNX4m_cz2CG4GQT6fRbPION6K24oBpQ&usqp=CAU" type="image/x-icon">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Alertify -->
  <link href="assets/css/alertify.min.css" rel="stylesheet" type='text/css' />
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="assets/css/creative.css" rel="stylesheet">

  <style type="text/css">
    header.masthead {
      padding-top: 10rem;
      padding-bottom: calc(10rem - 72px);
      background: url(assets/img/bg01.jpg);

      background: linear-gradient(to bottom, rgba(00, 00, 00, .4) 0, rgba(00, 00, 00, .4) 100%), url("assets/img/bg01.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      width: 100%;
      height: 100vh;
      /* responsive height */
    }

    option {
      background-color: #332D2D;
      color: white;

    }
  </style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <?php
  include 'assets/menu/navbar.php';
  ?>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-info" href="proses-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-white">Website terbaik untuk penyaluran pengaduan</h1>
          <hr class="divider-primary my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <h4 class="text-white  mb-5">"Arasy Report"</h4>
          <a class="btn btn-info btn-xl js-scroll-trigger" href="#about">Lihat Sekarang</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-light" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-black ">Arasy Report</h2>
          <hr class="divider-primary my-3">
          <h5 class="text-black mb-4">Website terbaik untuk penyaluran pengaduan</h5>
          <br>  
          <a class="btn btn-info btn-xl js-scroll-trigger" href="#online">Buat Pengaduan</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">PELAYANAN</h2>
      <hr class="divider-primary my-4">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-clock text-info mb-4"></i>
            <h3 class="h4 mb-2">Proses Cepat</h3>
            <p class="text-muted mb-0">Melayani Pengaduan Anda Dengan Cepat Tidak Seperti Web-Web Lain Di Negera Wakanda</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-lock text-info mb-4"></i>
            <h3 class="h4 mb-2">Peyimpanan Informasi Yang Aman</h3>
            <p class="text-muted mb-0">Mengelola Informasi Dengan Perlindungan Yang Berada Pada Standart Keamanan Universe</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-info mb-4"></i>
            <h3 class="h4 mb-2">Sepenuh Hati</h3>
            <p class="text-muted mb-0">Melayani anda dengan baik dan semaksimal mungkin</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  if (isset($_SESSION['level'])) {

    if ($_SESSION['level']=="pegawai") { ?>
      <!-- Portfolio Section -->
    <section class="page-section text-dark" id="online">
      <div class="container">
        <h2 class="mb-1 text-center">Pegawai</h2>
        <hr class="divider-primary my-4">
        <br><br>
        <center>
          <a class="btn btn-info btn-xl js-scroll-trigger" href="pegawai/index.php">Halaman Pegawai</a>
          </center>
      </div>
    </section>
    <?php }
    elseif ($_SESSION['level']=="masyarakat") { ?>
      <!-- Portfolio Section -->
      <section class="page-section text-dark" id="online">
        <div class="container">
          <h2 class="mb-1 text-center">PENGADUAN</h2>
    
          <hr class="divider-primary my-4">
          <br>
          <br>
          <form name="" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <div class="card" style="width: 30rem;">
                  <div class="card-body">
                    <h5 class="card-title text-center">DATA DIRI</h5>
                    <hr class="divider-primary my-4">
                    <div class="form-group">
                      <label class="text-muted">Nama</label>
                      <input type="text" value="<?php echo $_SESSION['nama']; ?>" name="nama" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                      <label class="text-muted">Email</label>
                      <input type="text" value="<?php echo $_SESSION['email']; ?>" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                      <label class="text-muted">NIK</label>
                      <input type="number" value="<?php echo $_SESSION['nik']; ?>"  class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                      <label class="text-muted">No. Telepon</label>
                      <input type="text" value="<?php echo $_SESSION['no_hp']; ?>" name="no_hp" class="form-control" required readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card" style="width: 35rem;">
                  <div class="card-body">
                    <h5 class="card-title text-center">PENGADUAN</h5>
                    <hr class="divider-primary my-4">
                    <div class="form-group">
                      <label class="text-muted">Judul Pengaduan</label>
                      <input type="text" value="" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="text-muted">Isi Pengaduan</label>
                      <textarea id="" cols="30" rows="10" name="isi" class="form-control" required></textarea>
                    </div>
                    <button class="btn btn-info js-scroll-trigger" type="submit" name="submit">Simpan</button>
                  </div>
                </div>
              </div>
              <br><br>
          </form>
        </div>
      </section>
    <?php } }
else { ?>
  <section class="page-section text-dark" id="online">
    <div class="container">
      <h2 class="mb-1 text-center">PENGADUAN</h2>
      <hr class="divider-primary my-4">
      <br><br>
      <center>
        <a class="btn btn-info btn-xl js-scroll-trigger" href="login.php">Silahkan Login Terlebih Dahulu</a>
        </center>
    </div>
  </section>
  <?php
} ?>
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">KONTAK</h2>
          <hr class="divider-primary my-4">
        </div>
      </div><br>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fab fa-whatsapp fa-4x mb-3 text-muted"></i>
          <span class="d-block text-muted decoration-none mb-5">+6285155278021</span>
        </div>
        <div class="col-lg-4 mr-6 text-center">
          <i class="fas fa-store-alt fa-4x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <span class="d-block text-muted decoration-none mb-5">Jl. Karya Bakti 3 Desa Sukamelang Kelurahan Sukamelang Kecamatan Subang Kabupaten Subang</span>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fab fa-instagram fa-4x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <span class="d-block text-muted decoration-none">@Harys.haqim.kurniawan@gmail.com</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy;2023 - Arasy Company | Created by <span href='' class="text-primary">Harys_Haqim</span>
      </div>
    </div>
  </footer>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/creative.min.js"></script>
  <script src="assets/js/alertify.min.js"></script>

  <script type="text/javascript">
    var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    var time = new Date();
    var waktu = time.getHours() + ":" + checkTime(time.getMinutes());

    $('document').ready(function() {
      var d = new Date();
      var tglPesan = d.getDate() + " " + bulan[d.getMonth()] + " " + d.getFullYear() + " , " + waktu + " WIB";
      document.getElementById('tglPesan').value = tglPesan;
      document.getElementById('harga1').value = 0;
      document.getElementById('harga2').value = 0;
      document.getElementById('harga3').value = 0;
      document.getElementById('harga4').value = 0;
      document.getElementById('harga5').value = 0;
    });

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }

    function hitungLamaSewa(lamaSewa) {
      if (lamaSewa == "") {
        document.getElementById('tglKembali').value = '';
        document.getElementById('totalBayar').value = '';
      } else {
        if (lamaSewa < 1 || lamaSewa > 30) {
          alertify.dialog('alert').set({
            transition: 'fade',
            message: 'Batas Penyewaan Alat Camping Minimal 1 Hari dan Maksimal 30 Hari',
            frameless: true
          }).show();
          document.getElementById('tglKembali').value = '';
          document.getElementById('totalBayar').value = '';
          document.getElementById('lamaSewa').value = '';
        } else {
          var hariKedepan = new Date(new Date().getTime() + (lamaSewa * 24 * 60 * 60 * 1000));
          var tglKembali = hariKedepan.getDate() + " " + bulan[hariKedepan.getMonth()] + " " + hariKedepan.getFullYear() + " , " + waktu + " WIB";
          document.getElementById('tglKembali').value = tglKembali;

          var byk = $("input[name='qty[]']").map(function() {
            return $(this).val();
          }).get();
          var harga = $("input[name='harga[]']").map(function() {
            return $(this).val();
          }).get();
          var total = 0;
          for (var i = 0; i < harga.length; i++) {
            var hg = harga[i].replace('.', '');
            var subTotal = hg * parseInt(byk[i]);
            var total = total + subTotal;
          }
          var bayar = total * lamaSewa;
          document.getElementById('totalBayar').value = rupiah(bayar);

        }
      }
    }

    function rupiah(bilangan) {
      var number_string = bilangan.toString(),
        sisa = number_string.length % 3,
        rupiah = number_string.substr(0, sisa),
        ribuan = number_string.substr(sisa).match(/\d{3}/g);

      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      return rupiah;
    }

    <?php echo $dataBrg; ?>

    function prosesBarang(id, index) {
      if (id == 0) {
        document.tambah.nama.value = "";
        document.tambah.harga.value = "";
      } else {
        switch (index) {
          case 1: {
            document.getElementById('idBarang1').value = id;
            document.getElementById('harga1').value = rupiah(dtbrg[id].hargaSewa);
            document.getElementById('tersedia1').value = dtbrg[id].qty;
            break;
          }
          case 2: {
            document.getElementById('idBarang2').value = id;
            document.getElementById('harga2').value = rupiah(dtbrg[id].hargaSewa);
            document.getElementById('tersedia2').value = dtbrg[id].qty;
            break;
          }
          case 3: {
            document.getElementById('idBarang3').value = id;
            document.getElementById('harga3').value = rupiah(dtbrg[id].hargaSewa);
            document.getElementById('tersedia3').value = dtbrg[id].qty;
            break;
          }
          case 4: {
            document.getElementById('idBarang4').value = id;
            document.getElementById('harga4').value = rupiah(dtbrg[id].hargaSewa);
            document.getElementById('tersedia4').value = dtbrg[id].qty;
            break;
          }
          case 5: {
            document.getElementById('idBarang5').value = id;
            document.getElementById('harga5').value = rupiah(dtbrg[id].hargaSewa);
            document.getElementById('tersedia5').value = dtbrg[id].qty;
            break;
          }
        }
      }
    }


    function cekStok(qty, inx) {
      switch (inx) {
        case 1: {
          var tersedia1 = document.getElementById('tersedia1').value;
          if (qty > parseInt(tersedia1)) {
            alertify.alert('Stok Hanya Tersedia ' + tersedia1 + ' unit', function() {
              document.getElementById('qty1').value = '';
            }).setHeader(' ').set({
              closable: false,
              transition: 'fade'
            });
          }
          break;
        }
        case 2: {
          var tersedia2 = document.getElementById('tersedia2').value;
          if (qty > parseInt(tersedia2)) {
            alertify.alert('Stok Hanya Tersedia ' + tersedia2 + ' unit', function() {
              document.getElementById('qty2').value = '';
            }).setHeader(' ').set({
              closable: false,
              transition: 'fade'
            });
          }
          break;
        }
        case 3: {
          var tersedia3 = document.getElementById('tersedia3').value;
          if (qty > parseInt(tersedia3)) {
            alertify.alert('Stok Hanya Tersedia ' + tersedia3 + ' unit', function() {
              document.getElementById('qty3').value = '';
            }).setHeader(' ').set({
              closable: false,
              transition: 'fade'
            });
          }
          break;
        }
        case 4: {
          var tersedia4 = document.getElementById('tersedia4').value;
          if (qty > parseInt(tersedia4)) {
            alert('Stok Hanya Tersedia ' + tersedia4 + ' unit');
            document.getElementById('qty4').value = '';
          }
          break;
        }
        case 5: {
          var tersedia5 = document.getElementById('tersedia5').value;
          if (qty > parseInt(tersedia5)) {
            alert('Stok Hanya Tersedia ' + tersedia5 + ' unit');
            document.getElementById('qty5').value = '';
          }
          break;
        }
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      var max_fields = 5; //maximum input boxes allowed
      var wrapper = $(".input_fields_wrap"); //Fields wrapper
      var add_button = $(".add_field_button"); //Add button ID

      var x = 1; //initlal text box count
      $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
          x++; //text box increment
          $(wrapper).append('<div class="tambah' + x + '"><div class="row"><div class="col-lg-6 col-sm-12"><div class="form-group"><input type="hidden" name="idBarang[]" id="idBarang' + x + '"><input type="hidden" id="tersedia' + x + '"><select name="kode" name="barang[]" class="form-control"  onchange="prosesBarang(this.value , ' + x + ')" ><option value="" hidden>--Pilih Barang--</option><?php
                                                                                                                                                                                                                                                                                                                                                                                                          $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                                                                                                                                                                                                                                                                                                                                                                                                          $dataBrg = "var dtbrg = new Array();\n";
                                                                                                                                                                                                                                                                                                                                                                                                          while ($res = mysqli_fetch_array($sql)) {
                                                                                                                                                                                                                                                                                                                                                                                                            $nama = $res['nama_barang'] . " (" . $res['qty'] . " unit)";
                                                                                                                                                                                                                                                                                                                                                                                                            $dataBrg .= " dtbrg ['" . $res['id_barang'] . "'] = {namaBarang:'" . $nama . "',hargaSewa:'" . $res['harga_sewa'] . "', qty:'" . $res['qty'] . "'};\n"; ?><option value="<?php echo $res['id_barang'] ?>"><?= $nama; ?></option><?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ?></select></div></div><div class="col-lg-2 col-sm-12"><div class="form-group"><input type="number" name="qty[]" id="qty' + x + '" value="0" onkeyup="cekStok(this.value, ' + x + ')"  required class="form-control"></div></div><div class="col-lg-3 col-sm-12"><div class="form-group"><input type="text" required name="harga[]" id="harga' + x + '" value="0" class="form-control" readonly></div></div><div class="col-lg-1"><button type="button" class="btn btn-sm form-control remove_field"><i class="far fa-window-close text-danger fa-2x"></i></button></div></div></div>');
          //$(wrapper).append('<div><input type="text" value="'+x+'" name="mytext[]"/><a href="#" class="remove_field" >Remove</a></div>'); //add input box
        } else {
          alertify.alert('Maksimal Menyewa ' + max_fields + ' Barang', function() {
            document.getElementById('qty1').value = '';
          }).setHeader(' ').set({
            closable: false,
            transition: 'fade'
          });
        }
      });

      $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
        e.preventDefault();
        $('.tambah' + x + '').remove();
        x--;
      })
    });
  </script>
</body>

</html>