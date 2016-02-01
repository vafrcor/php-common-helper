<?php

if(!class_exists('\Vafrcor\PhpCommonHelper\Http\Request\Input')){
	die('Class "Vafrcor\PhpCommonHelper\Http\Request\Input" not found!');
}

//# Get input from Array variables
if(!function_exists('giffa')){
    function giffa($in=array(), $fn=NULL, $ft='', $fd=NULL, $opt=array()){
        return \Vafrcor\PhpCommonHelper\Http\Request\Input::giffa($in, $fn, $ft, $fd, $opt);
    }
}

//# Get input from User Input
if(!function_exists('guin')){
    function guin($t=NULL,$fn=NULL,$ft='',$fd=NULL,$opt=array()){
       return \Vafrcor\PhpCommonHelper\Http\Request\Input::guin($in, $fn, $ft, $fd, $opt);
    }
}
