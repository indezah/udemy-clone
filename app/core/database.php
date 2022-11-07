<?php

class Database
{
    private function connect()
    {
        $str = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($str, DBUSER, DBPASS);
        return $con;
    }

    public function query($query,$data)
    {
        $con = $this->connect();
    }
}
