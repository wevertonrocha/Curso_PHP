<?php

$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
echo $date->format('d/m/Y H:i:s');
