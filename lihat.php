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
      <li><a href="ppdb.html" >PPDB</a></li>
      <li><a href="lihat.php" class="active">Data Masuk</a></li>
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
            <h1>Data Masuk</h1>
          </div>
          <div align="center" style="border:px solid blue" width="100%">
             <?php
               $fp = fopen ("ppdb2.txt","r");
               echo "<table border=0>";
               while ($isi = fgets($fp,200))
               {
                 $pisah = explode ("|",$isi);
                 echo "<tr><td> NISN </td><td>: $pisah[0]</td></tr>";
                 echo "<tr><td> Nama Siswa </td><td>: $pisah[1]</td></tr>";
                 echo "<tr><td> Jenis Kelamin </td><td>: $pisah[2]</td></tr>";
                 echo "<tr><td> Nomor HP </td><td>: $pisah[3]</td></tr>";
                 echo "<tr><td> Email </td><td>: $pisah[4]</td></tr>";
                 echo "<tr><td> Asal Sekolah </td><td>: $pisah[5]</td></tr>
                       <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
               }
               echo "</table>";
              ?>
            <a href="ppdb.html">Kembali</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <p>copyright@hamizan</p>
    </div>
</body>

</html>
