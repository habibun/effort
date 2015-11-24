<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/17/15
 * Time: 9:06 PM
 */

/**
 * 1.
 * Write a Calculator class that can store two values, then add them, subtract them, multiply
 * them together, or divide them on request. For example:
 * $calc = new Calculator( 3, 4 );
 * echo $calc->add(); // Displays "7"
 * echo $calc->multiply(); // Displays "12"
 */
Class Calculator2
{

    private $_param1;
    private $_param2;

    public function __construct($param1, $param2)
    {
        $this->_param1 = $param1;
        $this->_param2 = $param2;
    }

    public function addition()
    {
        return $this->_param1 + $this->_param2;
    }

    public function subtract()
    {
        return $this->_param1 - $this->_param2;
    }

    public function multiply()
    {
        return $this->_param1 * $this->_param2;
    }

    public function divide()
    {
        return $this->_param1 / $this->_param2;
    }
}

$calc = new Calculator2(3, 4);
//echo $calc->addition()."\n";
//echo $calc->subtract()."\n";
//echo $calc->multiply()."\n";
//echo $calc->divide()."\n";


/**
 * 2.
 * Create another class, CalcAdvanced, that extends (inherits from) the Calculator class.
 * CalcAdvanced should be capable of storing either one or two values:
 * $ca = new CalcAdvanced( 3 );
 * $ca = new CalcAdvanced( 3, 4 );
 * CalcAdvanced should also add the following methods:
 * ❑
 * pow() that returns the result of raising the first number (the base) to the power of the
 * second number
 * ❑
 * sqrt() that returns the square root of the first number
 * ❑
 * exp() that returns e raised to the power of the first number
 * (Hint: PHP contains built-in functions called pow(), sqrt(), and exp().)
 */
class Calculator5
{
    protected $_val1, $_val2;

    public function __construct($val1, $val2)
    {
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    public function add()
    {
        return $this->_val1 + $this->_val2;
    }

    public function subtract()
    {
        return $this->_val1 - $this->_val2;
    }

    public function multiply()
    {
        return $this->_val1 * $this->_val2;
    }

    public function divide()
    {
        return $this->_val1 / $this->_val2;
    }
}

class CalcAdvanced5 extends Calculator5
{
    private static $_allowedFunctions = array("pow" => 2, "sqrt" => 1, "exp" => 1);

    public function __construct($val1, $val2 = null)
    {
        parent::__construct($val1, $val2);
    }

    public function __call($methodName, $arguments)
    {
        if (in_array($methodName, array_keys(CalcAdvanced5::$_allowedFunctions))) {
            $functionArguments = array($this->_val1);
            if (CalcAdvanced5::$_allowedFunctions[$methodName] == 2) array_push(
                $functionArguments, $this->_val2);
            return call_user_func_array($methodName, $functionArguments);
        } else {
            die ("<p>Method ‘CalcAdvanced5::$methodName’ doesn’t exist</p>");
        }
    }
}

$ca = new CalcAdvanced5(3, 4);
echo "<p>3 + 4 = " . $ca->add() . "</p>";
echo "<p>3 - 4 = " . $ca->subtract() . "</p>";
echo "<p>3 * 4 = " . $ca->multiply() . "</p>";
echo "<p>3 / 4 = " . $ca->divide() . "</p>";
echo "<p>pow( 3, 4 ) = " . $ca->pow() . "</p>";
echo "<p>sqrt( 3 ) = " . $ca->sqrt() . "</p>";
echo "<p>exp( 3 ) = " . $ca->exp() . "</p>";

