<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matahari
{
    function index($pakaian, $jumlah, $member, $total, $kantong, $h1, $h2)
    {
        if ($pakaian == "anak") {
            if ($jumlah >= 2) {
                $total = $total * 0.8;
            }
            echo "Total Pakaian Anak adalah " . $total;
        } elseif ($pakaian == "laki-laki") {
            if ($member=="true") {
                $total = $total * 0.65;
            }
            echo "Total Pakaian Laki-laki adalah " . $total;
        } elseif ($pakaian == "wanita") {
            if ($kantong == 'ya') {
                $kantong = 2000;
            } else {
                $kantong = 0; 
            }
            if ($h1 > $h2) {
                $total = $h1 + $kantong;
            } else {
                $total = $h2 + $kantong;
            }
            echo "Total Pakaian Wanita adalah " . $total;
        }
    }
}
