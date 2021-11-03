<?php

class Utente {
    protected $nome;
    protected $cognome;
    protected $indirizzo_casa;
    protected $indirizzo_email;
    protected $numero_telefono;
    protected $carta;

    public function __construct($_nome, $_cognome, $_indirizzo_casa, $_indirizzo_email, $_numero_telefono, $_carta=[])
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo_casa = $_indirizzo_casa;
        $this->indirizzo_email = $_indirizzo_email;
        $this->numero_telefono = $_numero_telefono;
        $this->carta = $_carta;
    }

    public function getNome()
    {
       return $this->nome;
    }

    public function setCarta($_carta)
    {
        $this->carta[] = $_carta;
    }
}

