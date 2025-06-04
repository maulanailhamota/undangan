<?php
// Informasi Festival
$namaFestival = "Gema Takbir Idul Adha 1446 H";
$tema = "Bersatu dalam Takbir, Merajut Kebersamaan";
// Perbaikan tanggal: Idul Adha 1446 H diperkirakan jatuh pada pertengahan Juni 2025.
// Saya asumsikan ini adalah tanggal yang Anda maksud, bukan 2024.
$tanggal = "Kamis, 05 Juni 2025";
$waktuMulai = "19:00 WIB";
$lokasi = "Halaman Masjid Jami' Kota Sukoharjo";
$dresscodeAtasan = "Hitam";
$dresscodeBawahan = "Putih";
$kontakPerson = "Maulana Ilham(0813-5350-3585)";

// Fungsi untuk menghasilkan undangan dalam format HTML
function generateInvitation($namaFestival, $tema, $tanggal, $waktuMulai, $lokasi, $dresscodeAtasan, $dresscodeBawahan, $kontakPerson) {
    $html = "<!DOCTYPE html>";
    $html .= "<html lang='id'>";
    $html .= "<head>";
    $html .= "    <meta charset='UTF-8'>";
    $html .= "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    $html .= "    <title>Undangan Festival Takbir Idul Adha</title>";
    $html .= "    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Amiri:wght@400;700&display=swap' rel='stylesheet'>"; // Menambahkan font Amiri
    $html .= "    <style>";
    $html .= "        body {";
    $html .= "            font-family: 'Poppins', sans-serif;";
    $html .= "            background-image: url('gambar 1.png');";
    $html .= "            background-size: cover;";
    $html .= "            background-repeat: no-repeat;";
    $html .= "            background-attachment: fixed;";
    $html .= "            color: #333;";
    $html .= "            line-height: 1.6;";
    $html .= "            margin: 0;";
    $html .= "            padding: 20px;";
    $html .= "            text-align: center;";
    $html .= "        }";
    $html .= "        .container {";
    $html .= "            max-width: 800px;";
    $html .= "            margin: 30px auto;";
    $html .= "            background-color: rgba(255, 255, 255, 0.95); /* Sedikit lebih solid agar teks lebih jelas */";
    $html .= "            border-radius: 15px; /* Radius sedikit lebih besar untuk kesan lembut */";
    $html .= "            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); /* Bayangan lebih dalam */";
    $html .= "            padding: 40px;";
    $html .= "            position: relative;";
    $html .= "            overflow: hidden;";
    $html .= "            z-index: 1;";
    $html .= "            border: 2px solid #D4AF37; /* Border emas tipis */";
    $html .= "        }";
    $html .= "        .header {";
    $html .= "            background: linear-gradient(to right, #4CAF50, #2E8B57); /* Gradien hijau untuk header */";
    $html .= "            color: white;";
    $html .= "            padding: 25px 0;"; // Padding lebih besar
    $html .= "            border-radius: 13px 13px 0 0;"; // Menyesuaikan radius border
    $html .= "            margin: -40px -40px 30px -40px;";
    $html .= "            font-size: 2.2em;"; // Ukuran font lebih besar
    $html .= "            font-weight: 700;";
    $html .= "            letter-spacing: 2px;"; // Spasi huruf lebih lebar
    $html .= "            text-transform: uppercase;";
    $html .= "            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);"; // Efek bayangan pada teks header
    $html .= "        }";
    $html .= "        .content h1 {";
    $html .= "            font-family: 'Amiri', serif; /* Menggunakan font Amiri untuk kesan Islami */";
    $html .= "            color: #1A5276; /* Warna biru gelap */";
    $html .= "            font-size: 3em;"; // Ukuran font lebih besar untuk salam
    $html .= "            margin-bottom: 20px;";
    $html .= "            font-weight: 700;";
    $html .= "            text-shadow: 1px 1px 1px rgba(0,0,0,0.1);";
    $html .= "        }";
    $html .= "        .content h2 {";
    $html .= "            color: #333; /* Warna lebih gelap */";
    $html .= "            font-size: 2em;"; // Ukuran font lebih besar
    $html .= "            margin-bottom: 30px;";
    $html .= "            font-weight: 600;";
    $html .= "            text-decoration: underline wavy #D4AF37; /* Garis bawah bergelombang dengan warna emas */";
    $html .= "            text-underline-offset: 8px;";
    $html .= "        }";
    $html .= "        .content p {";
    $html .= "            font-size: 1.15em;";
    $html .= "            margin-bottom: 15px;";
    $html .= "            color: #444;";
    $html .= "        }";
    $html .= "        .details {";
    $html .= "            background-color: #f9f9f9;";
    $html .= "            padding: 25px;";
    $html .= "            border-radius: 10px;";
    $html .= "            margin: 30px 0;";
    $html .= "            border: 1px dashed #A9DFBF;"; // Border putus-putus hijau
    $html .= "        }";
    $html .= "        .details p {";
    $html .= "            font-size: 1.3em;"; // Ukuran font detail lebih besar
    $html .= "            margin-bottom: 12px;";
    $html .= "            color: #2F4F4F;"; // Warna dark slate gray
    $html .= "        }";
    $html .= "        .details p strong {";
    $html .= "            color: #006400; /* Warna hijau gelap */";
    $html .= "        }";
    $html .= "        .dresscode {";
    $html .= "            background: linear-gradient(to left, #ADD8E6, #87CEEB); /* Gradien biru untuk dresscode */";
    $html .= "            padding: 20px 25px;";
    $html .= "            border-radius: 10px;";
    $html .= "            margin-top: 35px;";
    $html .= "            border: 2px solid #2196F3;";
    $html .= "        }";
    $html .= "        .dresscode p {";
    $html .= "            margin: 0;";
    $html .= "            font-size: 1.25em;"; // Ukuran font lebih besar
    $html .= "            color: #0D47A1;";
    $html .= "            font-weight: 700;"; // Lebih tebal
    $html .= "            text-shadow: 0.5px 0.5px 0.5px rgba(255,255,255,0.5);"; // Bayangan putih ringan
    $html .= "        }";
    $html .= "        .footer {";
    $html .= "            margin-top: 50px;";
    $html .= "            font-size: 1.1em;";
    $html .= "            color: #555;";
    $html .= "            font-weight: 500;";
    $html .= "        }";
    $html .= "        .footer p {";
    $html .= "            margin-bottom: 8px;";
    $html .= "        }";
    $html .= "        .decoration {";
    $html .= "            position: absolute;";
    $html .= "            top: 20px;";
    $html .= "            right: 20px;";
    $html .= "            width: 90px;"; // Ukuran sedikit lebih besar
    $html .= "            opacity: 0.15;"; // Lebih terlihat
    $html .= "            filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.1));"; // Tambahkan efek bayangan pada dekorasi
    $html .= "        }";
    $html .= "        .decoration-left {";
    $html .= "            position: absolute;";
    $html .= "            bottom: 20px;";
    $html .= "            left: 20px;";
    $html .= "            width: 90px;"; // Ukuran sedikit lebih besar
    $html .= "            opacity: 0.15;"; // Lebih terlihat
    $html .= "            transform: rotate(180deg);";
    $html .= "            filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.1));"; // Tambahkan efek bayangan pada dekorasi
    $html .= "        }";
    

    $html .= "    </style>";
    $html .= "</head>";
    $html .= "<body>";
    $html .= "    <div class='container'>";
    $html .= "        <div class='header'>";
    $html .=             $namaFestival;
    $html .= "        </div>";
    //$html .= "        <img src='https://www.freeiconspng.com/uploads/mosque-icon-1.png' alt='Dekorasi Masjid' class='decoration'>";
   //  $html .= "        <img src='https://www.freeiconspng.com/uploads/mosque-icon-1.png' alt='Dekorasi Masjid' class='decoration-left'>";
    // Jika Anda ingin menambahkan kembali ornamen takbir dan orang, bisa diaktifkan di sini
    // $html .= "        <img src='' alt='Ornamen Takbir dan Orang' class='ornament-takbir'>";
   // $html .= "        <img src='http://googleusercontent.com/image_generation_content/1' alt='Ornamen Takbir dan Orang' class='ornament-takbir-bottom'>";
    $html .= "        <div class='content'>";
    $html .= "            <h1>Assalamu'alaikum Warahmatullahi Wabarakatuh</h1>";
    $html .= "            <h2>" . $tema . "</h2>";
    $html .= "            <p>Dengan hormat, Remaja Masjid Jami' Kota Sukoharjo mengundang Bapak/Ibu/Saudara/i sekalian untuk hadir dan memeriahkan acara istimewa kami:</p>";
    $html .= "            <div class='details'>";
    $html .= "                <p>🗓️ <strong>Tanggal:</strong> " . $tanggal . "</p>";
    $html .= "                <p>⏰ <strong>Waktu:</strong> Pukul " . $waktuMulai . " s.d. Selesai</p>";
    $html .= "                <p>📍 <strong>Lokasi:</strong> " . $lokasi . "</p>";
    $html .= "            </div>";
    $html .= "            <div class='dresscode'>";
    $html .= "                <p>Mohon kenakan **Dress Code:**</p>";
    $html .= "                <p>👕 Atasan: <strong>" . $dresscodeAtasan . "</strong></p>";
    $html .= "                <p>👖 Bawahan: <strong>" . $dresscodeBawahan . "</strong></p>";
    $html .= "            </div>";
    $html .= "            <p style='margin-top: 30px;'>Mari bersama-sama mengagungkan Asma Allah SWT dan mempererat tali silaturahmi.</p>";
    $html .= "            <p>Atas perhatian dan kehadiran Bapak/Ibu/Saudara/i, kami ucapkan terima kasih.</p>";
    $html .= "        </div>";
    $html .= "        <div class='footer'>";
    $html .= "            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>";
    $html .= "            <p>Hormat kami,</p>";
    $html .= "            <p>" . $kontakPerson . "</p>";
    $html .= "        </div>";
    $html .= "    </div>";
    $html .= "</body>";
    $html .= "</html>";

    return $html;
}

// Menampilkan undangan
echo generateInvitation($namaFestival, $tema, $tanggal, $waktuMulai, $lokasi, $dresscodeAtasan, $dresscodeBawahan, $kontakPerson);

?>