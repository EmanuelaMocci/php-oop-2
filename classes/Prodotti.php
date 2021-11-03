<?php

class Prodotti {
    private $nome_prodotto;
    private $numero_lotto;
    private $data_scadenza;

    public function __construct($_nome_prodotto, $_numero_lotto, $_data_scadenza)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->numero_lotto = $_numero_lotto;
        $this->data_scadenza = $_data_scadenza;
    }

    public function getNome_prodotto(){
        return $this->nome_prodotto;
    }
}