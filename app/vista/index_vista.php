<?php

/* Iniciamos las varialbles del fichero */
$DESCRIPCION = "certitransporte.com || Formaci&oacute;n Oficial para Transportistas en Sevilla. Consultenos al 954 098 800.";
$CLAVES = "formaci&oacute;n, cursos, certificado, 'certificado de transporte', Sevilla, Transporte, Transportista";
$AUTOR = "TrainingTIC";
$TITULO = "CertiTransporte";
$ACTIVO = 10;

// Empezamos
echo '<!DOCTYPE html><html lang="es-es" dir="ltr">';
    require_once "min/cabecera.php";                       // <head>...</head>
    echo '<body>';
        include_once("min/menu.php");                       // Menú superior fijo
        include_once("min/carrusel.php");                   // Carrusel Principal
        include_once("min/main_index.php");                 // Bloque central de index
        include_once("min/pie.php");                        // pie de página
    echo '</body>';
echo '</html>';
?>