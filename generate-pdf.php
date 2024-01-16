<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

// Obtener datos del formulario
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$curp = $_POST["curp"];
$premio = $_POST["premio"];
$condicion = $_POST["condicion"];
$invitado = $_POST["invitado"];
$nombresinvitado = $_POST["nombresinvitado"];
$apellidosinvitado = $_POST["apellidosinvitado"];
$condicioninvitado = $_POST["condicioninvitado"];


// Configurar Dompdf
$options = new Options;
$options -> setChroot(__DIR__);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4","portrait");

if($invitado === "Sí"){
    $html = file_get_contents("Templates\TwoPersons.html");

    $html = str_replace("{{nombres}}",$nombres,$html);
    $html = str_replace("{{apellidos}}",$apellidos,$html);
    $html = str_replace("{{curp}}",$curp,$html);
    $html = str_replace("{{condicion}}",$condicion,$html);
    $html = str_replace("{{invitado}}",$invitado,$html);
    $html = str_replace("{{premio}}",$premio,$html);
    $html = str_replace("{{nombresinvitado}}",$nombresinvitado,$html);
    $html = str_replace("{{apellidosinvitado}}",$apellidosinvitado,$html);
    $html = str_replace("{{condicioninvitado}}",$condicioninvitado,$html);

    $dompdf->loadHtml($html);
    $dompdf->render();

} else {
    $html = file_get_contents("Templates\OnePerson.html");

    $html = str_replace("{{nombres}}",$nombres,$html);
    $html = str_replace("{{apellidos}}",$apellidos,$html);
    $html = str_replace("{{curp}}",$curp,$html);
    $html = str_replace("{{condicion}}",$condicion,$html);
    $html = str_replace("{{invitado}}",$invitado,$html);
    $html = str_replace("{{premio}}",$premio,$html);

    // Cargar contenido HTML
    $dompdf->loadHtml($html);

    // Renderizar PDF
    $dompdf->render();
}






$dompdf ->addInfo("Title","Invitación al Galardonado");

// Descargar PDF
$dompdf->stream("Invitacion.pdf",["Attachment"=>0]);
