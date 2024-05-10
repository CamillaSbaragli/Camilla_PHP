<?php
class Account {
    private $saldo;
 
    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }
 
    public function deposita($importo) {
        if ($importo > 0) {
            $this->saldo += $importo;
        }
    }
 
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
            return $importo;
        }
        return 0; // Non sufficiente saldo
    }
 
    public function getSaldo() {
        return $this->saldo;
    }
}


$contoCamilla=new Account(5000);
echo $contoCamilla->getSaldo();
$contoCamilla->deposita(50);
echo $contoCamilla->getSaldo();
$contoCamilla->preleva(100);
echo $contoCamilla->getSaldo();





?>