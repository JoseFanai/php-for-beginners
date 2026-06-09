<?php

class BankAccount
{
    public string $accountHolder;
    private float $balance = 0;

    public function __construct(string $accountHolder)
    {
        $this->accountHolder = $accountHolder;
        echo "Account Holder: " . $this->accountHolder . "<br>";
    }
    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        echo "₹" . $amount . " deposited. <br>Remaining balance: ₹" . $this->balance . "<br>";
    }

    public function withdraw(float $amount)
    {
        if ($this->balance < $amount) {
            echo "ERROR: Insufficient balance! <br>";
            return;
        }

        $this->balance -= $amount;
        echo "transaction of ₹" . $amount . " completed <br>";
        echo "Remaining balance ₹" . $this->balance . "<br>";
    }
}

$grace = new BankAccount("Grace Vanneihsangi");

$grace->deposit(1000);
$grace->withdraw(2000);
$grace->withdraw(500);
echo "Balance: ₹" . $grace->getBalance();

?>
