<?php

/* Iniciamos las varialbles del fichero */
$DESCRIPCION = "certitransporte.com || Información sobre el junte de los dos cursos de transportistas. Consultenos al 954 098 800.";
$CLAVES = "formaci&oacute;n, cursos, certificado, 'certificado de transporte', Sevilla, Transporte, Transportista";
$AUTOR = "TrainingTIC";
$TITULO = "Curso transportista - Certitransporte";
$ACTIVO = 10;

 

// Empezamos
echo '<!DOCTYPE html><html lang="es-es" dir="ltr">';
    include_once("min/cabecera.php");                             // <head>...</head>
    echo '<body>';
        include_once("min/menu.php");                             // Menú superior fijo
        include_once("min/cursos/main_cursos.php");               // Bloque central de cursos
        include_once("min/pie.php");                              // pie de página
    echo '</body>';
echo '</html>';
?>