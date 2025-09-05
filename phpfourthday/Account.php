<?php
class Account{

    public const MIN_BALANCE = 0;
    private readonly string $owner;
    private float $balance = 0;

    public function __construct(string $owner, float $balance){
        $this->setOwner($owner);
        $this->setBalance($balance);
    }
    
    public function setOwner(string $owner): void {
        $owner = trim($owner);
        if($owner === ''){
            throw new InvalidArgumentException(
                "Ім'я власника не може бути порожнім");
        }
        $this->owner = $owner;

    }
    
    public function setBalance(float $balance): void {
        if($balance < self::MIN_BALANCE){
            throw new InvalidArgumentException(
            "Баланс не може бути менше - ". self::MIN_BALANCE);
        }
        $this->balance = $balance;
    }
    public function deposit(float $sum): float {
        if($sum <= 0){
            throw new InvalidArgumentException(
                "Сума поповнення повинна бути більшою за 0");
        }
        $this->balance += $sum;
        return $this->balance;
    }
  
    public function withdraw(float $sum): float { 
        if($sum > $this->balance){
            throw new InvalidArgumentException(
                "Недостатньо коштів на рахунку");
        }
        $this->balance -= $sum;
        return $this->balance;
    }
    
    public function getBalance(): float {
        return $this->balance;
    }
    public function getOwner(): string {
        return $this->owner;
    }
}
?>