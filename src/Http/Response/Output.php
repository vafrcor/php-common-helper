<?php 
namespace Vafrcor\PhpCommonHelper\Http\Response;

class Output
{
	/**
	 * Write response and exit
	 * 
	 */
    public static function sendTextPlain($body=null, $exit=true, $http_code=200)
    {
        http_response_code($http_code);
        header("Content-Type: text/plain; charset=utf-8");

        if(!empty($body)){ echo $body; }
        if($exit){ exit(); }
    }

	/**
	 * Write response and exit
	 * 
	 */
    public static function sendJson($body=null, $exit=true, $http_code=200)
    {
        http_response_code($http_code);
        header("Content-Type: application/json; charset=utf-8");

        if(!empty($body)){ echo $body; }
        if($exit){ exit(); }
    }

}
