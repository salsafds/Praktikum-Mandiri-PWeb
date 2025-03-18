<?php
include_once("koneksi.php");

// Pastikan ID dikirim dan tidak kosong
if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Error: ID tidak ditemukan! Pastikan form mengirim ID.");
}

// Ambil data dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

// Gunakan prepared statement untuk keamanan
$query = $conn->prepare("UPDATE tb_buku SET judul_buku=?, pengarang=?, tahun_terbit=?, kategori=? WHERE id_buku=?");
$query->bind_param("ssisi", $judul, $pengarang, $tahun, $kategori, $id);

// Eksekusi query
$hasil = $query->execute();

if ($hasil) {
    header('Location: index.php');
} else {
    echo "Update data gagal: " . $query->error;
}

// Tutup koneksi
$query->close();
$conn->close();
?>