<?php
//Aturan.
// 1. Kode Program hanya boleh ditulis didalam fungsi 'run'.
// 2. Dilarang mengubah penamaan dan struktur pada kode diluar fungsi 'run'.
// 3. Segala macam bentuk import yang dibutuhkan sudah dihandle oleh sistem.
// 4. Kerjakan soal didalam fungsi 'run'.
// 5. Dilarang menghapus, mengubah nama dan parameter kode fungsi 'run'.
// 6. Seluruh input akan secara otomatis masuk keparameter fungsi 'run'.
// 7. Outpun merupakan return dari fungsi 'run'.
// 8. Tidak diperbolehkan menambah 'input' dan 'ouput' selain dari parameter dan return pada fungsi 'run'.

function run($x, $y) {
    // Definisikan array data paket subscription
    $paketSubscription = [
        0 => ['Paket Harmoni', 149000],
        1 => ['Paket Ritme', 219000],
        2 => ['Paket Melodi', 299000],
        3 => ['Paket Akustik', 99000],
        4 => ['Paket Beat', 379000],
        5 => ['Paket Harmony Plus', 449000],
        6 => ['Paket Duet', 189000],
        7 => ['Paket Symphony', 599000],
        8 => ['Paket Tempo', 259000],
        9 => ['Paket Rhythm Plus', 499000]
    ];

    function bill($index, $bulan, $paket) {
        if ($paket[$index]) {
            $hargaPerBulan = $paket[$index][1];
            $totalHarga = $hargaPerBulan * $bulan;
            return $totalHarga;
        } else {
            return "Paket Tidak Valid";
        }
    }
    return bill($x, $y, $paketSubscription);
}

// Studi Kasus
echo run(3, 5) . PHP_EOL;
// echo run(7, 3) . PHP_EOL;
// echo run(9, 1) . PHP_EOL;
// echo run(6, 9) . PHP_EOL;
// echo run(0, 1) . PHP_EOL;



?>