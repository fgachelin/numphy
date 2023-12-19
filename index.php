<!DOCYTYPE html>

<html>

<head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="lib/style.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="lib/python.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="lib/favicon.png" />
    <script src="https://cdn.jsdelivr.net/pyodide/v0.22.1/full/pyodide.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ace-builds@1.15.3/src-min-noconflict/ace.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/lib/python.js"></script>
</head>

<body>

<?php

require 'lib/cherche-contenu.php';
require 'lib/rendu-html.php';

$contenu = cherche_contenu(); // récupère le get["page"] de l'url et redirige vers une page extérieure sinon 
rendu_html($contenu); // mise en forme des docs MD, TXT, PY

?>

</body>

</html>