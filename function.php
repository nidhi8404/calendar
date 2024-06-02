<?php
include("config.php");

if(!empty($_GET['type']) && $_GET['type'] == 'list'){
    $sql = "SELECT * FROM calendar_event_master";
    $result = $conn->query($sql);
    $arr = array();
    while($row = $result->fetch_assoc()){
        $arr[] = $row;
    }
    echo json_encode($arr);
} 

?>