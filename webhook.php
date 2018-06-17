<?php
require_once('Logging.php');
require_once('TransactionLogEvent.php');

$log = new Logging();
$log->lfile(getcwd() . "/log.txt");
$log->lwrite("Processing");


if($json = json_decode(file_get_contents("php://input"))) {
    $log->lwrite("Processing " . $json->Tag . " event.");
    
    $event = new TransactionLogEvent();
    $event->processEvent($json);
    
} else {
    $log->lwrite("Unexpected format, is not json");
}

http_response_code(200);
?>
