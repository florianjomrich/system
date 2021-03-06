<?php
namespace SYSTEM\SAI;

class saistart_sys_sai extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SYSTEM_SAI_saistart_sys_sai(){
        return \SYSTEM\PAGE\replace::replaceFile(   \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/saistart.tpl'),
                                                    array('content' => self::html_content(), 'login' => self::html_login()));}
    public static function html_li_menu(){return '<li class="active"><a href="#" saimenu=".SYSTEM.SAI.saistart_sys_sai">'.\SYSTEM\CONFIG\config::get(\SYSTEM\CONFIG\config_ids::SYS_SAI_CONFIG_TITLE).'</a></li>';}
    public static function right_public(){return true;}    
    public static function right_right(){return true;}
    
    public static function sai_mod__SYSTEM_SAI_saistart_sys_sai_flag_css(){}
    public static function sai_mod__SYSTEM_SAI_saistart_sys_sai_flag_js(){
        return \SYSTEM\LOG\JsonResult::toString(
            array(  \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'js/jqBootstrapValidation.js'),
                    \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/saistart_sys_sai.js'),
                    \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'js/crypto/jquery.md5.js'),
                    \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'js/crypto/jquery.sha1.js')
                 ));}    
    
    protected static function html_content(){
        return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/content.tpl'), array());}
    
    protected static function html_login(){        
        return \SYSTEM\SECURITY\Security::isLoggedIn() ? \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/logout.tpl'), array()) : \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saistart_sys_sai/login.tpl'), array());}
}