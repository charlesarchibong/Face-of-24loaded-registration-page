<?php

/*
 * Copyright (c) 2018, Xyneex Technologies. All rights reserved.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 *
 * You are not meant to edit or modify this source code unless you are
 * authorized to do so.
 *
 * Please contact Xyneex Technologies, #1 Orok Orok Street, Calabar, Nigeria.
 * or visit www.xyneex.com if you need additional information or have any
 * questions.
 */

function db_connect() {
    // Create a database connection
    //$mysqli = new mysqli("localhost", "root", "lookout4detox", "trufinis");
    //Remote hose connection
    //$mysqli = new mysqli("localhost", "royalsee_trufini", "@trufinis_90AAP~x", "royalsee_trufinis");
    //Local Host  Connection 
//  $mysqli = new mysqli("localhost", "royalsee_trufini", "@trufinis_90AAP~x", "royalsee_trufinis"); 
//    if ($mysqli->connect_errno) {
       $mysqli = new mysqli("localhost", "loadedco3_faceof24loaded", "faceof24loaded", "loadedco3_faceof24loaded");
       return $mysqli;
//    } else {
//        return $mysqli;
//    }

}