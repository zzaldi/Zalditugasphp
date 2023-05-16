6.roperti "length" menjadi 5 dan "width" menjadi 8, lalu panggil method "calculateArea()" dan tampilkan hasilnya.



<?php
echo "<br>";
class Rectangle{

        private $length;
        private $width;
    
        public function __construct($length = 5, $width = 8){
            $this->length = $length;
            $this->width = $width;
        }
    
        public function calculateArea(){
            return $this->length * $this->width;
        }
    
    }
    
    $rectangle1 = new Rectangle();
    echo $rectangle1->calculateArea();