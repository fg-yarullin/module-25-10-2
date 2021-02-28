<?php

function moveAutomobile(Automobile $automobile, $direction) {
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