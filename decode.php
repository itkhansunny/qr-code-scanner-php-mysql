<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: index.php");
    die();
}

require "vendor/autoload.php";
include("db.php");

$qrcode = new QrReader($_FILES['qrimage']['tmp_name']);
$text = $qrcode->text();
echo "QR code Data: ". $text."</br>";

if(is_string($text)){
    $sql = "SELECT * FROM qrcodes where code='$text'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        echo "Database Data: "."ID: " . $row["id"]. " - Code: " . $row["code"]. "<br>";
    } else {
        echo "0 results";
    }
}
