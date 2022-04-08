<?php
require_once('connect.php');

function getAll($table) {
    global $connection;
    $getAll = "SELECT * FROM $table";
    $getAll = mysqli_query($connection, $getAll);
    $getAllData = mysqli_fetch_all($getAll, MYSQLI_ASSOC);
    return $getAllData;

}
?>