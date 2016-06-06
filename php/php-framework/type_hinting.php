<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/15/16
 * Time: 8:59 PM
 */


/**
 * Type Hinting
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

class TeacherInfo{
    public $teacherName;
    public function __construct($tName) {
        $this->teacherName = $tName;
    }
    public function getTeacher(DepartmentInfo $dept){
        echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department";
    }
}

$dept = new DepartmentInfo("CSE", "Dr.Monirul Islam", 10, 250);
$tinfo = new TeacherInfo("Dr. M. Kaykobad");
$tinfo->getTeacher($dept);


/**
 * instanceof keyword
 */


class DepartmentInfo2{


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


class TeacherInfo2 {


    public $teacherName;


    public function __construct($tName) {
        $this->teacherName = $tName;
    }


    public function getTeacher($dept) {
        if ($dept instanceof DepartmentInfo) {
            echo $this->teacherName . " is a teacher of " . $dept->departmentName . " Department";
        }else{
            die("Sorry \$dept is not a object of class DepartmentInfo");
        }
    }


}


$dept = new DepartmentInfo2("CSE", "Dr.Monirul Islam", 10, 250);
$tinfo = new TeacherInfo2("Dr. M. Kaykobad");
$tinfo->getTeacher($dept);
?>