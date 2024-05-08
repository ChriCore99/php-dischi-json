<?php
    // recupera i dati dal file dischi.json
   $array_dati_json = file_get_contents('dischi.json');

   $dischi = json_decode($array_dati_json, true);

    header ('Content-type: application/json');

    echo json_encode ($dischi);
?>