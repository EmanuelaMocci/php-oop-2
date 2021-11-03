<?php
require_once __DIR__ . "/classes/Utenti.php";
require_once __DIR__ . "/classes/Prodotti.php";


$utente1 = new Utenti("Emanuela", "Mocci", "Via Cristoforo C.", "emanuela@gmail.com", 335679876); 

$utente2 = new Utenti("Fabiola", "Caria", "Via Oristano", "fabiola@hotmail.it", 3476578994);

$prodotto1 = new Prodotti("Spaghetti", "L4534296", "27-06-2022");

$prodotto2 = new Prodotti("Passata pomodoro", "L6702334", "05-08-2022");

echo ("L'utente {$utente2->getNome()} ");
echo ("ha acquistato: {$prodotto2->getNome_prodotto()}");

