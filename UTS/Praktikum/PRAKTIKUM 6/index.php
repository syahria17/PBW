<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Pertemuan 8 </title>
</head>
<body>
<?php

    $mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
    foreach ($mahasiswa as $nim => $nama => ) {
        echo "NIM: ". $nim .", Nama:". $nama. "Semester: " .&semester." "<br>";
}


// $nilai = 1;
//     while ($nilai <= 5) {
//         echo "Nilai: ". $nilai ."<br>";
//         $nilai++;
//     }


    // $buah = ["Apel", "Jeruk", "Mangga"];
    // for ($i = 0; $i < count($buah); $i++){
    // echo $buah[$i]."<br>";
    // }

   
//    for ($i = 1; $i <= 5; $i++) {
//    echo "Angka ke-”.$i.”<br>";
// }

//    $hari = "Selasa";
//    switch ($hari) {
//    case "Senin":
//        echo "Hari pertama kerja!";
//        break;
//    case "jum'at":
//        echo "Solat jumat!";
//        break;
//    case "Minggu":
//        echo "Libur akhir pekan!";
//        break;
//    default:
//        echo "Hari biasa.";

//    }

?>
</body>
</html>