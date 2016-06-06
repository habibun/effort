<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/15/16
 * Time: 8:15 PM
 */



class DepartmentInfo {


    public $departmentName;
    public $chairman;
    public $classRoom;
    public $numberOfStudents;


    public function __construct($dept, $chair, $room, $stdNumber) {
        $this->departmentName = $dept;
        $this->chairman = $chair;
        $this->classRoom = $room;
        $this->numberOfStudents = $stdNumber;
    }


    public function departmentActivity() {
        echo "Deartment of " . $this->departmentName . " arrange a tour in every year" . "<br/>";
    }


}


class StatisticsDept extends DepartmentInfo {


    public $labsNumber;


    public function departmentActivity() {
        parent::departmentActivity();
        echo $this->departmentName . " department publish a journal yearly <br/>";
    }


}


class CseDept extends DepartmentInfo {


    public $labsNumber;
    public function departmentActivity() {
        parent::departmentActivity();
        echo $this->departmentName . " department recently arranged a seminar on web development <br/>";
    }
    public function programmingActivity() {
        echo "Department of " . $this->departmentName . " should arrange programming contest like other university" . "<br/>";
    }


}


$statistics = new StatisticsDept("Statistics", "Dr. Rowshan Jahan", 6, 300);


$statistics->departmentActivity();
$cse = new CseDept("Computer Science and Engineering", "Dr.Jugal Krishna Das", 5, 300);
$cse->departmentActivity();
?>