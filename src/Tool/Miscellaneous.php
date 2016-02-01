<?php 
namespace Vafrcor\PhpCommonHelper\Tool;

class Miscellaneous
{	
	/**
	 * Destroy Variable
	 * 
	 */
	public static function dv(&$k)
	{ 
		$k=NULL; unset($k); 
	}

	/**
	 * Destroy Variables
	 * 
	 */
    public static function dvs(){
        try{
            $argc = func_num_args();
            for($i = 0; $i < $argc; $i++){ $name = 'v'.$i; $$name=NULL; unset($$name); }
            $argc=NULL; unset($argc);
        }
        catch(Exception $e){ /* keep silence! (e.g.: to many parameter ) */ }
    }

}