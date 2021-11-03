<?php

class Prodotto {
    protected $nome_prodotto;
    protected $numero_lotto;
    protected $data_scadenza;

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