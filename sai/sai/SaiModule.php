<?php

namespace SYSTEM\SAI;

abstract class SaiModule {    
    public static function html_content(){
        throw new RuntimeException("Unimplemented!");}
    public static function html_li_menu(){
        throw new RuntimeException("Unimplemented!");}
    //true or false -> if true no call to right_right()
    public static function right_public(){
        throw new RuntimeException("Unimplemented!");}
    //check your rights here -> returns true or false
    public static function right_right(){
        throw new RuntimeException("Unimplemented!");}
    //array with paths as json    
    public static function src_js(){
        throw new RuntimeException("Unimplemented!");}    
    //array with paths as json
    public static function src_css(){
        throw new RuntimeException("Unimplemented!");}
    
}