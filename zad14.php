<?php
require_once __DIR__."/vendor/autoload.php";
use Ramsey\Uuid\Uuid as Uuid;
    
    class Dog {
        private $id;

        public function __construct(
            private string $nazwa,
            private int $wiek,
            private string $dataPrzyjecia
        ) {}

        public function setId() {
            $this->id = Uuid::uuid4();
        }

        public function __toString() {
            return $this->nazwa. "(". $this->wiek. " l.) przyjety w dn. ". $this->dataPrzyjecia. ". ID: ". $this->id.PHP_EOL;
        }
    }

    $d1 = new Dog("Fifek", 3, "12-02-2023");
    $d1->setId();
    echo $d1->__toString();

    $d2 = new Dog("Lola", 7, "30-01-2023");
    $d2->setId();
    echo $d2->__toString();
?>