<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Validation\DataType')){
	die('Class "Vafrcor\PhpCommonHelper\Validation\DataType" not found!');
}

if(!function_exists('vl_ine')){
    //# Check arg are valid while passed through "isset()" and "!empty()"
    function vl_ine(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::ine($c);
    }
}

if(!function_exists('vl_isne')){
    //# Check arg are valid while passed through "isset()" and "!empty()"
    function vl_isne(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::isne($c);
    }
}

if(!function_exists('vl_iobj')){
    //# Check arg are valid while passed through "isset()" and "!empty()"
    function vl_iobj(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::iobj($c);
    }
}

if(!function_exists('vl_iar')){
    //# Check arg are valid while passed through "isset()" and "is_array()"
    function vl_iar(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::iar($c);
    }
}

if(!function_exists('vl_ibool')){
    //# Check arg are valid while passed through "isset()" and "is_bool()"
    function vl_ibool(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::ibool($c);
    }
}

if(!function_exists('vl_iarne')){
    //# Check arg are valid while passed through "isset()" and "is_array()" and "count()" for not empty array
    function vl_iarne(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::iarne($c);
    }
}

if(!function_exists('vl_in')){
    //# Check arg are valid while passed through "isset()" and "is_numeric()"
    function vl_in(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::in($c);
    }
}

if(!function_exists('vl_inne')){
    //# Check arg are valid while passed through "isset()" and "is_numeric()"
    function vl_inne(&$c=NULL){
        return \Vafrcor\PhpCommonHelper\Validation\DataType::inne($c);
    }
}
