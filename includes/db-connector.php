<?php

class MySQLConnector{
    private $connector;
    private $server = "localhost";
    private $dbname = "id21238446_deaquisoy";
    private $user = "id21238446_admin";
    private $passwd = "Admin@root1";

    public function __construct(){
        try{
            $this->connector = new PDO("mysql:host={$this->server};dbname={$this->dbname}", $this->user, $this->passwd);
            $this->connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            throw new PDOException("Error de conexion, contactese con soporte. Detalles -> ERR: " .$ex->getMessage());
        }
    }

    public function getConnection():PDO
    {
        return $this->connector;
    }
}

?>