<?php

class Utenti {
    private $nome;
    private $cognome;
    private $indirizzo_casa;
    private $indirizzo_email;
    private $numero_telefono;

    public function __construct($_nome, $_cognome, $_indirizzo_casa, $_indirizzo_email, $_numero_telefono)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo_casa = $_indirizzo_casa;
        $this->indirizzo_email = $_indirizzo_email;
        $this->numero_telefono = $_numero_telefono;
    }

    public function getNome()
    {
       return $this->nome;
    }
}

