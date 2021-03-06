<?php

namespace SYSTEM\API;

class api_login {
    /*
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (0, 0, -1, NULL, 'call', NULL);
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (60, 0, 0, 'account', 'action', NULL);

    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (61,1,60,'login','username','USERNAME');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (62,1,60,'login','password_sha','PASSHASH');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (63,1,60,'login','password_md5','PASSHASH');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (64,1,60,'check','rightid','UINT');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (65,1,60,'create','username','USERNAME');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (66,1,60,'create','password_sha','PASSHASH');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (67,1,60,'create','email','EMAIL');
    INSERT INTO `system_api_calls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (68,1,60,'create','locale','LANG');
     */

    public static function call_account_action_login($username, $password_sha, $password_md5){
        return \SYSTEM\SECURITY\Security::login($username, $password_sha, $password_md5);}
    public static function call_account_action_logout(){
        return \SYSTEM\SECURITY\Security::logout();}
    public static function call_account_action_isloggedin(){
        return \SYSTEM\SECURITY\Security::isLoggedIn();}
    public static function call_account_action_check($rightid){
        return \SYSTEM\SECURITY\Security::check($rightid);}
    public static function call_account_action_create($username, $password_sha, $email, $locale){
        return \SYSTEM\SECURITY\Security::create($username, $password_sha, $email, $locale);}
}