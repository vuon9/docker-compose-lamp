<?php

class DataHelper
{
    const HOST = 'nx_mysql';
    const USERNAME = 'root';
    const PASSWORD = 'root';

    public function getConnection() 
    {
        $my = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD);
        if(!$my) {
            die('Cannot connect to mysql');
        }
        return $my;
    }

    public function showDatabases() 
    {
        $my = $this->getConnection();
        $result = $my->query("SHOW DATABASES");
        $databases = array();

        while (($row = $result->fetch_assoc())) {
            $databases[] = $row['Database'];
        }

        return $databases;
    }
}