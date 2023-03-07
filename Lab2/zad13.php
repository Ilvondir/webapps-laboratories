<?php
    class Point {
        public function __construct(
            private float $x,
            private float $y) {}

        public function __toString() {
            return "Point(". $this->x. ", ". $this->y. ")".PHP_EOL; 
        }

        public function setX(float $x) {
            $this->x = $x;
        }

        public function setY(float $y) {
            $this->y = $y;
        }

        public function move(float $x, float $y) {
            $this->x += $x;
            $this->y += $y;
        }
    }

    $p1 = new Point(1.1, 4.4);
    echo $p1->__toString();
    $p1->setX(1.2);
    $p1->setY(0.1);
    echo $p1->__toString();
    $p1->move(2.3, 4.3);
    echo $p1->__toString();

    $p2 = new Point(12.32, 41.01);
    echo $p2->__toString();
    $p2->setX(15.42);
    $p2->setY(-10.11);
    echo $p2->__toString();
    $p2->move(37.3, 9.08);
    echo $p2->__toString();
?>