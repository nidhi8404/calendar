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
elseif(!empty($_GET['type']) && $_GET['type'] == 'delete'){
    if (isset($_POST['event_id'])) {
        $sql = "DELETE FROM `calendar_event_master` WHERE `event_id` = '" . $_POST['event_id'] . "'";
        if ($conn->query($sql) === TRUE) {
            $json['status'] = true;
            $json['message'] = "Event deleted successfully";
        } else {
            $json['status'] = false;
            $json['message'] = "Error";
        }
    } else {
        $json['status'] = false;
        $json['message'] = "Event ID not provided";
    }
    echo json_encode($json);
}
elseif(!empty($_GET['type']) && $_GET['type'] == 'update'){
    if (isset($_POST['event_id'])) {
        $sql = "UPDATE `calendar_event_master` SET 
                `event_name` = '" . $_POST['event_name'] . "', 
                `event_start_date` = '" . $_POST['event_start_date'] . "', 
                `event_end_date` = '" . $_POST['event_end_date'] . "' 
                WHERE `event_id` = '" . $_POST['event_id'] . "'";

        if ($conn->query($sql) === TRUE) {
            $json['status'] = true;
            $json['message'] = "Event updated successfully";
        } else {
            $json['status'] = false;
            $json['message'] = "Error: " . $conn->error;
        }
    } else {
        $json['status'] = false;
        $json['message'] = "Event ID not provided";
    }
    echo json_encode($json);
}

?>