<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/16/15
 * Time: 7:13 PM
 */

/**
 * setting up new objects with constructors
 */
class Person3{
    private $_firstName;
    private $_lastName;
    private $_age;

    public function __construct($firstName,$lastName,$age)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_age = $age;
    }

    public function showDetails()
    {
        echo "$this->_firstName $this->_lastName, age $this->_age\n";
    }
}

$person = new Person3("Harry","Walters",28);
//$person->showDetails();

/**
 * cleaning up objects with destructors
 */
class Person4{
    public function save()
    {
        echo "Saving this object to the database.....\n";
    }

    public function __destruct()
    {
        $this->save();
    }
}

$p = new Person4;
unset($p);
$p2 = new Person4;
die("Something's gone horribly wrong!\n");
