<?php
class Mysql extends SQL
{
    private $user;
    private $password;
    private $host;
    private $dB;
    private $conn;
    public function	 __construct(){
        $this->user = "mysql";
        $this->dB = "test";
        $this->host = "127.0.0.1";
        $this->password = "mysql";
    }
    public function getConn()
    {
        $this->conn = mysql_connect($this->host, $this->user, $this->password);
        if(mysql_select_db($this->dB))
        {
           return true;
        }
        else die ("Cant connect to db $this->dB!");
        return $this->conn;
    }
    public function exec()
    {
        if(!$this->conn)
        {
            die ("Cant connect to db $this->dB");
        }
        $res = parent::exec();
        $result =  mysql_query("$res");
        while ($row[] = mysql_fetch_array($result))
        {
        }
        return $row;

    }


}

