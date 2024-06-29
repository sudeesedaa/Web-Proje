<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM ogrenciler WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $yas = $_POST["yas"];
    $email = $_POST["email"];

    $sql = "UPDATE ogrenciler SET isim='$isim', soyisim='$soyisim', yas=$yas, email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla güncellendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Güncelle</title>
</head>
<body>
    <h1>Öğrenci Güncelle</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        İsim: <input type="text" name="isim" value="<?php echo $row['isim']; ?>"><br>
        Soyisim: <input type="text" name="soyisim" value="<?php echo $row['soyisim']; ?>"><br>
        Yaş: <input type="number" name="yas" value="<?php echo $row['yas']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" value="Güncelle">
    </form>
    <br>
    <a href="index.php">Geri Dön</a>
</body>
</html>
