<?php

include_once 'Revista.php';
include_once 'Assinante.php';

$revista = new Revista();
$assinante = new Assinante();
$assinante->name = 'An';

$assinante2 = new Assinante();
$assinante2->name = 'Jose';

$revista->attach($assinante);
$revista->attach($assinante2);

$revista->notify();