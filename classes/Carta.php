<?php

class Carta {
    protected $numero_carta;
    protected $cv2;
    protected $data_scadenza;

    public function __construct($_numero_carta, $_cv2, $_data_scadenza)
    {
        $this->numero_carta = $_numero_carta;
        $this->cv2 = $_cv2;
        $this->data_scadenza = $_data_scadenza;
    }

    public function getNumero_carta()
    {
        return $this->numero_carta;
    }
}