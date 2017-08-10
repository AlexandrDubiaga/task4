<?php
class Mysql extends SQL
{
    private $user;
    private $password;
    private $host;
    private $dB;
    private $conn;
    public function	 __construct()
    {
        $this->user = "user1";
        $this->dB = "user1";
        $this->host = "localhost";
        $this->password = "tuser1";
    }
    public function getConn()
    {
            try
            {
                if(!isset($this->user) || !isset($this->dB) ||  !isset($this->host) || !isset( $this->password))
                {
                    throw new Exception('Something wrong with filds connect to DB mysql');
                }else
                {
                    $this->conn = mysql_connect($this->host, $this->user, $this->password);
                }
                try
                {
                    if(!mysql_select_db($this->dB))
                    {
                        throw new Exception('No DB in mysql');
                    }else
                    {
                        return true;
                    }
                }catch (Exception $mysqlSelectDbExeption)
                {
                    echo $mysqlSelectDbExeption->getMessage(), "\n";
                }
            }catch (Exception $connectExeption)
            {
                echo $connectExeption->getMessage(), "\n";
            }
        return $this->conn;
    }
    public function exec()
    {
        try
        {
            if (!$this->conn)
            {
                throw new Exception('Cant connect to mysql');
            }else
            {
                $res = parent::exec();
                try
                {
                    if (!$res || empty($res) || !isset($res))
                    {
                        throw new Exception('mysql result string error');
                    } else
                    {
                        if ($this->selectVal)
                        {
                            $result = mysql_query($res);
                            while ($row[] = mysql_fetch_array($result))
                            {
                            }
                            return $row;
                        }else if ($this->insertVal)
                        {
                            mysql_query($res);
                        }else if ($this->updateVal)
                        {
                            mysql_query($res);
                        }else if ($this->deleteVal)
                        {
                            mysql_query($res);
                        }
                    }
                }catch (Exception $parentResultStringExeption)
                {
                    echo $parentResultStringExeption->getMessage(), "\n";
                }
            }
        }catch (Exception $connectExeption)
        {
            echo $connectExeption->getMessage(), "\n";
        }
    }
}

