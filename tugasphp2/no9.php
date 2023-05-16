9.Buatlah sebuah class dalam PHP dengan nama "Car" yang memiliki properti "brand" dan "year". Buatlah method dalam class tersebut dengan nama "getInfo()" yang mengembalikan string yang berisi informasi merk dan tahun produksi mobil. Buat objek dari class tersebut dengan nama "car1" dan set properti "brand" menjadi "Toyota" dan "year" menjadi 2020, lalu panggil method "getInfo()" dan tampilkan hasilnya.

<?php
echo "<br>";
class Car{
        private $brand;
        private $year;
    
        public function __construct($brand, $year) {
            $this->brand = $brand;
            $this->year = $year;
        }
    
        public function getInfo() {
            return "Merk: " . $this->brand . "\nYear: " . $this->year;
        }
    
    }
    
    $car1 = new Car("Toyota", 2020);
    echo $car1->getInfo();
    