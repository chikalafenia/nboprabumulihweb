<?php
header('Content-Type: application/json');

$db = new SQLite3(__DIR__ . '/db_toko.sqlite');

// ambil SEMUA kolom
$result = $db->query("SELECT * FROM produk");

$data = [];

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $data[] = [
        "id" => $row["id"],
        "nama" => $row["nama"],
        "harga" => $row["harga"],
        "deskripsi" => $row["deskripsi"],
        "gambar" => $row["gambar"],
        "ukuran" => $row["ukuran"],
        "warna" => $row["warna"],
        "stok" => $row["stok"]
    ];
}

echo json_encode($data);
?>