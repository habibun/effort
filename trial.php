<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/4/15
 * Time: 7:38 PM
 */

$test = array("firstName" => "Habibun", "lastName" => "Noby");

/*if(array_key_exists("firstName", $test)){
    echo "Yea!";
}*/

/*if(in_array("Habibun", $test)){
    echo "Yea!";
}*/

/**
 * Class Test
 */
class Test {
    public $data = array();

    /**
     * Test constructor.
     * @param array $data
     */
    public function __construct($data)
    {
        foreach($data as $key => $value){
            if(array_key_exists($key, $this->data))
                $this->data[$key] = $value;
        }
    }


}

$soNow = new Test($test);


print_r($soNow);