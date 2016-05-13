<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/16/16
 * Time: 9:16 PM
 */
abstract class DepartmentInfo {

    abstract public function departmentActivity();
}

class StatisticsDept extends DepartmentInfo {

    public function departmentActivity() {
        echo "Statistics department arrange a tour yearly<br/>";
    }

}

class CseDept extends DepartmentInfo {

    public function departmentActivity() {
        echo "CSE department should arrange programming contest";
    }

}

$sdept = new StatisticsDept();
$sdept->departmentActivity();
$cdept = new CseDept();
$cdept->departmentActivity();