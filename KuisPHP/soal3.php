<?php

// function convertKupon($sumKupon) {
//     $kuponRupiah = [100,200,400,800,1600];
    
//     $totalRupiah = 0;
//     for ($i=0; $i < $sumKupon ; $i++) { 
//         $totalRupiah += $kuponRupiah[$i];
//     }
//     return $totalRupiah;
// }

// function run($n, $u) {
//     $disc = 0;
//     $sumKupon = 0;

//     if ($n >= 2000000 && $n < 5000000) {
//         $disc = 0.05;
//         $sumKupon = 7;
//     } elseif ($n >= 5000000 && $n < 10000000) {
//         $disc = 0.1;
//         $sumKupon = 10;
//     } elseif ($n >= 10000000) {
//         $disc = 0.2;
//         $sumKupon = 12;
//     } else {
//       $disc =0;
//       $sumKupon = 5;
//     }

//     $total = $n - ($n * $disc);
//     $totalKupon = convertKupon($sumKupon);
//     $uangDiterima = $u + $totalKupon;

//     return ($uangDiterima >= $total) ? $uangDiterima - $total :0;
// }

// echo run(7550000, 9000000);

// Function untuk menghitung nilai kupon dalam rupiah
function convertKuponToRupiah($jumlahKupon)
{
    // Daftar nilai kupon sesuai dengan aturan
    $nilaiKupon = [0, 100, 200, 400, 800, 1600, 3200, 6400,12800,25600,51200,102400,204800, 409600];

    // Hitung total nilai kupon
    $totalRupiah = 0;
    for ($i = 0; $i < $jumlahKupon; $i++) {
        // Periksa apakah indeks kupon ada di dalam array
        if (isset($nilaiKupon[$i])) {
            $totalRupiah += $nilaiKupon[$i];
        } else {
            // Jika indeks kupon tidak valid, kembalikan 0
            return 0;
        }
    }

    return $totalRupiah;
}

// Function utama untuk menghitung total uang yang diterima oleh Andi
function run($n, $u)
{
    // Inisialisasi diskon dan jumlah kupon
    $diskon = 0;
    $jumlahKupon = 0;

    // Tentukan diskon dan jumlah kupon berdasarkan total harga
    if ($n >= 2000000 && $n < 5000000) {
        $diskon = 0.05;
        $jumlahKupon = 7;
    } elseif ($n >= 5000000 && $n < 10000000) {
        $diskon = 0.1;
        $jumlahKupon = 10;
    } elseif ($n >= 10000000) {
        $diskon = 0.2;
        $jumlahKupon = 12;
    } else {
        $jumlahKupon = 5;
    }

    // Hitung total harga setelah diskon
    $totalHarga = $n - ($n * $diskon);

    // Hitung total nilai kupon dalam rupiah
    $totalKuponRupiah = convertKuponToRupiah($jumlahKupon);

    // Hitung total uang yang diterima (termasuk kembalian dan nilai kupon)
    $totalUangDiterima = $u + $totalKuponRupiah;

    // Kembalikan 0 jika uang yang diberikan tidak mencukupi
    if ($totalUangDiterima < $totalHarga) {
        return 0;
    }

    // Kembalikan total uang yang diterima setelah membayar barang
    return $totalUangDiterima - $totalHarga;
}

// Studi Kasus
echo run(7550000, 9000000) . "\n";   // Output: 2256200


?>