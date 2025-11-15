<?php
//Класс Банковский аккаунт
class BankAccount {
    //protected(защищенное) св-во: запрещает доступ к св-ву объекта из вне. Св-во Можно наследовать и использовать в методах объекта
    protected $balance;
    protected $accountNumber;
    
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    //Метод пополнения денег
    public function deposit($amount) {
        $this->balance += $amount;
        echo "Внесено: $amount. Новый баланс: {$this->balance}\n";
    }
    //Метод снятие денег
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Снято: $amount. Новый баланс: {$this->balance}\n";
        } else {
            echo "Недостаточно средств!\n";
        }
    }
    //Метод для получение баланса
    public function getBalance() {
        echo "Баланс: {$this->balance}\n";
    }
}

// Использование
echo "=== Обычный счет ===\n";
$account = new BankAccount("123456", 1000);
$account->deposit(500); // 1500
$account->withdraw(200); // 1300
$account->deposit(700); // 2000
$account->withdraw(2000); // 0
$account->withdraw(1000); // Недостаточно средств
$account->getBalance(); // Баланс: 0
?>