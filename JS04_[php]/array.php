<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 10, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<br>";
$daftarKaryawan = [
    ['Alices', 7],
    ['Bobs', 3],
    ['Charlies', 9],
    ['Davids', 5],
    ['Evas', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alices', 85],
        ['Bobs', 92],
        ['Charlies', 78],
    ],
    'Fisika' => [
        ['Alices', 90],
        ['Bobs', 88],
        ['Charlies', 75],
    ],
    'Kimia' => [
        ['Alices', 92],
        ['Bobs', 80],
        ['Charlies', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
