<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nomor = $_POST["nomor"];
    $email = $_POST["email"];
    $tanggal = $_POST["tanggal"];
    $hari = $_POST["hari"];
    $paket = $_POST["paket"];

    echo "Terima kasih " . $nama . "! Pemesanan anda telah berhasil.<br>";
    echo "Nomor Telepon: " . $nomor . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Tanggal Acara: " . $tanggal . "<br>";
    echo "Hari Pembookingan: " . $hari . "<br>";
    echo "Paket yang dipilih: " . $paket . "<br>";
}
?>