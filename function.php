<?php
include('config.php');

// Function to get events
if (!empty($_GET['type']) && $_GET['type'] == 'list') {
    session_start();
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM `calendar_event_master` WHERE `user_id` = '$user_id'";
    $result = $conn->query($sql);
    $events = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $events[] = $row;
        }
    }

    echo json_encode($events);
}

// Function to add event
elseif (!empty($_GET['type']) && $_GET['type'] == 'add') {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        $json['status'] = false;
        $json['message'] = "User not logged in.";
        echo json_encode($json);
        exit;
    }
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO `calendar_event_master`(`event_name`, `event_start_date`, `event_end_date`, `user_id`) 
            VALUES ('" . $_POST['event_name'] . "' , '" . $_POST['event_start_date'] . "' ,'" . $_POST['event_end_date'] . "' , '$user_id')";

    if ($conn->query($sql) === TRUE) {
        $json['status'] = true;
        $json['message'] = "Event added successfully";
    } else {
        $json['status'] = false;
        $json['message'] = "Error: " . $conn->error;
    }
    echo json_encode($json);
}

// Function to delete event
elseif (!empty($_GET['type']) && $_GET['type'] == 'delete') {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        $json['status'] = false;
        $json['message'] = "User not logged in.";
        echo json_encode($json);
        exit;
    }
    $user_id = $_SESSION['user_id'];

    if (isset($_POST['event_id'])) {
        $sql = "DELETE FROM `calendar_event_master` WHERE `event_id` = '" . $_POST['event_id'] . "' AND `user_id` = '$user_id'";
        if ($conn->query($sql) === TRUE) {
            $json['status'] = true;
            $json['message'] = "Event deleted successfully";
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

// Function to update event
elseif (!empty($_GET['type']) && $_GET['type'] == 'update') {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        $json['status'] = false;
        $json['message'] = "User not logged in.";
        echo json_encode($json);
        exit;
    }
    $user_id = $_SESSION['user_id'];

    if (isset($_POST['event_id'])) {
        $sql = "UPDATE `calendar_event_master` SET 
                `event_name` = '" . $_POST['event_name'] . "', 
                `event_start_date` = '" . $_POST['event_start_date'] . "', 
                `event_end_date` = '" . $_POST['event_end_date'] . "' 
                WHERE `event_id` = '" . $_POST['event_id'] . "' AND `user_id` = '$user_id'";

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
