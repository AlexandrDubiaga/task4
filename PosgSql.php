<?php
class PostgreSQL implements iWorkData
{
    protected $connection;
    public function __construct()
    {
        $host = "localhost";
        $user = "user1";
        $pass = "user1z";
        $db = "user1";
        $this->connection = pg_connect("host=$host dbname=$db user=$user password=$pass");
        if (!$this->connection)
        {
            die("Could not open connection to database server");
        }else
        {
            return true;
        }
    
    }
}
?>
