<?php

//Automobile.php

abstract class Automobile {

    private $weight;
    private $length;
    private $width;
    private $height;
    private $vin;
    private $manufactureDate;
    private $model;
    
    // ability to move or not: moves forward or backward, or not moves, or fly, or sails, etc.
    abstract function movement($parameters);

    abstract function setRegistrationData(Array $parameters);
    abstract function getRegistrationData();

}