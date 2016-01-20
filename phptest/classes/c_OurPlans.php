<?php

class OurPlans
{
    public $color = "#ff0000";

    private $age = 20;

    public function __construct()
    {
      //  echo "ist aufgerufen";
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    function getColor()
    {

        return $this->color;
    }

    /**
     *
     */
    public function printSomething()
    {
        echo "hallo, something";
    }


}




class Beispiel
{
    public static $name;

    public function nameGeben($newName)
    {
        self::$name = $newName;
    }

    public function vorstellen()
    {
        echo "Hallo, ich heiße " . self::$name;
    }
}

$objekt1 = new Beispiel();
$objekt2 = new Beispiel();

$objekt1->nameGeben('Hans');
$objekt2->nameGeben('Max');

$objekt1->vorstellen();
$objekt2->vorstellen();


echo Beispiel::$name = 'Albert';

echo $name;
