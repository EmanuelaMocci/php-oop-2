<?php

class Carta {
    protected $nome_intestatario;
    protected $cognome_intestatario;
    protected $numero_carta;
    protected $cv2;
    protected $data_scadenza;

    public function __construct($_nome_intestatario, $_cognome_intestatario, $_numero_carta, $_cv2, $_data_scadenza)
    {
        $this->nome_intestatario = $_nome_intestatario;
        $this->cognome_intestatario = $_cognome_intestatario;
        $this->numero_carta = $_numero_carta;
        $this->cv2 = $_cv2;
        $this->data_scadenza = $_data_scadenza;
    }

    public function getNumero_carta()
    {
        return $this->numero_carta;
    }
}