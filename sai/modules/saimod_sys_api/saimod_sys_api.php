<?php
namespace SYSTEM\SAI;

class saimod_sys_api extends \SYSTEM\SAI\SaiModule {    
    public static function sai_mod__SYSTEM_SAI_saimod_sys_api(){
        //$last_group = -1;
        $vars = array();
        
        $con = new \SYSTEM\DB\Connection(\SYSTEM\system::getSystemDBInfo());
        if(\SYSTEM\system::isSystemDbInfoPG()){
            $res = $con->query('SELECT "group", count(*) as "count" FROM system.api GROUP BY "group" ORDER BY "group" ASC;');
        } else {
            $res = $con->query('SELECT `group`, count(*) as `count` FROM system_api GROUP BY `group` ORDER BY `group` ASC;');
        }
        
        $vars['tabopts'] = '';
        $first = true;
        while($r = $res->next()){
            $vars2 = array( 'active' => ($first ? 'active' : ''),
                            'tab_id' => $r['group']);
            $first = false;
            $vars['tabopts'] .= \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \SYSTEM\PSAI(),'modules/saimod_sys_api/tabopt.tpl'), $vars2);
        }      
        
        if(\SYSTEM\system::isSystemDbInfoPG()){
            $res = $con->query('SELECT * FROM system.api ORDER BY "group", "ID" ASC;');
        } else {
            $res = $con->query('SELECT * FROM system_api ORDER BY `group`, `ID` ASC;');
        }
        
        while($r = $res->next()){            
            $tabs[$r['group']]['tab_id'] = $r['group'];            
            $tabs[$r['group']]['content'] = isset($tabs[$r['group']]['content']) ? $tabs[$r['group']]['content'] : '';
            $r['tr_class'] = self::tablerow_class($r['type']);
            $r['type'] = self::type_names($r['type']);
            $tabs[$r['group']]['content'] .= \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \SYSTEM\PSAI(),'modules/saimod_sys_api/list_entry.tpl'), $r);                        
        }   
        
        $vars['tabs'] = '';
        $first = true;                   
        foreach($tabs as $tab){
            $tab['active'] = ($first ? 'active' : '');
            $first = false;
            $vars['tabs'] .= \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \SYSTEM\PSAI(),'modules/saimod_sys_api/tab.tpl'), $tab);}
               
        return \SYSTEM\PAGE\replace::replaceFile(\SYSTEM\SERVERPATH(new \SYSTEM\PSAI(),'modules/saimod_sys_api/tabs.tpl'), $vars);
       
/*        $result = "";
        $result .= '<tr class="'.self::tablerow_class($r['type']).'">'.'<td>'.$r['ID'].'</td>'.'<td>'.$r['group'].'</td>'.'<td>'.$r['type'].'</td>'.'<td>'.$r['parentID'].'</td>'.'<td>'.$r['parentValue'].'</td>'.'<td>'.$r['name'].'</td>'.'<td>'.$r['verify'].'</td>'.'</tr>';                                          
        return $result;*/
    }
    
    private static function type_names($type){
        switch($type){
            case 0: return 'COMMAND';
            case 1: return 'COMMAND_FLAG';
            case 2: return 'PARAMETER';
            case 3: return 'PARAMETER_OPT';
            case 4: return 'STATIC';
            default: return 'Problem unknown type';
        }   
    }
    
    private static function tablerow_class($flag){
        switch($flag){
            case 0: return 'info';
            case 1: return '';
            case 4: return 'warning';
            default: return 'success';
        }        
    }
    
    public static function html_li_menu(){return '<li><a href="#" saimenu=".SYSTEM.SAI.saimod_sys_api">API</a></li>';}
    public static function right_public(){return false;}    
    public static function right_right(){return \SYSTEM\SECURITY\Security::check(\SYSTEM\SECURITY\RIGHTS::SYS_SAI);}
    
    public static function sai_mod__SYSTEM_SAI_saimod_sys_api_flag_css(){}
    public static function sai_mod__SYSTEM_SAI_saimod_sys_api_flag_js(){
        return \SYSTEM\LOG\JsonResult::toString(
            array(  \SYSTEM\WEBPATH(new \SYSTEM\PSAI(),'modules/saimod_sys_api/saimod_sys_api.js')));}    
}