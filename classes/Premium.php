<?php

require_once __DIR__ . "/Utenti.php";

class Premium extends Utente {
    protected $sconto_premium;

    public function __construct($_nome, $_cognome, $_indirizzo_casa, $_indirizzo_email,$_numero_telefono, $_sconto_premium)
    {
       parent ::__construct($_nome, $_cognome, $_indirizzo_casa, $_indirizzo_email, $_numero_telefono);
       $this->sconto_premium = $_sconto_premium;
    }

    public function getSconto()
    {
        return $this->sconto_premium;
    }
}
