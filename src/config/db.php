<?php
/**
 * Created by PhpStorm.
 * User: Tanvir
 * Date: 01-Oct-17
 * Time: 9:33 AM
 */

class db
{
    //properties
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'crud';

    //connection
    public function connect()
    {
        $mysql_connect = 'mysql:'.$this->dbhost;'dbname='.$this->dbname;
        $dbCon = new PDO($mysql_connect, $this->dbuser, $this->dbpass);
        $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbCon;
    }
}