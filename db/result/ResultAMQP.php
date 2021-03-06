<?php

namespace SYSTEM\DB;

class ResultAMQP extends \SYSTEM\DB\Result{ // < maybe not ? check if amqpchannel is compatible with dbresult.

    private $res = NULL;
    private $current = NULL;    

    //Result from mysql_query
    public function __construct($res){
        $this->res = $res;}

    public function __destruct(){
        $this->close();}

    public function close(){
        pg_free_result($this->res);}

    public function count(){
        return pg_num_rows($this->res);}

    public function affectedRows(){
        throw new \SYSTEM\LOG\ERROR("Not Supported!");}

    public function next($object = false, $result_type = MYSQL_BOTH){        
        if($object){
            $this->current = pg_fetch_object($this->res);
        } else {
            $this->current = pg_fetch_assoc($this->res);
        }
        return $this->current;
    }

    public function seek($row_number){
        return pg_data_seek($this->res,$row_number);}
}