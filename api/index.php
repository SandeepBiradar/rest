<?php
header("Content-Type:application/json");
include("functions.php");
//process client request
if (!empty($_GET['name'])) {
    #        //throw invalid request code...
    $name  = $_GET['name'];
    $price = get_price($name);
    
    if (empty($price)) {
        # book not found
        deliver_response(200, "Book not found", NULL);
    } else {
        deliver_response(200, "Book found", $price);
        //respond book found
    }
} else {
    deliver_response(400, "Invalid Request", NULL);
    //throw invalid request
}

function deliver_response($status, $status_message, $data)
{
    header("HTTP/1.1 $status $status_message");
    $response['status']         = $status;
    $response['status_message'] = $status_message;
    $response['data']           = $data;
    
    $json_response = json_encode($response);
    echo $json_response;
}

?>