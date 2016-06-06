<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/15/16
 * Time: 11:34 PM
 */


class DepartmentInfo {

    public static $departmentName;
    public static $chairman;

    public static function departmentHead($dName, $chair) {
        self::$departmentName = $dName;
        self::$chairman = $chair;
        echo "Department - " . self::$departmentName . "<br/>" . "Chaiman - " . self::$chairman . "<br/>";
    }
}

DepartmentInfo::departmentHead("Statistics", "Dr. Rowshan jahan");
echo DepartmentInfo::$departmentName;
