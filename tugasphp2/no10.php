10.Buatlah sebuah class dalam PHP dengan nama "Animal" yang memiliki properti "name" dan "sound". Buatlah method dalam class tersebut dengan nama "makeSound()" yang menampilkan suara hewan berdasarkan properti "sound". Buat objek dari class tersebut dengan nama "animal1" dan set properti "name" menjadi "Cat" dan "sound" menjadi "Meow", lalu panggil method "makeSound()" untuk mengeluarkan suara hewan.
<?php
echo "<r>";
class Animal {
        private $name;
        private $sound;
    
        public function __construct($name, $sound) {
            $this->name = $name;
            $this->sound = $sound;
        }
    
        public function makeSound() {
            echo $this->name . " says: " . $this->sound . "\n";
        }
    }
    
    $animal1 = new Animal('Cat', 'Meow');
    $animal1->makeSound(); 
    $animal2 = new Animal('Dog', 'Woof');
    $animal2->makeSound(); 
    