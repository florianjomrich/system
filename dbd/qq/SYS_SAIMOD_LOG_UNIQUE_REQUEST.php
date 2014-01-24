<?php
namespace SYSTEM\DBD;

class SYS_SAIMOD_LOG_UNIQUE_REQUEST extends \SYSTEM\DB\QP {
    protected static function query(){
        return new \SYSTEM\DB\QQuery(get_class(),
//pg            
'SELECT to_char(to_timestamp(extract(epoch from '.\SYSTEM\DBD\system_log::FIELD_TIME.')::int - (extract(epoch from '.\SYSTEM\DBD\system_log::FIELD_TIME.')::int % $1)), \'YYYY/MM/DD HH24:MI:SS\') as day,'
    .'count(*) as count,'                                        
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_SERVER_NAME.') as server_name_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_SERVER_PORT.') as server_port_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_REQUEST_URI.') as request_uri_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_POST.') as post_unique'                                        
.' FROM '.\SYSTEM\DBD\system_log::NAME_PG
.' GROUP BY day'
.' ORDER BY day DESC'
.' LIMIT 30;',
//mys
'SELECT DATE_FORMAT(FROM_UNIXTIME(UNIX_TIMESTAMP('.\SYSTEM\DBD\system_log::FIELD_TIME.') - MOD(UNIX_TIMESTAMP('.\SYSTEM\DBD\system_log::FIELD_TIME.'),?)),"%Y/%m/%d %H:%i:%s") as day,'
    .'count(*) as count,'                                        
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_SERVER_NAME.') as server_name_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_SERVER_PORT.') as server_port_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_REQUEST_URI.') as request_uri_unique,'
    .'count(distinct '.\SYSTEM\DBD\system_log::FIELD_POST.') as post_unique'                                        
.' FROM '.\SYSTEM\DBD\system_log::NAME_MYS
.' GROUP BY day'
.' ORDER BY day DESC'
.' LIMIT 30;'
);}}

