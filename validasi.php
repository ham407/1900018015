<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/input.css">
  <link rel="stylesheet" type="text/css" href="css/tombol.css">
  <link rel="stylesheet" type="text/css" href="css/typefile.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <title>PPDB Online</title>
</head>

<body>
  <marquee scrolldelay="10" loop="infinite" bgcolor="black" style="font-family:oswald; font-size:20px; color:#ffffff; font-weight: bold;" title="click here" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">PROGRAM PENERIMAAN
    PENERIMAAN PESERTA DIDIK BARU (PPDB)
  </marquee>
  <div class="header">
    <h1>PPDB ONLINE</h1>
    (SMK NEGERI 1 PADAHERANG)
  </div>
  <div class="topnav">
    <ul>
      <li><a href="ppdb.html" class="active">PPDB</a></li>
      <li><a href="cek.html">Cek Hasil</a></li>
      <li style="float: right">
        <a href="admin.html">ADMIN</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <script type='text/javascript'>
          var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
          var date = new Date();
          var day = date.getDate();
          var month = date.getMonth();
          var thisDay = date.getDay(),
            thisDay = myDays[thisDay];
          var yy = date.getYear();
          var year = (yy < 1000) ? yy + 1900 : yy;
          document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        </script>
        <div id="card-content">
          <div id="card-title">
            <h1>PENDAFTARAN BERHASIL TERKIRIM</h1>
          </div>
          <div align="center" style="border:px solid blue" width="100%">
            <?php #script untuk upload di ppdb.txt

              $fp = fopen ("ppdb.txt","a+");

              $nisn = $_POST['nisn'];
              $nama1 = $_POST['nama1'];
              $gender = $_POST['gender'];
              $ttl = $_POST['ttl'];
              $hp1 = $_POST['hp1'];
              $email = $_POST['email'];
              $alamat = $_POST['alamat'];
              $agama = $_POST['agama'];
              $nama2 = $_POST['nama2'];
              $hp2 = $_POST['hp2'];
              $sekolah = $_POST['sekolah'];

              fputs($fp, "Data PPDB
              NISN\t\t\t: $nisn
              Nama Siswa\t\t: $nama1
              Jenis Kelamin\t\t: $gender
              Tempat Tanggal Lahir\t: $ttl
              Nomor HP\t\t\t: $hp1
              Email\t\t\t: $email
              Alamat\t\t\t: $alamat
              Agama\t\t\t: $agama
              Nama Orangtua\t\t: $nama2
              No. HP Ortu\t\t: $hp2
              Asal Sekolah\t\t: $sekolah\n=========================================================================================\n");
              fclose($fp);

             ?>
             <?php #script untuk upload di ppdb2.txt

               $fp = fopen ("ppdb2.txt","a+");

               $nisn = $_POST['nisn'];
               $nama1 = $_POST['nama1'];
               $gender = $_POST['gender'];
               $hp1 = $_POST['hp1'];
               $email = $_POST['email'];
               $sekolah = $_POST['sekolah'];

               fputs($fp, "$nisn|$nama1|$gender|$hp1|$email|$sekolah|\n");
               fclose($fp);

              ?>

            <?php #script php untuk file1
              $lokasi_file = $_FILES['file1']['tmp_name'];
              $nama_file = $_FILES['file1']['name'];
              $direktori = "C:/xampp/htdocs/proyekuas/ijazah/$nama_file";

              ?>
            <?php #script php untuk file2
               $lokasi_file = $_FILES['file2']['tmp_name'];
               $nama_file = $_FILES['file2']['name'];
               $direktori = "C:/xampp/htdocs/proyekuas/skhun/$nama_file";

               ?>

            <?php #script php untuk file3
                $lokasi_file = $_FILES['file3']['tmp_name'];
                $nama_file = $_FILES['file3']['name'];
                $direktori = "C:/xampp/htdocs/proyekuas/ktp/$nama_file";

                ?>
            <a href="lihat.php">Data Pendaftar</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <p>copyright@hamizan</p>
    </div>
</body>

</html>
