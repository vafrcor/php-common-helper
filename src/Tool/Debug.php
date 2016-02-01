<?php 
namespace Vafrcor\PhpCommonHelper\Tool;

class Debug
{
	public static function vDumpExit($expression=NULL)
	{
        var_dump($expression);
        exit();
    }

    public static function vDumpPreExit($expression=NULL, $attr=array())
	{	
        $attr_str='';
        if(count($attr) > 0){
            foreach($attr as $at_key => $at_val){
                $attr_str.=' '.$at_key.'="'.$at_val.'"';
            }
        }

		echo '<pre '.$attr_str.'>';
        var_dump($expression);
        echo '</pre>';
        exit();
    }

	public static function preArray($data=array(),$attr=array(),$ret_string=FALSE)
	{
        $return='';
        $attr_str='';
        if(count($attr) > 0){
            foreach($attr as $at_key => $at_val){
                $attr_str.=' '.$at_key.'="'.$at_val.'"';
            }
        }

        if($ret_string === FALSE){
            echo '<pre '.$attr_str.'>';
            print_r($data);
            echo '</pre>';
        }
        else{
            $return.='<pre '.$attr_str.'>';
            $return.=var_export($data,TRUE);
            $return.= '</pre>';
            return $return;
        }
    }

	public static function preArrayExit($data=array(),$attr=array())
	{
        self::preArray($data,$attr,FALSE);
        exit();
    }

	public static function textareaArray($data=array(),$attr=array(),$ret_string=FALSE)
	{
        $return='';
        $attr_str='';
        if((is_array($attr)) && (count($attr) > 0)){
            foreach($attr as $at_key => $at_val){
                $attr_str.=' '.$at_key.'="'.$at_val.'"';
            }
        }

        if($ret_string === FALSE){
            echo '<textarea '.$attr_str.'>';
            print_r($data);
            echo '</textarea>';
        }
        else{
            $return.='<textarea '.$attr_str.'>';
            $return.=var_export($data,TRUE);
            $return.= '</textarea>';
            return $return;
        }
    }

	public static function textareaArrayExit($data=array(),$attr=array())
	{
        self::textareaArray($data,$attr,FALSE);
        exit();
    }

}	