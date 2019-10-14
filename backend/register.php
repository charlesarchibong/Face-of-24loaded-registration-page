

<?php

include './dbConfig.php';
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $facebook_id = htmlspecialchars($_POST['fbhandle']); 
    $age = htmlspecialchars($_POST['age']);
    
    $sql = "INSERT INTO contestants (fullname, email, phone, location, facebook_id, age) VALUES(?, ?, ?, ?, ?, ?)";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssssss', $name, $email, $phone, $location, $facebook_id, $age);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
} elseif (isset($_POST['delete'])) {
    $email = htmlspecialchars($_POST['email']);
    $sql = "DELETE FROM contestants WHERE email = ?";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $email);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
} elseif (isset($_POST['approve'])) {
    $email = htmlspecialchars($_POST['email']);
    $sql = "UPDATE contestants SET status = ?  WHERE email = ?";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $status = "approved";
    $stmt->bind_param('ss', $status, $email);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo json_encode(array("success" => true)); 
    } else {
        $mysqli->close();
        echo json_encode(array("success" => false));
    }
}


