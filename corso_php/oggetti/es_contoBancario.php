<?php

class ContoBancario {
    private $saldo;

    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
    }
    public function deposita($importo) {
            $this->saldo += $importo;
    }
    public function preleva($importo) {
        if ($importo <= $this->saldo) {
            $this->saldo -= $importo;
            return $importo;
        }
        return 0; // saldo non sufficiente
    }
    public function getSaldo() {
        return $this->saldo;
    }
}

$contoCamilla=new ContoBancario(5000);
echo $contoCamilla->getSaldo() ."\n";
$contoCamilla->deposita(50);
echo $contoCamilla->getSaldo() ."\n";
$contoCamilla->preleva(100);
echo $contoCamilla->getSaldo() ."\n";

?>
