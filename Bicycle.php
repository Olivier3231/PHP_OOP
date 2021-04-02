<?php

// Bicycle.php


class Bicycle

{
    private string $color;


    private int $currentSpeed;


    private int $nbSeats = 1;


    private $nbWheels = 2; 
    
    
    public function __construct(string $color)

    {

        $this->color = $color;

    }



    public function forward(): string

    {

        if ($this->getCurrentSpeed() < 15) {

            return "Go !";
        } else return $this->brake();

    }

    public function brake(): string

    {

        $sentence = "";

            while ($this->getCurrentSpeed() > 15) {

            $this->currentSpeed--;

             return $sentence .= "Brake !!!";

            }
           
            return "I'm Stopped";

    }

   

    public function getColor(): string

    {

        return $this->color;

    }

    public function setColor(string $color): void

    {

        $this->color = $color;

    }

    public function getCurrentSpeed(): int

    {

        return $this->currentSpeed;

    }


    public function setCurrentSpeed(int $currentSpeed): void

    {

        if($currentSpeed >= 0) {

            $this->currentSpeed = $currentSpeed;
    
        }

    }

}
