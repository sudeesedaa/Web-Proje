<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM ogrenciler WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla silindi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Sil</title>
</head>
<body>
    <h1>Öğrenci Sil</h1>
    <br>
    <a href="index.php">Geri Dön</a>
</body>
</html>
