<?php
class Msql extends Sql
{
    private $user;
    private $password;
    private $host;
    private $dB;
    private $conn;
    public function	 __construct(){
        $this->user = "mmbti";
        $this->dB = "nsi";
        $this->host = "10.3.149.123";
        $this->password = "bti";
    }
    public function getConn()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password);
        if (!$this->conn) { echo ("Error no connect!"); }
        if( $this->conn->select_db($this->dB)) { echo "Connect to.".$this->dB.". good!"; }
        else die ("Cant connect to db $this->dB!");
        return $this->conn;
    }
}
