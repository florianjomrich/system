<?php
namespace SYSTEM\DBD;

class SYS_CACHE_CHECK extends \SYSTEM\DB\QP {
    protected static function query(){
        return new \SYSTEM\DB\QQuery(get_class(),
//pg            
'SELECT "data" FROM system.cache'.
' WHERE "CacheID" = $1 AND'.
' "Ident" = $2;'
//mys
);}}