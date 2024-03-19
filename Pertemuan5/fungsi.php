<?php
 
 //Soal no 4
//function perkenalan() {
//    echo "Assalamualaikum, ";
//    echo "Perkanalkan, Nama Saya Anas <br/>";
//    echo "Senang berkenalan dengan Anda <br/>";
//}

    //Memanggil fungsi yang sudah dibuat
//    perkenalan();
//    perkenalan();


  //soal no 5
//function perkenalan($nama, $salam){
//    echo $salam.", ";
//    echo "Perkenalkan, nama saya ".$nama."<br/>";
//    echo "Senang berkenalan dengan Anda<br/>";
//    }

//    perkenalan("Hamdana","Hallo");

//    echo "<hr>";

//    $saya = "Anas Nurhidayat";
//    $ucapanSalam = "Selamat pagi";

//    perkenalan($saya,$ucapanSalam);


// soal no 6
//  function perkenalan($nama, $salam="Assalamualaikum"){
//      echo $salam.", ";
//      echo "Perkenalkan, nama saya ".$nama."<br/>";
//      echo "Senang berkenalan dengan Anda<br/>";
//  }

//  perkenalan("Hamdana","Hallo");

//  echo "<hr>";

//  $saya = "Anas";
//  $ucapanSalam = "Selamat pagi";

//  perkenalan($saya);
//     

// soal no 77
// function hitungUmur($thn_lahir, $thn_sekarang){
//         $umur = $thn_sekarang - $thn_lahir;
//         return $umur;
//     }
    
//     echo "Umur saya adalah ". hitungUmur(2003, 2023). " tahun";

// soal no 5
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia " . hitungUmur(2003, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Anas");

    ?>

