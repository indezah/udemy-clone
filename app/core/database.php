<?php

class Database
{
    private function connect()
    {
        $str = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($str, DBUSER, DBPASS);
        return $con;
    }

    public function query($query, $data = [], $type = 'object')
    {
        $con = $this->connect();

        $stm = $con->prepare($query);

        if ($stm) {

            $check = $stm->execute($data);
            if ($check) {
                if ($type != 'object') {
                    $type = PDO::FETCH_ASSOC;
                }else{
                    $type = PDO::FETCH_OBJ;

                }
                $result = $stm->fetchAll($type);
                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }
        return false;
    }

    public function createTable(){
        $query = "CREATE TABLE IF NOT EXISTS `users` (
            `id` int(3) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) NOT NULL,
            `age` int(3) NOT NULL,
            `pass` varchar(255) NOT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4";
        $this->query($query);
    }
}
