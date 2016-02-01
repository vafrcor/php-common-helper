<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Tool\Miscellaneous')){
	die('Class "Vafrcor\PhpCommonHelper\Tool\Miscellaneous" not found!');
}

if(!function_exists('dv')){ 
	function dv(&$k){ 
		\Vafrcor\PhpCommonHelper\Tool\Miscellaneous::dv($k);
	}
}

if(!function_exists('dvs')){
    function dvs(){
    	// $args= func_get_args();
        \Vafrcor\PhpCommonHelper\Tool\Miscellaneous::dvs();
    }
}