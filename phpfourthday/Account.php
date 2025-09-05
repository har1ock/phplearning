<?php
class Account{

    public const MIN_BALANCE = 0;
    private string $owner;
    private float $balance = 0;

    public function __construct(string $owner, float $balance){
        $this->setOwner($owner);
        $this->setBalance($balance);
    }
    
    public function setOwner(string $owner): void {
        $this->owner = trim($owner);
    }
    
    public function setBalance(float $balance): void {
        if($balance < self::MIN_BALANCE){
            throw new InvalidArgumentException(
            "Баланс не може бути менше - ". self::MIN_BALANCE);
        }
        $this->balance = $balance;
    }
    public function deposit(float $sum): float {
        $this->balance = $this->balance + $sum;
        return $this->balance;
    }
  
    public function withdraw(float $sum): float { 
        $this->balance = $this->balance - $sum;
        return $this->balance;
    }
    
    public function getBalance(): float {
        return $this->balance;
    }
}
?>