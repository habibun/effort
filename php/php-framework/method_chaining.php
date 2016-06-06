<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/18/16
 * Time: 10:49 PM
 */

class Bangladesh
{
    private $info="";

    public function setContinent($continet)
    {
        $this->info.="Continent : ".$continet."<br/>";
    }
    public function setLang($lang)
    {
        $this->info.="Language : ".$lang."<br/>";
    }
    public function showInfo()
    {
        return $this->info;
    }

    public function americaLang()
    {
        return (new America);
    }
}

class America
{
    public $lang="Language : English";
}

//$bangladesh = new Bangladesh;
//$bangladesh->setContinent("Asia");
//$bangladesh->setLang("Bengali");
//echo $bangladesh->showInfo();

//echo $bangladesh->setContinent("Asia")->setLang("Bengali")->showInfo();


class Bangladesh2
{
    private $info="";

    public function setContinent($continet)
    {
        $this->info.="Continent : ".$continet."<br/>";
        return $this;
    }
    public function setLang($lang)
    {
        $this->info.="Language : ".$lang."<br/>";
        return $this;
    }
    public function showInfo()
    {
        return $this->info;
    }

    public function americaLang()
    {
        return (new America2);
    }
}

class America2
{
    public $lang="Language : English";
}

$bangladesh = new Bangladesh2;
echo $bangladesh->setContinent("Asia")->setLang("Bengali")->showInfo();

