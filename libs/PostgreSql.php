<?php
class PostgreSql extends SQL
{
    private $user;
    private $pass;
    private $host;
    protected $db;
    private $conn;
    public function __construct()
    {
        $this->host = "127.0.0.1";
        $this->user = "postgres";
        $this->pass = "";
        $this->db = "postgres";
    }
    public function getConnect()
    {
        $this->connection = pg_connect("host=$this->host dbname=$this->db user=$this->user password=$this->pass");
        if (!$this->connection)
        {
            die("Could not open connection to database server");
        }else
        {
            return true;
        }
    }
    public function exec()
    {
        if(!$this->connection)
        {
            die("Cannot connect to $this->db");
        }
        $resStr = parent::exec();
        $postInsertStr = str_replace('`', ' ', $resStr);
        $res = pg_query($postInsertStr);
        while ($row[] = pg_fetch_array($res))
        {
        }
        return $row;


    }
}
?>
