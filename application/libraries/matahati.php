<?php

class matahati{
  function index($total, $kategori, $kantong, $member)
  {
    if($kategori=="anak"){
      if($kantong == true){
        $hasil = $total-($total * 0.2) ;
        $totalakhir = $hasil + 2000 ;
        echo "total yang dibayar untuk pakaian anak adalah " . $hasil . " dan ditambah kantong plastik maka harus dibayar sebanyak ". $totalakhir;
      }else{
        $hasil = $total - ($total * 0.2);
        echo "total yang dibayar untuk pakaian anak adalah " . $hasil ;
      }
    }else if($kategori == "laki dewasa"){
      if($member == true){
        if($kantong== true){
          $hasil = $total-($total * 0.35);
          $totalakhir = $hasil + 2000;
          echo "total yang dibayar untuk pakaian laki laki dewasa adalah " . $hasil . " dan ditambah kantong plastik maka harus dibayar sebanyak " . $totalakhir;
        }else{
          $hasil = $total-($total * 0.35);
          echo "total yang dibayar untuk pakaian laki laki dewasa adalah " . $hasil ;
        }
      }else{
        if($kantong== true){
          $totalakhir = $total + 2000;
          echo "total yang dibayar untuk pakaian laki laki dewasa adalah " . $total . " dan ditambah kantong plastik maka harus dibayar sebanyak " . $totalakhir;
        }else{
          echo "total yang dibayar untuk pakaian laki laki dewasa adalah " . $total;
        }
      }
    }else if($kategori == "wanita dewasa"){
      if($kantong==true){
        $totalakhir= $total + 2000;
        echo "Anda mendapatkan gratis satu baju lagi, dan total yang dibayar untuk pakaian wanita dewasa adalah " . $total . " dan ditambah kantong plastik maka harus dibayar sebanyak " . $totalakhir;
      }else{
        echo "Anda mendapatkan gratis satu baju lagi, dan total yang dibayar untuk pakaian wanita dewasa adalah " . $total ;
    }
  }

}
}