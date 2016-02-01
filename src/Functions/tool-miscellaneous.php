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
    function dvs(&$v0=null, &$v1=null, &$v2=null, &$v3=null, &$v4=null, &$v5=null, &$v6=null, &$v7=null, &$v8=null, &$v9=null){
        	
        // $args= func_get_args();
        // call_user_func_array(['\Vafrcor\PhpCommonHelper\Tool\Miscellaneous', 'dvs'], $args);

        try{
            $argc = func_num_args();
            $catch=[];
            for($i = 0; $i < $argc; $i++){ 
            	$name = 'v'.$i; 
            	$$name=NULL; unset($$name); 
        	}

            $argc=NULL; unset($argc);
        }
        catch(Exception $e){ 
        	/* keep silence! (e.g.: to many parameter ) */ 
    	}
    }
}