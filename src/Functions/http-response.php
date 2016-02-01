<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Http\Response\Output')){
	die('Class "Vafrcor\PhpCommonHelper\Http\Response\Output" not found!');
}

if(!function_exists('http_response_text_plain')){
    // Write response and exit
    function http_response_text_plain($body=null, $exit=true, $http_code=200){
        \Vafrcor\PhpCommonHelper\Http\Response\Output::sendTextPlain($body, $exit, $http_code);
    }
}

if(!function_exists('http_response_json')){
    // Write response and exit
    function http_response_json($body=null, $exit=true, $http_code=200){
        \Vafrcor\PhpCommonHelper\Http\Response\Output::sendJson($body, $exit, $http_code);
    }
}
