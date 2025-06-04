<?php
// Koneksi ke database (ganti dengan kredensial database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "undangan_digital"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data undangan terbaru (misalnya, ambil 1 undangan terakhir)
$sql = "SELECT nama_festival, tema, tanggal, waktu_mulai, lokasi, dresscode_atasan, dresscode_bawahan, kontak_person FROM undangan_festival ORDER BY created_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil data
    $row = $result->fetch_assoc();

    // Sekarang Anda bisa menggunakan variabel $row['nama_kolom'] di dalam fungsi generateInvitation() Anda
    $namaFestival = $row['nama_festival'];
    $tema = $row['tema'];
    $tanggal = $row['tanggal'];
    $waktuMulai = substr($row['waktu_mulai'], 0, 5); // Ambil hanya jam:menit
    $lokasi = $row['lokasi'];
    $dresscodeAtasan = $row['dresscode_atasan'];
    $dresscodeBawahan = $row['dresscode_bawahan'];
    $kontakPerson = $row['kontak_person'];

    // Panggil fungsi generateInvitation Anda dengan data dari database
    echo generateInvitation($namaFestival, $tema, $tanggal, $waktuMulai, $lokasi, $dresscodeAtasan, $dresscodeBawahan, $kontakPerson);

} else {
    echo "Tidak ada data undangan ditemukan.";
}

$conn->close();

// Fungsi generateInvitation() yang sudah Anda buat sebelumnya
// ... (letakkan kode fungsi generateInvitation() di sini) ...
?>