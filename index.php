<?php
// Sustituye include_once por el autoloader 
require_once 'vendor/autoload.php'; 

use Utp\LaboratorioAutoload\Usuario; // Uso de la palabra reservada 'use' 

$objeto = new Usuario();
echo $objeto->mensaje();