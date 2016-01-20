<?php
trait Hello {
    public function hello() {

        echo "What a trait(or)";
    }
}

class MyParent {

    public function hello() {
        echo "Yay, I'm a parent!";
    }
}

class MyChild extends MyParent {
    use Hello;

    public function hello() {
        echo "Feed me!";
    }
}

$child = new MyChild();
$child->hello();