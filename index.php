<?php
require_once __DIR__ . "/classes/Utente.php";
require_once __DIR__ . "/classes/Prodotto.php";
require_once __DIR__ . "/classes/Carta.php";

$utente1 = new Utente("Emanuela", "Mocci", "Via Cristoforo C.", "emanuela@gmail.com", 335679876); 

$utente2 = new Utente("Fabiola", "Caria", "Via Oristano", "fabiola@hotmail.it", 3476578994);

// var_dump($utente2);

$prodotto1 = new Prodotto("Spaghetti", "L4534296", "27-06-2022");

$prodotto2 = new Prodotto("Passata pomodoro", "L6702334", "05-08-2022");

$carta = new Carta("Fabiola", "Caria", 9083767236442829, 356, "04-2025");

echo ("L'utente {$utente2->getNome()} ");
echo ("ha acquistato: {$prodotto2->getNome_prodotto()}. <br>");
echo ("Il numero della carta inserita è: {$carta->getNumero_carta()}.");

// Aggiunta interazione
$utente2-> setCarta($carta);

// var_dump($utente2);