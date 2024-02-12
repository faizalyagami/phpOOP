<?php
/**
Paket Subscription

Mohon untuk membaca peraturan penulisan kode pada
bagian atas kode yang akan dikerjakan !

Ada sebuah layanan aplikasi musik
yang menawarkan berbagai paket
subscription kepada penggunanya.
Terdapat sepuluh paket subscription
sebagai berikut :

No Paket Harga
1 Paket Harmoni Rp 149.000 / bulan
2 Paket Ritme Rp 219.000 / bulan
3 Paket Melodi Rp 299.000 / bulan
4 Paket Akustik Rp 99.000 / bulan
5 Paket Beat Rp 379.000 / bulan
6 Paket Harmony Plus Rp 449.000 / bulan
7 Paket Duet Rp 189.000 / bulan
8 Paket Symphony Rp 599.000 / bulan
9 Paket Tempo Rp 259.000 / bulan

10 Paket Rhythm Plus Rp 499.000 / bulan

Buatlah data-data tersebut dalam bentuk
variable array !

Andi ingin membeli paket subscription tersebut
dengan index ke x, dan ingin membeli y bulan.
Dan berapa harga yang harus Andi bayar ?.

Studi kasus untuk pengecekan jawaban akan
berbeda dengan studi kasus dibawah !

Contoh Studi Kasus

# Input Output
1 x: 3, y: 5 495000
2 x: 7, y: 3 1797000
3 x: 9, y: 1 499000
4 x: 6, y: 9 1701000
5 x: 0, y: 2 298000
*/
function run($x, $y) {
$paketSubscription = [
    0 => ["Paket Harmoni", 149000],
    1 => ["Paket Ritme", 219000],
    2 => ["Paket Melodi", 299000],
    3 => ["Paket Akustik", 99000],
    4 => ["Paket Beat", 379000],
    5 => ["Paket Harmony Plus", 449000],
    6 => ["Paket Duet" ,189000],
    7 => ["Paket Symphony", 599000],
    8 => ["Paket Tempo", 499000]
];

function tagihan($index, $bulan, $paketSubscription) {
    if ($paketSubscription[$index]) {
        $hargaPerBulan = $paketSubscription[$index][1];
        $hargaTotal = $hargaPerBulan * $bulan;
        return $hargaTotal;
    } else {
        return "Paket tidak valid";
    }
}
return tagihan($x, $y, $paketSubscription);
  
}
echo run(3, 5). PHP_EOL;


/**
 * Diskon Harga Barang

Mohon untuk membaca peraturan penulisan kode pada
bagian atas kode yang akan dikerjakan !

Andi ingin membeli barang barang
elektronik dengan total belanjaan n
rupiah. Karena menjelang tahun baru,
toko tersebut memberikan diskon
kepada pelanggan pelanggan nya
dengan ketentuan sebagai berikut:

1. Jika total belanjaan tersebut lebih
besar sama dengan Rp. 2.000.000
dan lebih kecil dari Rp.5.000.000.
maka, ia mendapatkan diskon
sebesar 5%.

2. Jika total belanjaan tersebut lebih
besar sama dengan Rp. 5.000.000

dan lebih kecil dari Rp. 10.000.000.
maka, ia mendapatkan diskon
sebesar 10%.

3. Jika total belanjaan tersebut lebih
besar sama dengan Rp. 10.000.000.
maka, ia mendapatkan diskon 20%.

4. Dan jika total belanjaan lebih kecil
dari Rp. 2.000.000. maka, ia tidak
mendapatkan diskon apapun.

Berapa kembalian yang Andi terima
dari u rupiah yang dia berikan untuk
membayar barang barang yang dia
beli tersebut. dan jika uang yang
diberikan untuk membayar yaitu tidak
mencukupi untuk membayar barang
barang nya, maka kembalikan 0.

Studi kasus untuk pengecekan jawaban akan
berbeda dengan studi kasus dibawah !

Contoh Studi Kasus

# Input Output
1 n: 7550000
u: 9000000

2205000

2 n: 499000
u: 500000

1000

3 n: 12450500
u: 14750000

4789600

4 n: 2450000
u: 1650000

0

5 n: 3675500
u: 4510000

1018275
 */

 function run1($n, $u) {
    if ($n >= 2000000 && $n < 5000000) {
        $disc = 0.05;
    } elseif ($n >= 5000000 && $n < 10000000) {
        $disc = 0.1;
    } elseif ($n >= 10000000) {
        $disc = 0.2;
    } else {
        $disc = 0;
    }
    
    $totalHarga = $n - ($n * $disc);
    $uangKembalian = $u - $totalHarga;

    return $uangKembalian;
 }
 echo run1(7550000, 9000000). PHP_EOL;

 /**
  * Diskon dan kupon Harga

Barang

Mohon untuk membaca peraturan penulisan kode pada
bagian atas kode yang akan dikerjakan !

Andi ingin membeli barang barang
elektronik dengan total harga n rupiah.
Karena menjelang tahun baru, toko
tersebut memberikan diskon dan juga
kupon-kupon kepada pelanggan
pelanggan nya dengan ketentuan
sebagai berikut:

1. Jika total harga tersebut lebih besar
sama dengan Rp. 2.000.000 dan
lebih kecil dari Rp.5.000.000. maka, ia
mendapatkan diskon sebesar 5%.
Dan juga mendapatkan 7 kupon.

2. Jika total harga tersebut lebih
besar sama dengan Rp. 5.000.000
dan lebih kecil dari Rp. 10.000.000.
maka, ia mendapatkan diskon
sebesar 10%. Dan juga mendapatkan
10 kupon.

3. Jika total harga tersebut lebih
besar sama dengan Rp. 10.000.000.
maka, ia mendapatkan diskon 20%.
Dan juga mendapatkan 12 kupon.

4. Dan jika total harga lebih kecil dari
Rp. 2.000.000. maka, ia tidak
mendapatkan diskon apapun. Tetapi
mendapatkan 5 kupon.

kupon-kupon tersebut bisa ditukarkan
dengan uang tunai dengan sistem
kupon seperti :

1 kupon 2 kupon 3 kupon 4 kupon 5 kupon n kupon
Rp. 100 Rp. 200 Rp. 400 Rp. 800 Rp. 1.600 Rp. n

Buatlah Function sendiri diluar Function
utama untuk melakukan logika pada sistem
kupon tersebut ( convert kupon ke rupiah ).

Andi membayar barang sebesar u
rupiah. Berapa rupiah yang diterima
andi secara total mulai dari kembalian
yang ia terima ditambah dengan kupon
yang dia peroleh dan sudah ditukarkan
ke rupiah. dan jika uang yang diberikan
untuk membayar yaitu tidak mencukupi
untuk membayar barang barang nya,
maka kupon yang diperoleh sudah tidak
berlaku dan kembalikan 0.

Studi kasus untuk pengecekan jawaban akan
berbeda dengan studi kasus dibawah !

Contoh Studi Kasus

# Input Output
1 n: 7550000
u: 9000000

2256200

2 n: 499000
u: 500000

2600

3 n: 12450500
u: 14750000

4994400

4 n: 2450000
u: 1650000

0

5 n: 3675500
u: 4510000

1024675
  */

  function convertKupon($jumlahKupon) {
    $nilaiKupon = [0, 100, 200, 400, 800, 1600, 3200, 6400,12800,25600,51200,102400,204800, 409600];
    $totalRupiah = 0;

    for ($i=0; $i < $jumlahKupon; $i++) { 
        if (isset($nilaiKupon[$i])) {
            $totalRupiah += $nilaiKupon[$i];
        } else {
            return 0;
        }
    }
    return $totalRupiah;
    

}
function run2($n, $u) {

    $jumlahKupon = 0;
    $disc = 0;

    if ($n >= 2000000 && $n < 5000000) {
        $disc = 0.05;
        $jumlahKupon = 7;
    } elseif ($n >= 5000000 && $n < 10000000) {
        $disc = 0.1;
        $jumlahKupon = 10;
    } elseif ($n >= 10000000) {
        $disc = 0.2;
        $jumlahKupon = 12;
    } else {
        $disc = 0;
        $jumlahKupon = 5;
    }
    
    $totalHarga = $n - ($n * $disc);
    
    $hargaKupon = convertKupon($jumlahKupon);

    $uangDiterima = $u + $hargaKupon;

    if ($uangDiterima < $totalHarga) {
        return 0;
    }

    return $uangDiterima - $totalHarga;
 }
 echo run2(7550000, 9000000). PHP_EOL; //2256200
 echo run2(499000, 500000). PHP_EOL; //2600
 echo run2(12450500, 14750000). PHP_EOL; //4994400
 echo run2(2450000, 1650000). PHP_EOL; //0
 echo run2(3675500, 4510000). PHP_EOL; //1024675
?>