<?php

namespace SYSTEM\CONFIG;

class config {
    private static $config;
    
    public static function get($config_id){
        if( !isset(self::$config) ||
            !is_array(self::$config) ||
            !array_key_exists($config_id, self::$config)){
            return NULL;}
        return self::$config[$config_id];
    }
    
    public static function set($config_id, $value){
        if( !isset(self::$config) ||
            !is_array(self::$config)){
            self::$config = array();}
        
        self::$config[$config_id] = $value;
    }
    
    //array( array(ID, VALUE), array(ID, VALUE))
    public static function setArray($id_value_array){
        foreach($id_value_array as $v){
            self::set($v[0], $v[1]);}}
}
