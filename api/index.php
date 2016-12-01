<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');


/**
 * Return a list of profs for the requested course encoded as JSON
 */
$app->get('/prof/:code', function ($code) {
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'uoitconnect';
    $users = array();

    // Connect to mysql
    $mysqli = new mysqli("localhost", $db_user, $db_pass, $db_name);

    // check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    /* Get the list of users in an array */
    if ($stmt = $mysqli->prepare("SELECT professor FROM course_data WHERE ccode LIKE '%".$code."%' AND ctype = 'Lecture'"))
    {
        /* execute query */
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($username);

        // add each user
        while ($stmt->fetch())
        {
            array_push($users, $username);
        }

        /* close statement */
        $stmt->close();
    }  

    // Encode the array of users as JSON
    echo json_encode($users);
});

//List of Students encoded as JSON

$app->get('/students', function () {
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'uoitconnect';
    $users = array();

    // Connect to mysql
    $mysqli = new mysqli("localhost", $db_user, $db_pass, $db_name);

    // check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    /* Get the list of users in an array */
    if ($stmt = $mysqli->prepare("SELECT stud_name FROM students"))
    {
        /* execute query */
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($username);

        // add each user
        while ($stmt->fetch())
        {
            array_push($users, $username);
        }

        /* close statement */
        $stmt->close();
    }  

    // Encode the array of users as JSON
    echo json_encode($users);
});

// Launch the API service
$app->run();
