<?php
include "../config/connection.php";


function query($sql, $params = [])
{
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    if (preg_match('/SELECT/i', $sql)) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $stmt;
}
function countQuery($sql, $params = [])
{
    global $pdo;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return (int) $stmt->fetchColumn();
}
