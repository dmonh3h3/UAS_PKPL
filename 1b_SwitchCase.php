<?php

class Calculator
{
    public function penjumlahan($nilai)
    {
        $hasil = $nilai[0] + $nilai[1];
        echo 'Hasil Penjumlahan = ' . $hasil;
    }
    public function pengurangan($nilai)
    {
        $hasil = $nilai[0] - $nilai[1];
        echo 'Hasil Pengurangan = ' . $hasil;
    }

    public function perkalian($nilai)
    {
        $hasil = $nilai[0] * $nilai[1];
        echo 'Hasil Perkalian = ' . $hasil;
    }

    public function pembagian($nilai)
    {
        $hasil = $nilai[0] / $nilai[1];
        echo 'Hasil Pembagian = ' . $hasil;
    }
    public function kuadrat($nilai)
    {
        $hasil = $nilai[0] * $nilai[0];
        echo 'Hasil Kuadrat ' . $nilai[0] . ' = ' . $hasil;
        echo '<br>';
        $hasil = $nilai[1] * $nilai[1];
        echo 'Hasil Kuadrat ' . $nilai[1] . ' = ' . $hasil;
    }
    public function tidakMemilih()
    {
        echo 'Anda tidak memilih';
    }

    public function pilihan($pilihan, $nilai)
    {
        switch ($pilihan) {
            case 'penjumlahan':
                $this->penjumlahan($nilai);
                break;
            case 'pengurangan':
                $this->pengurangan($nilai);
                break;
            case 'perkalian':
                $this->perkalian($nilai);
                break;
            case 'pembagian':
                $this->pembagian($nilai);
                break;
            case 'kuadrat':
                $this->kuadrat($nilai);
                break;
            default:
                $this->tidakMemilih();
        }
    }
}


//variabel arrayBilangan merupakan inputan 2 bilangan, array index 0 untuk bilangan pertama, array index 1 untuk bilangan kedua
$nilai = [20, 10];
$pilih = new Calculator();
// Operasi penjumlahan
$pilih->pilihan('penjumlahan', $nilai);
echo "<br>";
// Operasi pengurangan
$pilih->pilihan('pengurangan', $nilai);
echo "<br>";
// Operasi perkalian
$pilih->pilihan('perkalian', $nilai);
echo "<br>";
// Operasi pembagian
$pilih->pilihan('pembagian', $nilai);
echo "<br>";
// Operasi kuadrat
$pilih->pilihan('kuadrat', $nilai);
echo "<br>";
