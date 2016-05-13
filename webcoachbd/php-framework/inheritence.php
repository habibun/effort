<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/14/16
 * Time: 10:33 PM
 */

/**
 * Inheritence
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
}

class CseDept extends DepartmentInfo {
    public $labsNumber;
    public function programmingActivity() {
        echo "Department of " . $this->departmentName . " should arrange programming contest like other university" . "<br/>";
    }
}

$statistics = new StatisticsDept("Statistics", "Dr. Rowshan Jahan", 6, 300);
echo "Chairman - " . $statistics->chairman . " * Students - " . $statistics->numberOfStudents . "<br/>";
$statistics->departmentActivity();
$cse = new CseDept("Computer Science and Engineering", "Dr.Jugal Krishna Das", 5, 300);
echo "Chairman - " . $cse->chairman . " * Students - " . $cse->numberOfStudents . "<br/>";
$cse->departmentActivity();
$cse->programmingActivity();

/**
 * Constructor method and inheritance
 */

class DepartmentInfo2 {
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

class StatisticsDept2 extends DepartmentInfo2 {
    public $labsNumber;
    public function __construct($dept, $chair, $room, $stdNumber, $labs) {
        parent::__construct($dept, $chair, $room, $stdNumber);
        $this->labsNumber = $labs;
    }
}

class CseDept2 extends DepartmentInfo2 {
    public $labsNumber;
    public function __construct($dept, $chair, $room, $stdNumber, $labs) {
        parent::__construct($dept, $chair, $room, $stdNumber);
        $this->labsNumber = $labs;
    }

    public function programmingActivity() {
        echo "Department of " . $this->departmentName . " should arrange programming contest like other university" . "<br/>";
    }
}

$statistics = new StatisticsDept2("Statistics", "Dr. Rowshan Jahan", 6, 300, 2);
echo $statistics->labsNumber . " labs are available in " . $statistics->departmentName . " department <br/>";
echo "Chairman - " . $statistics->chairman . " * Students - " . $statistics->numberOfStudents . "<br/>";
$statistics->departmentActivity();

$cse = new CseDept2("Computer Science and Engineering", "Dr.Jugal Krishna Das", 5, 300, 1);
echo $cse->labsNumber . " lab available in " . $cse->departmentName . " department <br/>";
echo "Chairman - " . $cse->chairman . " * Students - " . $cse->numberOfStudents . "<br/>";
$cse->departmentActivity();
$cse->programmingActivity();
