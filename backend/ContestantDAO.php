<?php
include_once 'dbConfig.php';
/*
 * Copyright (c) 2019, Zealnetworks Technologies. All rights reserved.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 *
 * You are not meant to edit or modify this source code unless you are
 * authorized to do so.
 *
 * Please contact me at contact@zealtech.com.ng
 * or visit www.zealtech.com.ng if you need additional information or have any
 * questions.
 */

/**
 * Description of ContestantDAO
 *
 * @author Charles Archibong
 */
class ContestantDAO {
    private $name;
    private $email;
    private $phone;
    private $location;
    private $facebookId;
    private $age;
    private $status;
    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getLocation() {
        return $this->location;
    }

    function getFacebookId() {
        return $this->facebookId;
    }

    function getAge() {
        return $this->age;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setLocation($location) {
        $this->location = $location;
    }

    function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }

    function setAge($age) {
        $this->age = $age;
    }

    public static function getAllContestant(){
        $sql = "SELECT * FROM contestants";
        $mysqli = db_connect();
        $result = $mysqli->query($sql);
        $contestants = array();
        while ($row = $result->fetch_assoc()) {
            $contestant = new ContestantDAO();
            $contestant->setEmail($row['email']);
            $contestant->setAge($row['age']);
            $contestant->setFacebookId($row['facebook_id']);
            $contestant->setName($row['fullname']);
            $contestant->setLocation($row['location']);
            $contestant->setPhone($row['phone']);
            $contestant->setStatus($row['status']);
            array_push($contestants, $contestant);
        }
        $mysqli->close();
        return $contestants;
    }
    
    public static function getAllApproveContestant(){
        $sql = "SELECT * FROM contestants WHERE status = 'approved'";
        $mysqli = db_connect();
        $result = $mysqli->query($sql);
        $contestants = array();
        while ($row = $result->fetch_assoc()) {
            $contestant = new ContestantDAO();
            $contestant->setEmail($row['email']);
            $contestant->setAge($row['age']);
            $contestant->setFacebookId($row['facebook_id']);
            $contestant->setName($row['fullname']);
            $contestant->setLocation($row['location']);
            $contestant->setPhone($row['phone']);
            $contestant->setStatus($row['status']);
            array_push($contestants, $contestant);
        }
        $mysqli->close();
        return $contestants;
    }
}
