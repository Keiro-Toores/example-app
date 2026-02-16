<?php

class Vehicle
{
    protected $engineStatus = "off";
    
    public function startEngine()
    {
        $this->engineStatus = "on";
        return "Engine started";
    }
    
    public function getEngineStatus()
    {
        return $this->engineStatus;
    }
}


$vehicle = new Vehicle();

$vehicle->startEngine();
echo $vehicle->getEngineStatus();