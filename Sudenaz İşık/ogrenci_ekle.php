<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $yas = $_POST["yas"];
    $email = $_POST["email"];

    $sql = "INSERT INTO ogrenciler (isim, soyisim, yas, email) VALUES ('$isim', '$soyisim', $yas, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarıyla eklendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Ekle</title>
</head>
<body>
    <h1>Yeni Öğrenci Ekle</h1>
    <form method="post" action="">
        İsim: <input type="text" name="isim"><br>
        Soyisim: <input type="text" name="soyisim"><br>
        Yaş: <input type="number" name="yas"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Ekle">
    </form>
    <br>
    <a href="index.php">Geri Dön</a>
</body>
</html>
