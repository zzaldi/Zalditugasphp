7.Buatlah sebuah class dalam PHP dengan nama "Person" yang memiliki properti "name" dan "age". Buatlah method dalam class tersebut dengan nama "getInfo()" yang mengembalikan string yang berisi informasi nama dan umur. Buat objek dari class tersebut dengan nama "person1" dan set properti "name" menjadi "Sarah" dan "age" menjadi 25, lalu panggil method "getInfo()" dan tampilkan hasilnya.
<?php
echo "<br>";
class Person{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Nama: " . $this->name . "\nUMUR: " . $this->age;
    }

}

$person1 = new Person("Sarah", 25);
echo $person1->getInfo();