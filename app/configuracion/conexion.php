<?php

  class Connection{

    public $host ='localhost';
    public $dbname = 'cafeteria';
    public $port = "5432";
    public $username ='root';
    public $password = '';
    public $driver='pgsql';
    public $connect ;

    public static function getConnection()
    {
     try{
       $connection = new connection();
       $connection->connect = new PDO("{$connection->driver}:host={$connection->host}
       ;port={$connection->port};dbname={$connection->dbname}",$connection->username, $connection->password);
       $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "connection success";
     }catch(\Throwable $th){
      echo $th->getMessage();
     }
    }

  }
  connection::getConnection();

?>