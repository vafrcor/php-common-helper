<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Tool\Convertion')){
	die('Class "Vafrcor\PhpCommonHelper\Tool\Convertion" not found!');
}

if(!function_exists('object2array')){
    function object2array($data=null) {
        return \Vafrcor\PhpCommonHelper\Tool\Convertion::object2Array($data);
    }
}

if(!function_exists('array2object')){
    // How To Convert Array To Object
    function array2object($data=null){
       return \Vafrcor\PhpCommonHelper\Tool\Convertion::array2Object($data);
    }
}
