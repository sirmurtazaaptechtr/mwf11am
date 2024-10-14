<?php
    class TheStudent {
        const SCHOOL_NAME = 'XYZ SCHOOL';

        public function my_fun () {
            echo self::SCHOOL_NAME;
        }
    }
    abstract class ParentClass {

        public function someMethod () {
            echo "<p>I am complete</p>";
        }
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3() : string;
    }

    class ChildClass extends ParentClass {
        public function someMethod1() {
            echo "<p>I am someMethod one</p>";
        }
        public function someMethod2($name, $color) {
            echo "<p>$name is wearing $color dress</p>";
        }
        public function someMethod3() : string {
            return "<p>I am implemented by " . __CLASS__ . "</p>";
        }

        public function myFunction () {
            echo "<p>This is my function</p>";
        }
    }

    $obj1 = new TheStudent();
    $obj1->my_fun();

    echo "<br>";

    echo TheStudent::SCHOOL_NAME;

    $obj2 = new ChildClass();
    $obj2->someMethod();
    $obj2->someMethod1();
    $obj2->someMethod2("Sana","red");

    $value = $obj2->someMethod3();
    echo $value;

?>