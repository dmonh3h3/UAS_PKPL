<?php
// Kasus TOP-UP GO-Pay
class gopay
{
    function isID($status)
    {
        if (strlen($status) <= 10) {
            return TRUE;
        }
    }

    function isTopup($status)
    {
        if ($status <= 0) {
            return TRUE;
        }
    }

    #Nested If After Refactored
    function main($statusID, $statusTopup)
    {
        if ($this->isID($statusID) == TRUE) {
            return 'Go-Pay ID anda tidak ditemukan, Sikalhakan periksa kembali';
        }
        if ($this->isTopup($statusTopup) == TRUE) {
            return 'Transaksi Top-Up gagal, Silahkan periska nominal topup.';
        }

        return 'Selamat Transaksi berhasi';
    }
}

$gopay = new gopay;
$transaction = $gopay->main("081234567891", 70000);
echo $transaction;
