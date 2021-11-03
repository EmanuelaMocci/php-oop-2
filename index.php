<?php
require_once __DIR__ . "/classes/Utenti.php";

$utente1 = new Utenti("Emanuela", "Mocci", "Via Cristoforo C.", "emanuela@gmail.com", 335679876); 

$utente2 = new Utenti("Fabiola", "Caria", "Via Oristano", "fabiola@hotmail.it", 3476578994);
var_dump($utente1);