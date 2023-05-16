8.Buatlah sebuah class dalam PHP dengan nama "Circle" yang memiliki properti "radius". Buatlah method dalam class tersebut dengan nama "calculateArea()" yang menghitung dan mengembalikan luas lingkaran berdasarkan properti "radius". Buat objek dari class tersebut dengan nama "circle1" dan set properti "radius" menjadi 10, lalu panggil method "calculateArea()" dan tampilkan hasilnya.

<?php
echo "<br>";
class Circle {
        private $radius;
    
        public function __construct($radius) {
            $this->radius = $radius;
        }
    
        public function calculateArea() {
            return 3.14 * $this->radius * $this->radius;
        }
    }
    
    $circle1 = new Circle(10);
    $circle1Area = $circle1->calculateArea();
    echo "Luas lingkaran untuk radius adalah $circle1Area.";
    