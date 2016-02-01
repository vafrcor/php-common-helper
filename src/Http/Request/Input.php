<?php 
namespace Vafrcor\PhpCommonHelper\Http\Request;

class Input
{
	/**
	 * Get input from Array variables
	 * 
	 */
    public static function giffa($in=array(),$fn=NULL,$ft='',$fd=NULL,$opt=array())
    {
        // Get Input Field value from input Array
        $r=NULL;
        $av_ft=array('null','int','float','str','bool','array','object');
        if((isset($in)) && (is_array($in)) && (!empty($fn)) && (!empty($ft)) && (in_array($ft, $av_ft))){
            $ex=array_key_exists($fn,$in);
            if($ex){ $r=$in[$fn]; /* if($ft !== 'array'){ if(is_array($r)){ $r=$r[0]; }} */ }
            else{ $r=$fd; }

            if($ft == 'null'){ $r=NULL; }
            else if($ft == 'int'){ $r=(($ex) && (is_numeric($r)))? intval($r) : $r; }
            else if($ft == 'float'){ $r=(($ex) && (is_numeric($r)))? floatval($r) : $r; }
            else if($ft == 'str'){ $r=($ex)? ((isset($r) && !is_array($r))? trim(strval($r)) : $r) : $r; }
            else if($ft == 'bool'){ $r=($ex)? (boolean) ($r) : $r;}
            else if($ft == 'array'){ if(!is_array($r)){ $r=$fd; }}
            else if($ft == 'object'){ $r=isset($r)? (object) $r : $r; } 
            else{ $r=NULL; }

            if(!empty($opt) && is_array($opt)){ /* do something for custom manipulation */
                if((array_key_exists('mfunc',$opt)) && (count($opt['mfunc']) > 0)){ foreach($opt['mfunc'] as $cf){ $r=$cf($r); }}
            }
        }
        dvs($av_ft,$fn,$ft,$fd,$opt); return $r;
    }

	/**
	 * Get input from User Input
	 * 
	 */
    public static function guin($t=NULL,$fn=NULL,$ft='',$fd=NULL,$opt=array())
    {
        global $_GET, $_POST, $_REQUEST, $_PUT;
        // Get Input Field value from input Array
        $r=NULL;
        $av_t=array('post','get','request','put');
        $av_ft=array('null','int','float','str','bool','array');
        if((!empty($t)) && (in_array($t, $av_t)) && (!empty($fn)) && (!empty($ft)) && (in_array($ft, $av_ft))){
            // $in= ($t == 'post')? $_POST : (($t == 'get')? $_GET : $_REQUEST);
            $in= ($t == 'post')? $_POST : (($t == 'get')? $_GET : (($t == 'put')? $_PUT : $_REQUEST));

            $ex=array_key_exists($fn,$in);
            if($ex){ $r=$in[$fn];}
            else{ $r=$fd; }

            if($ft == 'null'){ $r=NULL; }
            else if($ft == 'int'){ $r=(($ex) && (is_numeric($r)))? intval($r) : $r; }
            else if($ft == 'float'){ $r=(($ex) && (is_numeric($r)))? floatval($r) : $r; }
            else if($ft == 'str'){ $r=($ex)? ((isset($r) && !is_array($r))? trim(strval($r)) : $r) : $r; }
            else if($ft == 'bool'){ $r=($ex)? (boolean) ($r) : $r;}
            else if($ft == 'array'){ if(!is_array($r)){ $r=$fd; }}
            else{ $r=NULL; }

            if(!empty($opt) && is_array($opt)){
                if((array_key_exists('mfunc',$opt)) && (count($opt['mfunc']) > 0)){ foreach($opt['mfunc'] as $cf){ $r=$cf($r); }}
            }
            dv($in);
        }
        dvs($av_t,$av_ft,$fn,$ft,$fd,$opt); return $r;
    }

    /**
     * Get input from HTTP Request Body (JSON string only)
     * 
     */
    public static function getJsonStreamData($container=''){
        global $_GET, $_POST, $_PUT;
        if(!isset($_PUT)){
            $_PUT=array();
        }
        $stream= file_get_contents("php://input");

        if($container=='_POST'){
            $_POST= (!empty($stream))? json_decode($stream,true) : array();
        }else if($container=='_GET'){
            $_GET= (!empty($stream))? json_decode($stream,true) : array();
        }else if($container=='_PUT'){
            $_PUT= (!empty($stream))? json_decode($stream,true) : array();
        }else{ }
    }

}