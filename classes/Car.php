<?php

//require __DIR__ . '/../interfaces/Tunning.php';
require __DIR__ . '/../interfaces/tunning/nitrousOxideSystem.php';
require __DIR__ . '/../interfaces/tunning/remapping.php';
require __DIR__ . '/../interfaces/beep.php';
require __DIR__ . '/../interfaces/wipersOn.php';
require __DIR__ . '/../interfaces/interior.php';

class Car extends Automobile implements interior,nitrousOxideSystem, remapping, beep, wipersOn {
    private $seatsCount;
    private $bodyType;

    public function __construct(string $vin, string $model, string $manufactureDate, int $weight) {
        $this->vin = $vin;
        $this->model = $model;
        $this->manufactureDate = $manufactureDate;
        $this->weight = $weight;
    }

    public function movement($direction) {
        return "Move to {$direction}";
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

    public function getRegistrationData() {
        if (!empty($this->vin) || !empty($this->model) || !empty($this->manufactureDate)) {
            return (
                array(
                    'vin' => $this->vin,
                    'model' => $this->model,
                    'manufactureDate' => $this->manufactureDate,
                )
            );
        } else {
            return 'Registration information has not set yet<br>';
        }
        
    }

    public function getSeatsCount() {
        return $this->seatsCount;
    }

/* ---------------using the interface--------------------- */
    /**
     * bool $flag - set it true to add Nitrous Oxide System, otherwise set false
     */
    public function addNos() {
        return 'Application for the "Nitrous Oxide System" kit instaling is accepted';
    }

    public function chipping() {
        return 'Application for the engine chipping is accepted';
    }

    public function beep() {
        return 'beep beeeep beep';
    }

    public function wipersOn(bool $isRainy) {
        if ($isRainy) {
            return 'Turn on the wipers.';
        } else {
            return 'Turn off the wipers';
        }
    }

    public function interior($interiorOptions = []) {
        $options = '';
        if (isset($interiorOptions)) {
            foreach($interiorOptions as $key => $value) {
                $options .= "$key: $value<br>";
            }
        }
        return $options;
    }
}