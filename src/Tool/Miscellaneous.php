<?php 
namespace Vafrcor\PhpCommonHelper\Tool;

class Miscellaneous
{	
	/**
	 * Destroy Variable
	 * 
	 */
	public static function dv(&$k=null)
	{ 
		$k=NULL; unset($k); 
	}

	/**
	 * Destroy Variables
	 * 
	 */
    public static function dvs(&$v0=null, &$v1=null, &$v2=null, &$v3=null, &$v4=null, &$v5=null, &$v6=null, &$v7=null, &$v8=null, &$v9=null){
    	// $args= func_get_args();
    	// vdump_pre_exit($args);
        try{
            $argc = func_num_args();
            // vdump_exit($argc);
            // $catch=[];
            for($i = 0; $i < $argc; $i++){ 
            	$name = 'v'.$i; 
            	// $catch[]=$$name;
            	$$name=NULL; 
            	unset($$name); 
            }
            // vdump_pre_exit($catch);
            $argc=NULL; unset($argc);
        }
        catch(Exception $e){ 
        	/* keep silence! (e.g.: to many parameter ) */ 
    	}
    }

}