<?php

/**
 * @return mixed a list of all projects including their names, descriptions and thumbnails
 */

function getAllProjects($pdo) {
    $sql = "SELECT id, name, image, description FROM projects ORDER BY id";
    $rqt = $pdo->prepare($sql);
    $rqt->execute();
    $result = $rqt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

/**
 * Return all elements of a project selected by it's ID
 * @param $id int ID of the project
 * @param $pdo PDO element of connection to the DB
 * @return mixed array of element regarding a specific project
 */

function getProjectById($id, $pdo) {
    $sql = "SELECT * FROM projects WHERE id = :id";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$id]);
    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

/**
 * Return weather or not a user is assigned to a certain project
 * @param $id int ID of the User
 * @param $idProject int Id of the project
 * @param $pdo PDO element of connection to the DB
 * @return bool True only if the user is assigned on the selected project
 */

function userIsInProject($id, $idProject, $pdo) {
    $sql = "SELECT idUser  FROM team 
            JOIN teams ON team.idTeam = teams.idTeam 
            JOIN projects ON teams.id = projects.idteam
            WHERE projects.id = :idProject";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$idProject]);
    $result = $rqt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $res) {
        if (in_array($id,$res)) {
            return true;
        }
    }
    return false;
}