# Lab8Web
# 🔥 Praktikum 8 — PHP & Database MySQL
```markdown
Nama: M.Ridho Febrian
NIM: 312410500
Kelas: TI.24.A.5  
Mata Kuliah: Pemrograman Web  
Dosen Pengampu: Agung Nugroho, S.Kom., M.Kom  
Universitas: Pelita Bangsa  
```
---

## 📌 Tujuan Pembelajaran
- Memahami konsep dasar database MySQL  
- Menghubungkan PHP dengan MySQL  
- Mengimplementasikan operasi **CRUD** (Create, Read, Update, Delete)  
- Membuat aplikasi web sederhana untuk mengelola data barang  

---

## 📁 Struktur Folder Proyek
lab8_php_database/

│── index.php

│── tambah.php

│── ubah.php

│── hapus.php

│── koneksi.php

│── style.css

└── images/

---

## 🗄️ 1. Membuat Database & Tabel  
Aplikasi ini menggunakan database bernama **latihan1** dan tabel **data_barang**.

### ▶ SQL Membuat Database  
```sql
CREATE DATABASE latihan1;
CREATE TABLE data_barang (
  id_barang int(10) auto_increment PRIMARY KEY,
  kategori varchar(30),
  nama varchar(30),
  gambar varchar(100),
  harga_beli decimal(10,0),
  harga_jual decimal(10,0),
  stok int(4)
);
```
---

## 📥 2. Menambahkan Data Awal

Data awal ditambahkan untuk testing tampilan CRUD.
```sql
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES
('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```
---

## 🔌 3. Koneksi ke Database (koneksi.php)

File ini menghubungkan PHP dengan MySQL.
```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal!");
}
```
---

## 📄 4. Menampilkan Data (index.php)

File ini menampilkan seluruh data dari tabel  `data_barang` dalam bentuk tabel HTML.
Di dalamnya juga terdapat tombol:

1. Tambah (menuju tambah.php)

2. Ubah (menuju ubah.php?id=xxx)

3. Hapus (menuju hapus.php?id=xxx)

### Fitur utama:

1. Menampilkan gambar

2. Menampilkan seluruh kolom tabel

3. Tombol aksi CRUD

---

## ➕ 5. Menambah Data (tambah.php)

Digunakan untuk Create data baru.

Fitur:

  1. Form input nama, kategori, harga, stok

  2. Upload file gambar

  3. Menyimpan ke database dengan query:
```sql
INSERT INTO data_barang (...)
```
Setelah berhasil, otomatis redirect ke   `index.php.`

---
## ✏️ 6. Mengubah Data (ubah.php)

Digunakan untuk Update data berdasarkan ID.

Fitur:

  1. Mengambil data melalui `$_GET['id']`

  2. Memunculkan form dengan data sebelumnya

  3. Bisa mengganti gambar

  4. Query update:
```sql
UPDATE data_barang SET ... WHERE id_barang = 'id'
```
---

## ❌ 7. Menghapus Data (hapus.php)

Digunakan untuk Delete data berdasarkan ID.

Query:
```sql
DELETE FROM data_barang WHERE id_barang = 'id'
```
Setelah itu redirect ke `index.php.`

## 🎨 8. Tampilan Aplikasi (style.css)

Saya juga membuat file style.css supaya tampilan aplikasi lebih rapi.
CSS ini mengatur:

  1. Tabel

  2. Form input

  3. Tata letak container

  4. Tombol simpan

  5. Warna latar dan teks

Dengan CSS ini, aplikasi terlihat lebih bersih dan enak dilihat.

---

📷 9. Screenshot Hasil

1. Tampilan index.php

<img src="lab6_bootstrap/images/PORTFOLIO.png" width="700">

2. Tampilan tambah data

<img src="lab6_bootstrap/images/PORTFOLIO.png" width="700">

3. Tampilan edit data

<img src="lab6_bootstrap/images/PORTFOLIO.png" width="700">

4. Hasil penghapusan

<img src="lab6_bootstrap/images/PORTFOLIO.png" width="700">



