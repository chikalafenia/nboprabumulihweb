<?php
$db = new SQLite3('db_toko.sqlite');

// BUAT TABEL
$db->exec("CREATE TABLE IF NOT EXISTS produk (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT,
    harga INTEGER,
    deskripsi TEXT,
    gambar TEXT,
    ukuran TEXT,
    warna TEXT,
    stok INTEGER
)");

// HAPUS DATA LAMA
$db->exec("DELETE FROM produk");

// =========================
// DATA PRODUK (DESKRIPSI DETAIL)
// =========================
$db->exec("

-- BAJU RAJUT (11 PRODUK)
INSERT INTO produk VALUES
(NULL,'Baju 1',90000,'Baju rajut wanita berbahan katun premium yang adem, lembut, dan tidak panas saat digunakan. Memiliki desain casual modern dengan potongan nyaman di badan. Cocok untuk aktivitas sehari-hari seperti kuliah, kerja santai, maupun hangout. Mudah dipadukan dengan jeans atau rok.', 'baju1.jpeg','S,M,L','Putih,Hitam,Cream',5),

(NULL,'Baju 2',105000,'Baju rajut elegan dengan desain modern dan jahitan rapi. Menggunakan bahan berkualitas yang nyaman di kulit dan tidak mudah kusut. Memberikan tampilan lebih rapi dan profesional, cocok untuk kerja dan acara semi formal.', 'baju2.jpeg','M,L,XL','Cream,Hijau',4),

(NULL,'Baju 3',75000,'Baju rajut simple berbahan ringan dan breathable sehingga nyaman dipakai sepanjang hari. Model minimalis namun tetap stylish dan mudah dipadukan dengan berbagai outfit.', 'baju3.jpeg','S,M,L','Beige,Putih',6),

(NULL,'Baju 4',99000,'Baju rajut kekinian dengan desain trendy mengikuti fashion saat ini. Cocok dipadukan dengan celana maupun rok untuk tampilan lebih fashionable.', 'baju4.jpeg','M,L','Coklat,Putih',3),

(NULL,'Baju 5',78000,'Baju rajut casual wanita dengan desain santai namun tetap stylish. Bahan nyaman dan tidak panas, cocok untuk aktivitas sehari-hari.', 'baju5.jpeg','S,M,L','Hitam,Navy',5),

(NULL,'Baju 6',66000,'Baju rajut santai berbahan ringan yang nyaman digunakan di rumah maupun saat hangout. Model sederhana namun tetap menarik.', 'baju6.jpeg','S,M','Abu,Putih',4),

(NULL,'Baju 7',90000,'Rajut premium dengan bahan lebih tebal dan lembut. Memberikan kesan elegan dan cocok digunakan untuk acara santai hingga semi formal.', 'baju7.jpeg','S,M,L','Pink,Cream',3),

(NULL,'Baju 8',110000,'Rajut elegan dengan desain eksklusif dan potongan rapi. Cocok untuk tampilan lebih formal dan stylish.', 'baju8.jpeg','M,L','Coklat,Abu',2),

(NULL,'Baju 9',89000,'Rajut daily wear dengan bahan adem dan nyaman. Cocok untuk penggunaan sehari-hari.', 'baju9.jpeg','S,M,L','Putih,Abu',5),

(NULL,'Baju 10',115000,'Rajut eksklusif dengan desain premium dan bahan berkualitas tinggi. Memberikan tampilan lebih mewah.', 'baju10.jpeg','M,L,XL','Hitam,Cream',2),

(NULL,'Baju 11',100000,'Rajut trendy dengan model kekinian yang cocok untuk anak muda. Nyaman dan stylish.', 'baju11.jpeg','M,L','Pink,Putih',3);

-- GAMIS (6 PRODUK)
INSERT INTO produk VALUES
(NULL,'Gamis 1',150000,'Gamis elegan berbahan premium yang adem, jatuh, dan tidak menerawang. Model flowy memberikan kesan anggun saat dipakai. Cocok untuk acara formal maupun harian.', 'gamis1.jpeg','M,L,XL','Hitam,Abu',3),

(NULL,'Gamis 2',160000,'Gamis modern dengan desain kekinian dan potongan rapi. Memberikan tampilan lebih stylish dan anggun.', 'gamis2.jpeg','M,L,XL','Pink,Cream',2),

(NULL,'Gamis 3',155000,'Gamis cantik berbahan adem dengan desain elegan. Cocok digunakan untuk acara formal dan santai.', 'gamis3.jpeg','S,M,L','Ungu,Abu',2),

(NULL,'Gamis 4',163000,'Gamis premium dengan bahan berkualitas tinggi dan desain eksklusif. Memberikan tampilan mewah dan elegan.', 'gamis4.jpeg','M,L','Silver,Hitam',1),

(NULL,'Gamis 5',138000,'Gamis casual elegan yang nyaman digunakan sehari-hari dengan tampilan tetap stylish.', 'gamis5.jpeg','S,M,L','Pink,Cream',3),

(NULL,'Gamis 6',130000,'Gamis simple dengan desain minimalis namun tetap anggun dan nyaman.', 'gamis6.jpeg','S,M,L','Coklat,Abu',4);

-- COUPLE (5 PRODUK)
INSERT INTO produk VALUES
(NULL,'Couple 1',180000,'Gamis couple pasangan dengan desain serasi dan bahan nyaman. Cocok untuk acara keluarga dan kondangan.', 'couple1.jpeg','M,L,XL','Hitam,Abu',2),

(NULL,'Couple 2',180000,'Couple modern dengan tampilan stylish dan harmonis. Memberikan kesan kompak.', 'couple2.jpeg','M,L,XL','Cream,Coklat',2),

(NULL,'Couple 3',180000,'Couple elegan berbahan premium yang nyaman dan tidak panas.', 'couple3.jpeg','M,L,XL','Hitam,Navy',1),

(NULL,'Couple 4',180000,'Couple premium dengan desain eksklusif dan tampilan mewah.', 'couple4.jpeg','M,L,XL','Abu,Cream',1),

(NULL,'Couple 5',180000,'Couple eksklusif dengan bahan berkualitas tinggi dan desain modern.', 'couple5.jpeg','M,L,XL','Hitam,Putih',2);

-- BLOUSE (10 PRODUK)
INSERT INTO produk VALUES
(NULL,'Blouse 1',115000,'Blouse elegan berbahan ringan dan adem. Cocok untuk kerja maupun santai.', 'blouse1.jpeg','S,M,L','Putih,Cream',4),

(NULL,'Blouse 2',120000,'Blouse modern dengan desain kekinian dan bahan nyaman.', 'blouse2.jpeg','M,L','Pink,Abu',3),

(NULL,'Blouse 3',110000,'Blouse casual dengan desain simple namun tetap stylish.', 'blouse3.jpeg','S,M,L','Putih,Beige',5),

(NULL,'Blouse 4',130000,'Blouse premium dengan tampilan elegan dan bahan berkualitas.', 'blouse4.jpeg','M,L','Coklat,Putih',2),

(NULL,'Blouse 5',112000,'Blouse stylish dengan desain modern dan nyaman dipakai.', 'blouse5.jpeg','S,M,L','Hitam,Navy',4),

(NULL,'Blouse 6',125000,'Blouse kerja dengan potongan rapi dan bahan adem.', 'blouse6.jpeg','M,L','Abu,Putih',3),

(NULL,'Blouse 7',125000,'Blouse formal dengan desain elegan untuk acara resmi.', 'blouse7.jpeg','M,L','Pink,Hitam',2),

(NULL,'Blouse 8',115000,'Blouse santai dengan bahan ringan dan nyaman.', 'blouse8.jpeg','S,M,L','Cream,Putih',3),

(NULL,'Blouse 9',120000,'Blouse trendy dengan model kekinian.', 'blouse9.jpeg','M,L','Abu,Cream',2),

(NULL,'Blouse 10',100000,'Blouse simple untuk penggunaan sehari-hari.', 'blouse10.jpeg','S,M,L','Putih,Hitam',5);

-- DASTER (10 PRODUK)
INSERT INTO produk VALUES
(NULL,'Daster 1',50000,'Daster santai berbahan adem dan longgar sehingga nyaman digunakan di rumah.', 'daster1.jpeg','All Size','Motif',6),

(NULL,'Daster 2',50000,'Daster adem dan ringan cocok untuk aktivitas santai.', 'daster2.jpeg','All Size','Motif',6),

(NULL,'Daster 3',50000,'Daster ringan dan nyaman digunakan sepanjang hari.', 'daster3.jpeg','All Size','Motif',5),

(NULL,'Daster 4',50000,'Daster nyaman dengan bahan lembut dan tidak panas.', 'daster4.jpeg','All Size','Motif',5),

(NULL,'Daster 5',50000,'Daster harian dengan desain santai dan nyaman.', 'daster5.jpeg','All Size','Motif',6),

(NULL,'Daster 6',50000,'Daster santai untuk penggunaan sehari-hari.', 'daster6.jpeg','All Size','Motif',4),

(NULL,'Daster 7',45000,'Daster murah dengan kualitas tetap nyaman.', 'daster7.jpeg','All Size','Motif',7),

(NULL,'Daster 8',45000,'Daster simple dan adem.', 'daster8.jpeg','All Size','Motif',7),

(NULL,'Daster 9',45000,'Daster ringan cocok untuk rumah.', 'daster9.jpeg','All Size','Motif',6),

(NULL,'Daster 10',45000,'Daster santai dan nyaman dipakai.', 'daster10.jpeg','All Size','Motif',6);

-- TUNIK (6 PRODUK)
INSERT INTO produk VALUES
(NULL,'Tunik 1',99000,'Tunik nyaman berbahan adem cocok untuk aktivitas sehari-hari.', 'tunik1.jpeg','S,M,L','Putih,Hitam',4),

(NULL,'Tunik 2',115000,'Tunik modern dengan desain stylish.', 'tunik2.jpeg','M,L,XL','Pink,Abu',3),

(NULL,'Tunik 3',89000,'Tunik simple dengan bahan ringan dan nyaman.', 'tunik3.jpeg','S,M,L','Putih,Cream',5),

(NULL,'Tunik 4',120000,'Tunik elegan dengan desain rapi.', 'tunik4.jpeg','M,L','Coklat,Putih',2),

(NULL,'Tunik 5',135000,'Tunik premium dengan bahan berkualitas.', 'tunik5.jpeg','M,L,XL','Abu,Hitam',2),

(NULL,'Tunik 6',150000,'Tunik eksklusif dengan tampilan mewah.', 'tunik6.jpeg','L,XL','Hitam,Navy',1)

");

echo "Database berhasil diisi dengan deskripsi detail!";
?>