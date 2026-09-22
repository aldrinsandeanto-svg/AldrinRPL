<?php
$namaAplikasi = 'Sistem Inventaris Laboratorium';
$waktu = date('d-m-Y H:i:s');
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