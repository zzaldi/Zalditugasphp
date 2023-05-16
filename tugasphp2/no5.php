5.objek dari class tersebut dengan nama "student1" dan set properti "name" menjadi "Zaldi" dan "age" menjadi 20


<?php
echo "<br />";
class Student {
    private $name;
    private $age;

    public function __construct($name = "zaldi", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

?>
<?php

$student1 = new Student('Zaldi', 20);
echo $student1->getName();
echo "<br />";
echo $student1->getAge();

?>