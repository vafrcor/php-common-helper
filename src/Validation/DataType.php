<?php 
namespace Vafrcor\PhpCommonHelper\Validation;

class DataType
{
    /**
     * Check arg are valid while passed through "isset()" and "!empty()"
     * 
     */
    public static function ine(&$c=NULL)
    {
        return (((isset($c)) && (!empty($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "!empty()"
     *
     */
    public static function isne(&$c=NULL)
    {
        return (((isset($c)) && (is_string($c)) && (!empty($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "!empty()"
     *
     */
    public static function iobj(&$c=NULL)
    {
        return (((isset($c)) && (is_object($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "is_array()"
     * 
     */
    public static function iar(&$c=NULL)
    {
        return (((isset($c)) && (is_array($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "is_bool()"
     *
     */
    public static function ibool(&$c=NULL)
    {
        return (((isset($c)) && (is_bool($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "is_array()" and "count()" for not empty array
     * 
     */
    public static function iarne(&$c=NULL)
    {
        return (((isset($c)) && (is_array($c)) && (count($c) > 0))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "is_numeric()"
     *
     */
    public static function in(&$c=NULL)
    {
        return (((isset($c)) && (is_numeric($c)))? TRUE : FALSE);
    }

    /**
     * Check arg are valid while passed through "isset()" and "is_numeric()"
     *
     */
    public static function inne(&$c=NULL)
    {
        return (((isset($c)) && (is_numeric($c)) && (!empty($c)))? TRUE : FALSE);
    }

}