<?php
class Account{

    public const MIN_BALANCE = 0;
    private string $owner;
    private float $balance = 0;

    public function __construct(){

    }
    
    public function setOwner(string $owner): void {

    }
    
    public function setBalance(float $balance): void {
        if($balance < self::MIN_BALANCE){

        }
    }
    public function deposit(): float {

    }

    
    public function withdraw(): float { 

    }
    
    public function getBalance(): float {
        return
    }
}
?>