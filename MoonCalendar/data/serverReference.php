<?php

// получаем параметры выборки новостей от клиента
$start = (int)$_GET['start'];
$limit = (int)$_GET['limit'];



require 'data.php'; // подключаем модель

$dataRef = Reference::GetReference($start, $limit); // вызываем метод модели для получения новостей


echo json_encode($dataRef);// формируем строку в формате JSON и отдаем обратно JS
