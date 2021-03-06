<?php
namespace SYSTEM\DBD;

class SYS_SAIMOD_SECURITY_USER_LOG_COUNT extends \SYSTEM\DB\QP {
    protected static function query(){
        return new \SYSTEM\DB\QQuery(get_class(),
//pg            
'SELECT COUNT(*) as count FROM '.\SYSTEM\DBD\system_log::NAME_PG.
' WHERE "'.\SYSTEM\DBD\system_log::FIELD_USER.'"'.
' = $1;',
//mys
'SELECT COUNT(*) as count'.
' FROM '.\SYSTEM\DBD\system_log::NAME_MYS.
' WHERE '.\SYSTEM\DBD\system_log::FIELD_USER.
' = ?;'
);}}

