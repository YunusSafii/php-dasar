<?php

namespace App\Http\Controllers;

class PhpDasarController extends Controller
{
    public function kuis() {
        for ($i=1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $hasilLuasPersegi = $this->luasPersegi($i);
                echo number_format($hasilLuasPersegi, 2, '.', '');
            }
            else if ($i % 3 == 0) {
                $hasilLuasLingkaran = $this->luasLingkaran($i);
                echo number_format($hasilLuasLingkaran, 2, '.', '');
            }
            else if ($i % 5 == 0) {
                $hasilKelilingLingkaran = $this->kelilingLingkaran($i);
                echo number_format($hasilKelilingLingkaran, 2, '.', '');
            }
            else {
                echo number_format($i, 2, '.', '');
            }
            echo "<br>";
        }
    }

    public function luasLingkaran(float $jari, float $pi = 3.14) {
        $jariBagi = $jari / 3;
        $hasil = $pi * ($jariBagi ** 2);

        return $hasil;
    }

    public function kelilingLingkaran(float $jari, float $pi = 3.14) {
        $jariBagi = $jari / 5;
        $hasil = 2 * $pi * $jariBagi;

        return $hasil;
    }

    public function luasPersegi($angka){
        $panjang = $angka / 3;
        $lebar = $angka / 5;
        $hasil = $panjang * $lebar;

        return $hasil;
    }
    
}
