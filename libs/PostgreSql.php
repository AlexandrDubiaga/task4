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
            } catch (Exception $z)
            {
                echo $z->getMessage();
            }
        } catch (Exception $s)
        {
            echo $s->getMessage();
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
            }else
            {
                $resStr = parent::exec();
                try
                {
                    if(empty($resStr) && !isset($resStr) )
                    {
                        throw new Exception('resource string postgreSQL Error');
                    }else
                    {
                        $postInsertStr = str_replace('`', ' ', $resStr);
                        $res = pg_query($postInsertStr);
                        try
                        {
                            if(!$res || empty($res) || !isset($res))
                            {
                                throw new Exception('pg_query result error');
                            }else
                            {
                                while ($row[] = pg_fetch_array($res))
                                {
                                }
                                try{
                                    if(empty($row))
                                    {
                                        throw new Exception('result pg_fetch_array  error, empty $row');
                                    }else
                                    {
                                        return $row;
                                    }
                                }catch (Exception $x)
                                {
                                    echo $x->getMessage();
                                }
                            }
                        }catch (Exception $ex)
                        {
                            echo $ex->getMessage();
                        }
                    }
                }catch (Exception $x)
                {
                    echo $x->getMessage();
                }
            }
        }catch (Exception $c)
        {
            echo $c->getMessage();
        }
    }
}
?>
