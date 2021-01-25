<?php

interface CalculatorInterface
{
    public function execute($nilai);
}

class tidakMemilih implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        echo 'Anda Tidak Memilih Operasi Calculator';
    }
}

class Penjumlahan implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        $hasil = $nilai[0] + $nilai[1];
        echo 'Hasil Penjumlahan = ' . $hasil;
    }
}

class Perkalian implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        $hasil = $nilai[0] * $nilai[1];
        echo 'Hasil Perkalian = ' . $hasil;
    }
}

class Pembagian implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        $hasil = $nilai[0] / $nilai[1];
        echo 'Hasil Pembagian = ' . $hasil;
    }
}

class Pengurangan implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        $hasil = $nilai[0] - $nilai[1];
        echo 'Hasil Pengurangan = ' . $hasil;
    }
}

class Kuadrat implements
    CalculatorInterface
{
    public function execute($nilai)
    {
        $hasil = $nilai[0] * $nilai[0];
        echo 'Hasil Kuadrat ' . $nilai[0] . ' = ' . $hasil;
        echo '<br>';
        $hasil = $nilai[1] * $nilai[1];
        echo 'Hasil Kuadrat ' . $nilai[1] . ' = ' . $hasil;
    }
}

class Calculator
{
    public static function pilihan($pilihan)
    {
        switch ($pilihan) {
            case 'penjumlahan':
                return new Penjumlahan;
                break;
            case 'pengurangan':
                return new Pengurangan;
                break;
            case 'perkalian':
                return new Perkalian;
                break;
            case 'pembagian':
                return new Pembagian;
                break;
            case 'kuadrat':
                return new Kuadrat;
                break;
            default:
                return new tidakMemilih;
        }
    }
}


//variabel arrayBilangan merupakan inputan 2 bilangan, array index 0 untuk bilangan pertama, array index 1 untuk bilangan kedua
$nilai = [20, 10];

// Operasi menu penjumlahan
Calculator::pilihan('penjumlahan')->execute($nilai);
echo '<br>';
// Operasi menu perkalian
Calculator::pilihan('perkalian')->execute($nilai);
echo '<br>';
// Operasi menu pembagian
Calculator::pilihan('pembagian')->execute($nilai);
echo '<br>';
// Operasi menu pengurangan
Calculator::pilihan('pengurangan')->execute($nilai);
echo '<br>';
// Operasi menu kuadrat
Calculator::pilihan('kuadrat')->execute($nilai);
