<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Tool\Debug')){
	die('Class "Vafrcor\PhpCommonHelper\Tool\Debug" not found!');
}

if(!function_exists('vdump_exit')){
	function vdump_exit($expression=null){
		return \Vafrcor\PhpCommonHelper\Tool\Debug::vDumpExit($expression);
	}
}

if(!function_exists('vdump_pre_exit')){
	function vdump_pre_exit($expression=null){
		return \Vafrcor\PhpCommonHelper\Tool\Debug::vDumpPreExit($expression);
	}
}

if(!function_exists('pre_array')){
    function pre_array($data=array(), $attr=array(), $ret_string=FALSE){
        return \Vafrcor\PhpCommonHelper\Tool\Debug::preArray($data, $attr, $ret_string);
    }
}

if(!function_exists('pre_array_exit')){
    function pre_array_exit($data=array(), $attr=array()){
        return \Vafrcor\PhpCommonHelper\Tool\Debug::preArrayExit($data, $attr);
    }
}

if(!function_exists('textarea_array')){
    function textarea_array($data=array(), $attr=array(), $ret_string=FALSE){
      	return \Vafrcor\PhpCommonHelper\Tool\Debug::textareaArray($data, $attr, $ret_string);
    }
}

if(!function_exists('textarea_array_exit')){
    function textarea_array_exit($data=array(), $attr=array()){
      	return \Vafrcor\PhpCommonHelper\Tool\Debug::textareaArrayExit($data, $attr);
    }
}
