<?php

namespace SYSTEM\DB;

abstract class DBInfo {
    public $m_database = null;
    public $m_user = null;
    public $m_password = null;
    public $m_host = null;
    public $m_port = null;

    abstract public function __construct($database , $user , $password, $host, $port = null);
}