<?php

class PageApi extends \SYSTEM\PAGE\PageClass {

    public static function default_page(){
        return new default_page();
    }

    //?module=X&action=Y
    //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (0, 0, -1, NULL, 'module', 'ALL');
    //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (1, 0, 0, NULL, 'action', 'ALL');
        //?module=X&action=sensor&sensorIDs=Z
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (2, 1, 1, 'sensor', 'sensorIDs', 'ALL');

        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (3, 1, 1, 'login', 'old_module', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (4, 1, 1, 'login', 'old_action', 'ALL');

        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (7, 1, 1, 'geopoint', 'coord', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (8, 1, 1, 'geopoint', 'datatype', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (9, 1, 1, 'geopoint', 'radius', 'ALL');

    //?action=X[&sensorIDS=Y]
    //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (5, 0, -1, NULL, 'action', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (6, 1, 5, 'sensor', 'sensorIDs', 'ALL');

        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (10, 1, 5, 'geopoint', 'coord', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (11, 1, 5, 'geopoint', 'datatype', 'ALL');
        //INSERT INTO `PAGECalls` (`ID`, `Flag`, `ParentID`, `ParentValue`, `Name`, `AllowedValues`) VALUES (12, 1, 5, 'geopoint', 'radius', 'ALL');

    
    
    public static function action_contact(){
        return new default_contact();}
    public static function module_default_action_contact(){
        return new default_contact();}
    
    public static function action_developer(){
        return new default_developer();}
    public static function module_default_action_developer(){
        return new default_developer();}
        
        
    public static function action_welcome(){
        return new default_welcome();}
    public static function module_default_action_welcome(){
        return new default_welcome();}
    

    public static function action_project(){
        return new default_project();}
    public static function module_default_action_project(){
        return new default_project();}

    public static function action_apiQuery(){
        return new api_query();}    
    public static function module_default_apiQuery(){
        return new api_query();}
    
    public static function action_press(){
        return new default_press();}
    public static function module_default_action_press(){
        return new default_press();}
        
    public static function action_impressum(){
        return new default_impressum();}
    public static function module_default_action_impressum(){
        return new default_impressum();}

    public static function action_devs(){
        return new default_devs();}
    public static function module_default_action_devs(){
        return new default_devs();}

    public static function action_sensor($sensorIDs){
        return new default_sensor($sensorIDs);}
    public static function module_default_action_sensor($sensorIDs){
        return new default_sensor($sensorIDs);}

    public static function action_geopoint($coord,$datatype,$radius){
        return new default_geopoint($coord,$datatype,$radius);}
    public static function module_default_action_geopoint($coord,$datatype,$radius){
        return new default_geopoint($coord,$datatype,$radius);}

        
    public static function module_user_action_area(){
        return new user_area();
    }
    
    public static function module_user_action_statistic(){
        return new user_statistic();
    }
    
    public static function module_default_action_highscore(){
        return new default_highscore();
    }
        
    public static function module_user_action_user(){
        if(SYSTEM\SECURITY\Security::isLoggedIn()){
            return new user_user();}
        else {
            return new user_login('user','user');}
    }
    
    public static function module_user_action_login($old_module,$old_action){
        return new user_login($old_module,$old_action);}
    
    public static function module_user_action_logout(){
        return new user_logout();}    

}