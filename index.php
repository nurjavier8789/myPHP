<?php
    $test1 = 5; //variable init
    $test2 = 9;

    function testing() {
        // global $test1, $test2; //we can use this line if you not using $GLOBALS['variable']
        $GLOBALS['test1'] = $GLOBALS['test1']+$GLOBALS['test2']; //if you not use $GLOBALS['variable'], just call the variable from line 6
    }

    testing(); //call the function
    
    echo $test1."<br><br>"; //print the result

    function te() {
        static $a = 0; //this will make the variable not reseting when the function is called
        print ++$a."<br>";
    }

    te();
    te();
    te();

    print "<br>";

    //data type
    $x = 13;
    var_dump($x); //this will detect that data type we used
    print "<br><br>";

    //Object-oriented programming
    class car { //new class
        public $model, $color; //init variable

        public function __construct($model, $color){ //constructor
            $this->color/*<- this take the init variable*/ = $color; // <- the variable on constructor
            $this->model = $model;
        }

        public function message() { //remember, variable outside function not detected. so we used $this->(variable) to take it
            return "My car is ". $this->model . " the color is " . $this->color;
        }
    }

    $Car = new car("BMW","Black"); // make an object and fill the condition on construct thing
    echo $Car -> message(); // call function from car class
?>