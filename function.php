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
elseif(!empty($_GET['type']) && $_GET['type'] == 'add'){
    $sql = "INSERT INTO `calendar_event_master`(`event_name`, `event_start_date`, `event_end_date`) 
    VALUES ('" . $_POST['event_name'] . "' , '" . $_POST['event_start_date'] . "' ,'" . $_POST['event_end_date'] . "')";

    if ($conn->query($sql) === TRUE) {
        $json['status'] = true;
        $json['message'] = "Event added successfully";
    } else {
        $json['status'] = false;
        $json['message'] = "Error";
    }
    echo json_encode($json);
}

?>