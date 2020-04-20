<!-- Importo i miei dati direttamente qui, così da tenere pulito il codice index.php
e traferire i dati nel mio .js da dare in pasto all'AJAX che poi me lo importerà con handlebars
o l'append, sul mio index.php
 -->
<?php

    include 'data.php'; //Importo i datiche mi servono (array);
    header('Content-Type = application/json'); //Trasformo in un json;
    echo json_encode($playlist); //Lo stampo alla chiamata /server.php codificato in json

 ?>
