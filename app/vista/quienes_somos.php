<?php

/* Iniciamos las variables del fichero */
$DESCRIPCION = "certitransporte.com || Accede al formulario de inscripción para poder contactar con nosotros. Consultenos al 954 098 800.";
$CLAVES = "formaci&oacute;n, cursos, certificado, 'certificado de transporte', Sevilla, Transporte, Transportista";
$AUTOR = "TrainingTIC";
$TITULO = "Quienes somos - Certitransporte";
$ACTIVO = 10;

// Empezamos
echo '<!DOCTYPE html><html lang="es-es" dir="ltr">';
    include_once("min/cabecera.php");                                               // <head>...</head>
    echo '<body>';
        include_once("min/menu.php");                                               // Menú superior fijo
        include_once("min/main_quienes_somos/main_quienes_somos.php");              // Bloque central de cursos
        include_once("min/pie.php");                                                // pie de página
    echo '</body>';
echo '</html>';
?>