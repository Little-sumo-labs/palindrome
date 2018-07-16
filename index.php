<?php

ini_set('display_errors', 1); // Afficher les erreurs à l'écran
error_reporting(E_ALL); // Afficher les erreurs et les avertissements

// Insertion des classes PHP
require 'vendor/autoload.php';

use \App\palindrome as palindrome;

$phrases = [
    "Bonjour",
    "123321",

    "Mon nom",
    "Eh ! ça va la vache",
    "À l'émir, Asimov a vomi sa rime, là",
    "Engage le jeu que je le gagne",
    "Noël a trop par rapport à Léon",
    "À l'étape, épate-la !",
    "La mère Gide digère mal",
    "Léon, émir cornu, d'un roc rime Noël",
    "Élu par cette crapule",
    "Un radar nu",
    "Ésope reste ici et se repose",
    "Éric notre valet alla te laver ton ciré",
    "Luc notre valet alla te laver ton cul",
    "Tâte l'État !",
    "Un roc cornu",
    "Tu l'as trop écrasé, César, ce Port-Salut",
    "Oh, cela te perd répéta l'écho",
    "rue Verlaine gela le génial rêveur",
    "Et la marine va venir à Malte",
    "La malade pédala mal",
    "Elle dira hélas à la sale haridelle",

    "Caserne, genre sac.",
    "Élucide l'édicule",
    "Éros s'essore.",
    "Et curé gorgé de grog éructe",
    "Rose utérus, à ma masure, tu es or !",
    "Nue, j'aime demi à jeun.",
    "Sa lèvre cervelas.",
    "Sévère mal à l'âme, rêves.",
    "Ta fesse n'a le désir irisé de l'ânesse, fat !",
    "Un socialiste, et si laïc, os nu."
];

$palindrome = new palindrome();

foreach ($phrases as $phrase) {
    echo  $palindrome->true_or_not($phrase)."<br />";
}