<?php

class Car {

    // Propriétés car
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $typeEnergy;
    private int $levelFuel;

    // Get & Set nbWheels

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }
    
    public function setNbWheels(string $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    // Get & Set currentSpeed

    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(string $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    // Get & Set Color

    public function getColor(): string
    {
        return $this->color;
    }
    
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Get & Set nbSeats

    public function getnbSeats(): string
    {
        return $this->nbSeats;
    }
    
    public function setnbSeats(string $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // Get & Set typeEnergy

    public function getTypeEnergy(): string
    {
        return $this->typeEnergy;
    }
    
    public function setTypeEnergy(string $typeEnergy): void
    {
        $this->typeEnergy = $typeEnergy;
    }

    // Get & Set levelFuel

    public function getLevelFuel(): int
    {
        return $this->levelFuel;
    }
    
    public function setLevelFuel(string $levelFuel): void
    {
        $this->levelFuel= $levelFuel;
    }

    // Construct
    public function __construct(string $color, int $nbSeats, string $typeEnergy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeEnergy = $typeEnergy;
    }

    // Start
    public function start(): string 
    {
        $sentence = "";
            if ($this->currentSpeed == 0 && $this->levelFuel > 0)
            {
                $this->forward();
                return "Time to start";
            }
    }

    // Avancer
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    
    // Freiner
    public function brake(): string
    {
        $sentence = "";
            while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Oh god, brake !!!";
        }
        $sentence .= "Thank god, I'm stopped !";
            return $sentence;
        }
    

}