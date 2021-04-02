<?php

//Car.php

class Car
{
    private int $carWheelsNb;
    private int $carCurrentSpeed;
    private string $carColor;
    private int $carSeatsNb;
    private string $carEnergy;
    private int $carEnergyLevel;

    public function __construct(string $carColor, int $carSeatsNb, string $carEnergy)
    {
        $this->carColor = $carColor;
        $this->carSeatsNb = $carSeatsNb;
        $this->carEnergy = $carEnergy;
    }

    public function setCarCurrentSpeed(int $carCurrentSpeed): void
    {
        if($carCurrentSpeed >= 0) {

            $this->carCurrentSpeed = $carCurrentSpeed;
        }

    }

    public function getCarCurrentSpeed(): int
    {
        return $this->carCurrentSpeed;
    }

    public function setcarWheelsNb(int $carWheelsNb): void
    {   

        $this->carWheelsNb = $carWheelsNb;
        
    }

    public function getcarWheelsNb(): int
    {
        return $this->carWheelsNb;
    }

    public function setcarColor(string $carColor): void
    {   

        $this->carColor = $carColor;
        
    }

    public function getcarColor(): string
    {
        return $this->carColor;
    }

    public function setcarSeatsNb(int $carSeatsNb): void
    {   

        $this->carSeatsNb = $carSeatsNb;
        
    }

    public function getcarSeatsNb(): int
    {
        return $this->carSeatsNb;
    }

    public function setcarEnergy(string $carEnergy): void
    {   

        $this->carEnergy = $carEnergy;
        
    }

    public function getcarEnergy(): string
    {
        return $this->carEnergy;
    }

    public function setcarEnergyLevel(int $carEnergyLevel): void
    {   

        $this->carEnergyLevel = $carEnergyLevel;
        
    }

    public function carEnergyLevel(): int
    {
        return $this->carEnergyLevel;
    }


    public function carStart(): string
    {
        if ($this->getCarCurrentSpeed() <= 0){

            return "Go !"; 

        } else  return $this->carForward();
        
    }

    public function carForward():string
    {
        if ($this->getCarCurrentSpeed() < 15) {

            return "Keep on movin'!";

        } else return $this->carBrake();


    }

    public function carBrake(): string
    {
        $carSentence = "";

        while ($this->getCarCurrentSpeed() > 15) {

            $this->CarCurrentSpeed--;

            $carSentence .= "Brake !!!";

            }

        $carSentence .= "I'm stopped !";

        return $carSentence;
        
    }

}
