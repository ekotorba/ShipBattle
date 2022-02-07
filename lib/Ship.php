<?php
class Ship
{
    private $name;
    private $weaponPower = 0;
    private $jediFactor = 0;
    private $strength = 0;
    public $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1,100) < 30;
    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function getName()
    {
       return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {

        if($useShortFormat){
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }else{
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGIvenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    public function setStrength($strength){

        if(!is_numeric($strength)) {
            throw new Exception('invalid Strength passed');
        }

        $this->strength = $strength;
    }

    public function getStrength(){
        return $this->strength;
    }


    public function getJediFactor()
    {
        return $this->jediFactor;
    }


    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }


    public function getWeaponPower()
    {
        return $this->weaponPower;
    }


    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }




}