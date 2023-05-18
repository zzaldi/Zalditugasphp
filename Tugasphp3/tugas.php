<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>
   <h1>Sistem Parkir</h1>
     <?php
     //definisi nama fungsi input

use function PHPSTORM_META\type;

      $namaLengkap = '';
      $statuss = '';
      $nomorpolisi = '';
      $typekendaraan = '';
      
      
      $namaLengkapEror = '';
      $statusEror = '';
      $nomorpolisieror = '';
      $typekendaraanEror = '';
     /*definisi namaEror fungsi input*/
      function dataTypee($datastatus)
      {
         $inputData = trim ($datastatus);
         $inputData = stripslashes ($datastatus);
         $inputData = htmlspecialchars ($datastatus);
         return $inputData;
      }

 if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(empty($_POST['namaLengkap'])) {
                $namaLengkapEror = ' nama lengkap tidak boleh kososng ';
        } else {
                $namaLengkap = dataTypee($_POST['namaLengkap']);
        }

        if (empty($_POST['status'])) {
            $statusEror = " status tidak boleh kosong";    
        } else {
                $status = dataTypee($_POST['status']);
        }
        if(empty($_POST['namaLengkap'])) {
          $namaLengkapEror = ' nomorpolis tidak boleh kososng ';
  } else {
          $nomorpolisieror = dataTypee($_POST['nomorpolisi']);
  }

  if (empty($_POST['typekendaraan'])) {
      $typekendaraanEror = " typekendaraan tidak boleh kosong";    
  } else {
          $typekendaraan = dataTypee($_POST['typekendaraan']);
  }
      }

      
     ?>

     <form ectioon ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="post">
     <div style = margin-bottom:3px;>
     <label for=" namaLengkap ">namaLengkap</label>
     <input type="text" id="namaLengkap" name="namaLengkap">
     <span style="color: red; font-size:12px;"><?php echo $namaLengkapEror; ?></span>
     </div>
     <div style = margin-bottom:3px;>
     <label for="status">status</label>
     <input type="teks" id="status" name="status">
     <span style="color: red; font-size:12px;"><?php echo $statusEror; ?></span>
     </div>
     
     <div style = margin-bottom:3px;>
     <label for=" nomor polisis ">nomorpolisi</label>
     <input type="text" id="nomorpolisi" name="namaLengkap">
     <span style="color: red; font-size:12px;"><?php echo $nomorpolisieror; ?></span>
     </div>
     <div style = margin-bottom:3px;>
     <label for="typekendaraan">type kendaraan</label>
     <input type="text" id="typekendaraan" name="status">
     <span style="color: red; font-size:12px;"><?php echo $typekendaraanEror; ?></span>
     </div>
     <button type="sumit">Simpan</button>
     </form>

     <?php
     echo "nama saya adalah " . $namaLengkap;
     echo "<br>";
     echo " status saya saat ini " . $statuss;
     echo "<br>";
     echo "nama saya adalah " . $nomorpolisi;
     echo "<br>";
     echo " status saya saat ini " . $typekendaraan;
     //pusing pak
     ?>
     //pusing pak
   </body>
</html>