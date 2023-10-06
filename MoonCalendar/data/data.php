<?php
require_once 'DBConnection.php';
$pdoInd = DBConnect::getConnection();
// описание ролей пользователей
$query = "SELECT `idparticipants`, `nameParticipants`, `descriptionNameParticipants`, `nameBtn`, `nameLink` 
          FROM `participants` ";
$statementInd = $pdoInd->query($query);
$newsList = $statementInd->fetchAll();

// блок спровочной информации для главной
$referensQryLim = "SELECT `idReference`, `nameReference`, `descriptionReference`, `linkReference` 
FROM `reference` 
ORDER BY `dataAdd` DESC 
LIMIT 5";
$statementRef = $pdoInd->query($referensQryLim);
$listRefLim = $statementRef->fetchAll();

//получение полного списка справки
$pdoIndAll = DBConnect::getConnection();
$referenceAll = "SELECT `idReference`, `nameReference`, `descriptionReference`, `linkReference` 
FROM `reference` 
ORDER BY `nameReference` DESC";
$statementRefAll = $pdoIndAll->query($referenceAll);
$listRef = $statementRefAll->fetchAll();
// полный список справки через класс 

class Reference {
public static function GetReference ($start, $limit){
    $pdo = DBConnect::getConnection();
    $query = "SELECT `idReference`, `nameReference`, `descriptionReference`, `linkReference`, `dataAdd` FROM `reference` ORDER BY `nameReference` DESC LIMIT $start, $limit;";
   $listRef = $pdo -> query($query) -> fetchAll();
   $queryCount = "SELECT COUNT(*) AS count FROM `reference`;";
   $count = $pdo -> query($queryCount) -> fetch()["count"];
    return ["listRef" => $listRef, "count" => $count];
}

public static function GetRefId($refId){
    $pdo = DBConnect::getConnection();
    $queryRefId = "SELECT `idReference`, `nameReference`, `descriptionReference`, `linkReference`
    FROM `reference` 
    WHERE `idReference` = ?;";

    $statementRefId = $pdo -> prepare($queryRefId);
    $statementRefId->execute([$refId]);
    return  $statementRefId ->fetch();
}

}


