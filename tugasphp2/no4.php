4.Buatlah sebuah validation required, jika username dan password kosong maka berikan peringatan harus diisikan. Jika salah satunya diisikan maka tombol button simpan tidak berfungsi. Gunakan fungsi php form handling required.
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
 </head>
   <body>

     <?php
     //definisi nama fungsi input
      $nama = '';
      $umur = '';
      
      $namaEror = '';
      $umurEror = '';
     /*definisi namaEror fungsi input*/
      function dataTypee($dataumur)
      {
         $inputData = trim ($dataumur);
         $inputData = stripslashes ($dataumur);
         $inputData = htmlspecialchars ($dataumur);
         return $inputData;
      }

 if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(empty($_POST['nama'])) {
                $namaEror = ' nama tidak bole kosong ';
        } else {
                $nama = dataTypee($_POST['nama']);
        }

        if (empty($_POST['umur'])) {
            $umurEror = " umur tidak boleh kosong";    
        } else {
                $umur = dataTypee($_POST['umur']);
        }
      }

      
     ?>

     <form ectioon ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="post">
     <div style = margin-bottom:3px;>
     <label for=" nama ">nama</label>
     <input type="text" id="nama" name="nama">
     <span style="color: red; font-size:12px;""><?php echo $namaEror; ?></span>
     </div>
     <div style = margin-bottom:3px;>
     <label for="umur">umur</label>
     <input type="number" id="umur" name="umur">
     <span style="color: red; font-size:12px;"><?php echo $umurEror; ?></span>
     </div>
     <button type="sumit">Simpan</button>
     </form>

   </body>
</html>

