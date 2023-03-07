<?php
    class Dog {
        private $id;

        public function __construct(
            private string $nazwa,
            private int $wiek,
            private string $dataPrzyjecia
        ) {
            $this->id = random_bytes(16);
        }

        public function __toString() {
            return $this->nazwa. "(". $this->wiek. " l.) przyjety w dn. ". $this->dataPrzyjecia. ".".PHP_EOL;
        }
    }

    $d1 = new Dog("Fifek", 3, "12-02-2023");
    echo $d1->__toString();
?>