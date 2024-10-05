<?php
    class Student {
        public $name;
        public $age;
        public $email;
        public $gender;
        
        public function show_bio () {
            echo "<ul>";
                echo "<li><b>Name :</b>" . $this->name ."</li>";
                echo "<li><b>Age :</b>" . $this->age ."</li>";
                echo "<li><b>Email :</b>" . $this->email ."</li>";
                echo "<li><b>Gender :</b>" . $this->gender ."</li>";
            echo "</ul>";
        }
    }
    
    $s1 = new Student();
    $s2 = new Student();


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
