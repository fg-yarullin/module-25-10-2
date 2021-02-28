<?php

class Car extends Automobile {
    private $seatsCount;

    // private function construct($vin) {
    //     $this->vin = $vin;
    // }

    function movement($direction) {
        return "Move to {$direction}.";
    }

    function setRegistrationData(Array $data) {
        if (isset($data)) {
            if (isset($data['model'])) $this->model = $data['model'];
            if (isset($data['vin'])) $this->vin = $data['vin'];
            if (isset($data['manufactureDate'])) $this->manufactureDate = $data['manufactureDate'];
            if (isset($data['weight'])) $this->weight = $data['weight'];
            if (isset($data['length'])) $this->length = $data['length'];
            if (isset($data['width'])) $this->width = $data['width'];
            if (isset($data['height'])) $this->height = $data['height'];
        } else {
            return exit("No registration data.");
        }
    }

    function getRegistrationData() {
        if (!empty($this->vin) || !empty($this->model) || !empty($this->manufactureDate)) {
            return (
                array(
                    'vin' => $this->vin,
                    'model' => $this->model,
                    'manufactureDate' => $this->manufactureDate,
                )
            );
        } else {
            return 'Registration information has not set yet.<br>';
        }
        
    }

    function getSeatsCount() {
        return $this->seatsCount;
    }
}