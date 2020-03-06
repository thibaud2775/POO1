<?php

class Log
{

    public function logwrite(string $data)
    {
        $directory = "/logs/"; //dossier logs car fopen ne peut pas créer de fichier
        $file = date('Y-m-d') . ".log"; // nom du fichier 1 fichier de log par jour
        $path = dirname(__DIR__) . $directory . $file; //défini le chemin du fichier
        $data = date('H:i:s') . "-" . $data; //data message
        $handle = fopen($path, "a"); //j'ouvre mon chemin 1 art chemin 2 façon d'ouvrir 
        if (flock($handle, LOCK_EX)) {//On vérifie qu'il n'est pas en ecriture et fermé donc
            fwrite($handle, $data . PHP_EOL); //j'écris data avec retour de chariot PHP EOL
            flock($handle, LOCK_UN);
        }
        fclose($handle); // une fois que j'ai finis l'écriture je ferme ma ressource
    }
}
