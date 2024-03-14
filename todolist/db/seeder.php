<?php
require_once 'config.php';

$kegiatan = [
    "Jalan-jalan di taman",
    "Membaca buku",
    "Menulis jurnal",
    "Menonton film",
    "Belajar keterampilan baru",
    "Memasak resep baru",
    "Berolahraga",
    "Mendengarkan musik",
    "Menelepon teman",
    "Melakukan yoga"
];

for ($i = 1; $i <= 10000; $i++) {
    $nama_kegiatan = $kegiatan[array_rand($kegiatan)]; // Pilih secara acak dari daftar kegiatan
    $deskripsi = "Deskripsi untuk kegiatan $nama_kegiatan"; // Deskripsi sederhana
    $query = "INSERT INTO todo_list (name, description) VALUES ('$nama_kegiatan', '$deskripsi')";
    mysqli_query($conn, $query);
}

echo "Seeder Ok bos";
?>
