<?php
require 'class_account.php';

class BankAccount extends Account{
    public $costumer;

    function __construct($no, $saldo_awal, $cust)
    {
        parent::__construct($no, $saldo_awal);
        $this->costumer = $cust;
    }

    function cetak()
    {
        parent::cetak();
        echo ', Costumer : ' . $this->costumer . '<br><br>';
    }

    function transfer($obj_account, $uang)
    {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }
}

// $awal = new Account()
$bnk1 = new BankAccount('B001', 6000000, 'Apin');
$bnk2 = new BankAccount('B002', 5350000, 'Rafly');
$bnk3 = new BankAccount('B003',2500000, 'Fauzi');
$array1 = [$bnk1, $bnk2, $bnk3];

$bnk1->deposit(1000000);
$bnk1->transfer($bnk2, 500000);
$bnk1->transfer($bnk3, 1500000);
// $bnk1->cetak();
$bnk1->withdraw(2500000);

$array2 = [$bnk1, $bnk2, $bnk3];

?>