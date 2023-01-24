<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
  //properties are just variables that belong to a class
  //access modifiers: public, private, protected
  //public - can be accessed from everywhere
  //private - can only be accessed from inside the class
  //protected - can only be accessed from inside teh class and by inheriting classes
  public $name;
  public $email;
  public $password;

  //the constructor is called whenever an object is createdfrom the class.
  //we pass in properties to the constructor from the outside
  public function __construct($name, $email, $password) {
    $this -> name=$name;
    $this -> email=$email;
    $this -> password=$password;
  }  

  //methods are functions that belong to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

$user1 = new User('Ryan', 'ryan@gmail.com', '12345');
$user2 = new User('Benjie', 'benjie@gmail.com', 'qwerty');

// echo $user1 -> email;
// echo $user2 -> password;

// $user1-> set_name('Ryan');
// $user2->set_name('Juan');


// // var_dump($user1);
// echo get_name($user1);
// echo get_name($user2);

//inheritance
class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this -> title=$title;
  }
  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Catrice', 'catrice@gmail.com', 12345, 'Manager');
echo $employee1->get_title();

?>