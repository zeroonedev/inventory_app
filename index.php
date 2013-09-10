<?php

require 'connection.php';

$status = "";

if($conn) {
    $status = "Connected to DB";
} else {
    $status = "No db connection";
}


// View - controls what data is available in the view
Functions::view('index', array(
    'status' => $status
));