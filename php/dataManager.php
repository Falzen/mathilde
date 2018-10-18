<?php

require_once("config.php"); 

if(isset($_GET["action"]) && !empty($_GET["action"])) {
    $action = $_GET["action"];
    switch($action) {

        case "createNewMap" :
        $newMap = json_decode($_REQUEST["content"]);
        var_dump($newMap);
        createNewMap($newMap);
        break;

        case "getNextDates" :
        getNextDates();
        break;

        default:
        echo "nothing happened";
        break;

    }// end switch action
}// end if isset action

function createNewMap($mapToInsert) {
	$db = getConn();


    $stmt = $db->prepare("INSERT INTO map (name, level, height, width, start_position, exit_position, walls) 
        VALUES (?,?,?,?,?,?,?)");

    $stmt->bindParam(1, $mapToInsert->name);
    $stmt->bindParam(2, $mapToInsert->level);
    $stmt->bindParam(3, $mapToInsert->height);
    $stmt->bindParam(4, $mapToInsert->width);
    $stmt->bindParam(5, $mapToInsert->startPosition);
    $stmt->bindParam(6, $mapToInsert->exitPosition);
    $stmt->bindParam(7, serialize($mapToInsert->walls));

    $stmt->execute();
    $db = null;

    echo "insertion réussie.";
}

function getNextDates() {
    $db = getConn();
    $nextDates = [];
    $queryLastDates = "select id, datevalue, projectid from date_time ORDER BY datevalue DESC limit 3";
    $nextProjectIds_temp = [];

    foreach  ($db->query($query) as $row) {
        array_push($nextProjectIds_temp, $row['projectid']);
    }

    $stmt = $db->prepare("select id, nom, from project where id in ?");
    $stmt->bindParam(1, $nextProjectIds_temp);
    $stmt->execute();

    $res = $stmt->get_result();
    $rows = $res->fetch_assoc();

    foreach  ($rows as $row) {

        $oneDate = [];

        array_push($oneDate, $row['nom']);

        array_push($nextDates, $oneDate);
    }

    $db = null;
    $jsonData = json_encode($nextDates); 
    echo ($jsonData);
}

?>