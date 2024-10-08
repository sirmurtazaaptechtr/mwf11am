<?php
    class Teacher {
        public $name;

        function __construct($fullname)
        {
            $this->name = $fullname;
        }
        function __destruct() {
            echo "<p>The Teacher {$this->name} object is destructed or the script is stopped or exited</p>";
        }

    }
    class Student {
        // Properties
        private $id;
        public $name;
        public $age;
        public $email;
        public $gender;

        // Constructor
        function __construct($gr_number,$fullname) {
            $this->id = $gr_number;
            $this->name = $fullname;
        }
        
        // Methods
        function show_bio () {
            echo "<ul>";
                echo "<li><b>GR # :</b>" . $this->id ."</li>";
                echo "<li><b>Name :</b>" . $this->name ."</li>";
                echo "<li><b>Age :</b>" . $this->age ."</li>";
                echo "<li><b>Email :</b>" . $this->email ."</li>";
                echo "<li><b>Gender :</b>" . $this->gender ."</li>";
            echo "</ul>";
        }
        // Destructor
        function __destruct() {
            echo "<p>The Student {$this->name} object is destructed or the script is stopped or exited</p>";
        }
    }
    
    $s1 = new Student(1,"Rizwan");
    $s2 = new Student(2,"Muniba");

    $t1 = new Teacher("Murtaza");

    $s1->show_bio();
    $s2->show_bio();

    $s1->name = "Rizwan Naqvi";
    $s1->age = 42;
    $s1->email = "rizwan@email.com";
    $s1->gender = "male";

    $s2->name = "Muniba Farooq";
    $s2->age = 21;
    $s2->email = "muniba@email.com";
    $s2->gender = "female";

    $s1->show_bio();
    $s2->show_bio();


    var_dump($s1 instanceof Student);
    echo "<br>";
    var_dump($s2 instanceof Teacher);
