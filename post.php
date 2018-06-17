<?php
$data_string = file_get_contents('data.json');

$host = $_SERVER["HTTP_HOST"];

if ($host == "localhost:8080") {
    $url = "http://localhost:8080/webhook.php";
}
else {
    $url = "http://home.nettnaut.no/webhook.php";
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
echo curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_error($ch)) {
    $error_msg = curl_error($ch);
}
curl_close($ch);

if (isset($error_msg)) {
    echo $error_msg;
}
?>
