<?php
$namaAplikasi = 'Sistem Inventaris Lab4';
$waktu = date('d-m-Y H:i:s');
$stok = 4;

$status = $stok > 0 ? "Tersedia" : "Tidak tersedia";

echo "Status alat: $status";
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($namaAplikasi) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($namaAplikasi) ?></h1>
    <p>Aplikasi praktikum Rekayasa Perangkat Lunak.</p>
    <p>Waktu server: <?= htmlspecialchars($waktu) ?></p>
</body>
</html>