<!-- Note : Untuk inputnya hanya bisa di run menggunakan terminal contoh : "php soal1.php" atau bisa menggunakan compiler online https://www.programiz.com/-->


<?php
$operasi = readline('Masukkan nilai anda : ');
$Bilangan1 = readline('Masukkan bilangan pertma anda : ');
$Bilangan2 = readline('Masukkan bilangan kedua anda : ');

switch ($operasi) {
    case "1":
        echo "Hasil penjumlahan dari $Bilangan1 dan $Bilangan2 adalah: " . ($Bilangan1+$Bilangan2);
        break;
    case "2":
        echo "Hasil perkalian dari $Bilangan1 dan $Bilangan2 adalah: " . ($Bilangan1*$Bilangan2);
        break;
    case "3":
        echo "Hasil pengurangan dari $Bilangan1 dan $Bilangan2 adalah: " . ($Bilangan1-$Bilangan2);
        break;
    case "4":
        echo "Hasil pembagian dari $Bilangan1 dan $Bilangan2 adalah: " . ($Bilangan1/$Bilangan2);
        break;
    default:
        echo "Operasi tidak valid.";
}

//Dengan function

// $operasi = readline('Masukkan nilai anda : ');
// $Bilangan1 = readline('Masukkan bilangan pertma anda : ');
// $Bilangan2 = readline('Masukkan bilangan kedua anda : ');
// function tambah($Bilangan1, $Bilangan2) {
//     return $Bilangan1 + $Bilangan2;
// }
// function kali($Bilangan1, $Bilangan2) {
//     return $Bilangan1 * $Bilangan2;
// }
// function kurang($Bilangan1, $Bilangan2) {
//     return $Bilangan1 - $Bilangan2;
// }
// function bagi($Bilangan1, $Bilangan2) {
//     if ($Bilangan2 != 0) {
//         return $Bilangan1 / $Bilangan2;
//     } else {
//         return "Error: Tidak bisa membagi oleh nol!";
//     }
// }

// switch ($operasi) {
//     case "1":
//         echo "Hasil penjumlahan dari $Bilangan1 dan $Bilangan2 adalah: " . tambah($Bilangan1 , $Bilangan2);
//         break;
//     case "2":
//         echo "Hasil perkalian dari $Bilangan1 dan $Bilangan2 adalah: " . kali($Bilangan1 , $Bilangan2);
//         break;
//     case "3":
//         echo "Hasil pengurangan dari $Bilangan1 dan $Bilangan2 adalah: " . kurang($Bilangan1 , $Bilangan2);
//         break;
//     case "4":
//         echo "Hasil pembagian dari $Bilangan1 dan $Bilangan2 adalah: " . bagi($Bilangan1 , $Bilangan2);
//         break;
//     default:
//         echo "Operasi tidak valid.";
// }
?>


