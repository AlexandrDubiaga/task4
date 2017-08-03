<?php
class PosgSql extends SQL
{
    private $user;
    private $password;
    private $host;
    protected $dB;
    private $conn;
    public function __construct()
    {
        $this->host = 'localhost';
        $this->dB = 'user1';
        $this->user = 'user1';
        $this->password = 'user1z';
        $this->conn = pg_connect("host=$host dbname=user1 user=$user password=$password");
        if (!$this->conn)
        {
            die("Could not open connection to database server");
        }else
        {
            return true;
        }
    
    }
}
?>
