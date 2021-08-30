<?php
if(1) {
http_response_code(500);
}
else {
http_response_code(404);
}


// http_response_code(200);
// header('Content-Type: application/json');
// echo json_encode(['status' => 'ok', 'message' => 'success']);

// http_response_code(201);
// header('Content-Type: application/json');
// echo json_encode('5a3e692004a59ef1e888e659390ff895');

// header("HTTP/1.1 301 Moved Permanently");
// header("Location: https://test-page-error.herokuapp.com/");
