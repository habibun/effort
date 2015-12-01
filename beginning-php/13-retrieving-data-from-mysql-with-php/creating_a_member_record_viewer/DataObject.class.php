<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/29/15
 * Time: 7:35 PM
 */

require_once "config.php";

abstract class DataObject2{
    protected $data = array();

    /**
     * DataObject2 constructor.
     * @param array $data
     */
    public function __construct( $data ) {
        foreach ( $data as $key => $value ) {
            if ( array_key_exists( $key, $this->data ) ) $this->data[$key] = $value;
        }
    }

    public function getValue($field){
        if(array_key_exists($field, $this->data)){
            return $this->data[$field];
        } else {
            die("Field not found.");
        }
    }

    public function getValueEncoded($field){
        return htmlspecialchars($this->getValue($field));
    }

    protected function connect(){
        try{
            $conn = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_PERSISTENT, true);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " .$e->getMessage());
        }
        return $conn;
    }

    protected function disconnect($conn){
        $conn = "";
    }

}