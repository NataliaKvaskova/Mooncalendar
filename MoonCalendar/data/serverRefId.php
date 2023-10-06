<?php

$refId = (int)$_GET['refId'];

require 'data.php'; // подключаем модель

$dataRefId = Reference::GetRefId($refId);
echo json_encode($dataRefId);