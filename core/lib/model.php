<?php
namespace core\lib;

class model extends \PDO{
    public function __construct($host, $dbname, $_username, $_pass){
        $dsn = 'mysql:host='.$host.';dbname='.$dbname;
        $username = $_username;
        $pass = $_pass;
        try{
            parent::__construct($dsn, $username, $pass);
        }catch(\PDOException $e){
            var_dp($e->getMessage());
        }
    }
}