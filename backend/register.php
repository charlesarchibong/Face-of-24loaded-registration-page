

<?php

include './dbConfig.php';
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);
    $facebook_id = htmlspecialchars($_POST['fbhandle']);
    $age = htmlspecialchars($_POST['age']);
    
    $sql = "INSERT INTO contestants (name, email, phone, location, facebook_id, age) VALUES(?, ?, ?, ?, ?, ?)";
    $mysqli = db_connect();
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssssss', $name, $email, $phone, $location, $facebook_id, $age);
    if ($stmt->execute()) { 
        $mysqli->close();
        echo "done";
    } else {
        $mysqli->close();
        echo 'undone';
    }
}

