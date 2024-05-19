<?php
require_once('animal.php');

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 4;
    }

    public function jump() {
        return "Jump : Hop Hop";
    }
}
?>
