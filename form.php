<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Form.PHP</title>
</head>

<body>
  <?php

$nama = $email = $password = $jenis_kelamin = $hobby = $agama = $catatan ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $jenis_kelamin = test_input($_POST["jenis_kelamin"]);
  $hobby = test_input($_POST["hobby"]);
  $agama = test_input($_POST["agama"]);
  $catatan = test_input($_POST["catatan"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Data Yang Di Input</h2>";
echo "Nama : ".$nama;
echo "<br>";
echo "Email : ".$email;
echo "<br>";
echo "Password : ".$password;
echo "<br>";
echo "Jenis Kelamin : ".$jenis_kelamin;
echo "<br>";
echo "Hobby : ".$hobby;
echo "<br>";
echo "Agama : ".$agama;
echo "<br>";
echo "Catatan : ".$catatan;
?>
</body>

</html>
