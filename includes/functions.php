<?php

function doMovement(Automobile $automobile, $direction) {
    echo $automobile->movement($direction) . '<br>';
}

function setRegistrationData(Automobile $automobile, $registrationData) {
    $automobile->setRegistrationData($registrationData);
}

function getRegistrationData(Automobile $automobile) {
    $registrationData = $automobile->getRegistrationData();
    if (is_array($registrationData) && count($registrationData) > 0)
    foreach($registrationData as $key => $data) {
        echo "{$key}: {$data}<br>";
    } else {
        echo $registrationData;
    }
}

/** 
 * Tunning options Array $tunningOptions ['full' => value, 'nos' => value, 'chipping' => value]. 
*/

function tunning (Car $car, $tunningOptions = []) {
    if (!empty($tunningOptions)) {
        $result =[];
        foreach ($tunningOptions as $option) {
            if ($option === 'full') {
                $result = "<li>{$car->addNos()}</li><li>{$car->chipping()}</li>";
            } else {
                array_push($result, "<li>{$car->$option()}</li>");
            }
        }
        return $result;
    } else {
        return;
    }

}