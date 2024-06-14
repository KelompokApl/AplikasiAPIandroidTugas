<?php
// Panggil file koneksi database
require_once 'koneksi.php';

// Query untuk mengambil semua data barang keluar
$sql = "SELECT * FROM tbl_barangkeluar";
$result = $conn->query($sql);

// Array untuk menyimpan data barang keluar
$barangKeluar = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $barangKeluar[] = $row;
    }
}

// Convert array ke format JSON dan echo sebagai response API
header('Content-Type: application/json');
echo json_encode($barangKeluar);

// Tutup koneksi database
$conn->close();
?>
