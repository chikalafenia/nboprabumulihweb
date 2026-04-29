<?php
$db = new SQLite3(__DIR__ . '/db_toko.sqlite');

$nama = $_POST['nama'] ?? '';
$ukuran = $_POST['ukuran'] ?? '';

// cek stok
$cek = $db->querySingle("SELECT stok FROM produk WHERE nama = '$nama'");

if ($cek === null) {
    echo "Produk tidak ditemukan";
    exit;
}

if ($cek <= 0) {
    echo "Stok habis ❌";
    exit;
}

// kurangi stok
$db->exec("UPDATE produk SET stok = stok - 1 WHERE nama = '$nama'");

echo "Berhasil beli ✅";
?>