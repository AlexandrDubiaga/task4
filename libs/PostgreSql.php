<?php
class PostgreSql extends SQL
{
    private $user;
    private $pass;
    private $host;
    protected $db;
    private $connection;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "user1";
        $this->pass = "user1z";
        $this->db = "user1";
    }

    public function getConnect()
    {
        try
        {
            if (!isset($this->host) || !isset($this->user) || !isset($this->pass) || !isset($this->db))
            {
                throw new Exception('Something wrong with filds connect to DB postgreSQL');
            }else
            {
                $this->connection = pg_connect("host=$this->host dbname=$this->db user=$this->user password=$this->pass");
            }
            try
            {
                if (!$this->connection)
                {
                    throw new Exception('No DB postgreSQL');
                } else
                {
                    return true;
                }
            } catch (Exception $dbExeption)
            {
                echo $dbExeption->getMessage(), "\n";
            }
        } catch (Exception $connectExeption)
        {
            echo $connectExeption->getMessage(), "\n";
        }
        return $this->connection;
    }

    public function exec()
    {
        try
        {
            if (!$this->connection)
            {
                throw new Exception('Cant connect to postgreSQL');
            } else
            {
                $resStr = parent::exec();
                $postInsertStr = str_replace('`', ' ', $resStr);
                $res = pg_query($postInsertStr);
                try {
                    if (!$res || empty($res) || !isset($res))
                    {
                        throw new Exception('pg_query result error');
                    } else
                    {
                        while ($row[] = pg_fetch_array($res))
                        {
                        }
                        return $row;
                    }
                } catch (Exception $parentResultStringExeption)
                {
                    echo $parentResultStringExeption->getMessage(), "\n";
                }
            }
        }catch(Exception $connectExeption)
        {
            echo $connectExeption->getMessage(), "\n";
        }
    }
}
?>
