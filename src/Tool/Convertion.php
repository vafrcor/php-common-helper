<?php 
namespace Vafrcor\PhpCommonHelper\Tool;

class Convertion
{
    public static function object2Array($data) {
        if(!is_object($data) && !is_array($data)) return $data;
        if(is_object($data)) $data = get_object_vars($data);
        // return array_map('object2array', $data);
        return array_map(self::object2Array, $data);
    }

    // How To Convert Array To Object
    public static function array2Object($data) {
        if(!is_array($data)) return $data;
        $object = new stdClass();
        if (is_array($data) && count($data) > 0) {
            foreach ($data as $name => $value) {
                if(is_numeric($name)){
                    // For number key data type
                    $name = intval($name);
                    $object->$name = self::array2Object($value);
                }
                else if(!empty($name)){
                    // For string key data type
                    $name = strtolower(trim($name));
                    $object->$name = self::array2Object($value);
                }
                else{  }
            }
        }
        return $object;
    }
}	