<?php
    // Create an Iterator
    class MyIterator implements Iterator {
        private $items = [];
        private $pointer = 0;
    
        public function __construct($items) {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
        }
    
        public function current() {
        return $this->items[$this->pointer];
        }
    
        public function key() {
        return $this->pointer;
        }
    
        public function next() {
        $this->pointer++;
        }

        public function previous() {
            if($this->pointer != 0) {
                $this->pointer--;
            }
        }
    
        public function rewind() {
        $this->pointer = 0;
        }
    
        public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
        }
    }
    // A function that uses iterables
    function printIterable(iterable $myIterable) {
        foreach($myIterable as $item) {
        echo "<p> $item </p>";
        }
    }

    $names = ["Maaz", "Sufiyan", "Rizwan", "Nimrah", "Muniba", "Zubaida", "Areesha", "Chand", "Ovamir","Khizar","Sameer","Ahmer","Samad","Nazeer"];

    $iterator = new MyIterator($names);

    // printIterable($iterator);
    $iterator->next();
    echo $iterator->current() . "<br>";
    $iterator->rewind();
    echo $iterator->current() . "<br>";
    
    var_dump($iterator->valid());
    echo "<br>";
    
    $iterator->next();
    $iterator->next();
    $iterator->next();
    
    echo $iterator->current() . "<br>";
    echo $iterator->key() . "<br>";
    
    $iterator->previous();
    
    echo $iterator->current() . "<br>";
    echo $iterator->key();

?>