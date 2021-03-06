<?php
namespace SYSTEM\DB;

class DBInfoAMQP extends \SYSTEM\DB\DBInfo {

    public function __construct($vhost , $user , $password, $host, $port = null){
        $this->m_database = $vhost;
        $this->m_user = $user;
        $this->m_password = $password;
        $this->m_host = $host;
        $this->m_port = $port;

        if( $this->m_database == null ||
            $this->m_user == null ||
            $this->m_password == null ||
            $this->m_host == null){
            throw new \Exception("AMQP Connection Info not correct, vhost, user, password or host are null");}
    }    
}