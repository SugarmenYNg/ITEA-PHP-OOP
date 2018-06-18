<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 13.06.18
 * Time: 19:45
 */

class Person
{
    const PERSON_AGE = 10;
    const OBJECTS_LIMIT = 3;

    private  static $counter = 0;

    public static $type = "employee";
    //public static $counter = 0;

    private $firstName = 'unnamed';
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

        self::$counter++;

        if (self::$counter === self::OBJECTS_LIMIT) {
            throw new \Exception('Cannot create class object!');
        }
    }

    public function __destruct()
    {
        echo 'Person objects was created: ' . self::$counter . PHP_EOL;
    }

    // pubsf + tab
    // prosf + tab
    // prisf + tab

    // pubf + tab
    // prof + tab
    // prif + tab

    // pubf + tab
    public function getFirstName()
    {
        // $this указатель на экземпляр класса
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setFirstName($firsName)
    {
        $this->firstName = $firsName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    // pubsf + tab
    public static function getData()
    {
        return "Some data";
    }
}
//$person = new Person('Vasya', 'Petrov');
//var_dump($person->getFirstName(), $person->getLastName());

//$person->setFirstName('Vasya');
//$person->setLastName('Petrov');

//var_dump($person->getFirstName());
//var_dump($person->getLastName());

//var_dump(Person::$type);
//Person::$type = "robot";
//var_dump(Person::$type);

var_dump(Person::getData());

$person = new Person('Vasya', 'Petrov');
var_dump($person->getFirstName(), $person->getLastName());

$person->setFirstName('Vasya');
$person->setLastName('Petrov');

var_dump($person->getFirstName());
var_dump($person->getLastName());

$person2 = new Person('Nastya', 'Rezova');
$person3 = new Person('', '');
$person4 = new Person('', '');
